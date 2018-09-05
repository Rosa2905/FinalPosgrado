<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Alum;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\AlumnoRequest;
use Barryvdh\DomPDF\Facade as PDF;
use Alert;
use DB;
class AlumnoController extends Controller
{
    
	  public function __construct()
    {
        $this->middleware('auth');
    }
	// public function index(AlumnoRequest $request){
	// 	// if($request){
	// 	// 	$query=trim($request->get('search'));			
	// 	// 	$Alumno=DB::table('alumno')->where('nombre','LIKE','%'.$query.'%')
	// 	// 	->orWhere('Matricula','LIKE','%'.$query.'%')
	// 	// 	//->where('matricula','=','1')
	// 	// 	->OrderBy('Matricula','desc')
	// 	// 	->paginate(3);
	// 	// 	//return view ('usuarios.alumno.index',compact("quer"));
	// 	// 	return view('usuarios.alumno.index',["Alumno"=>$Alumno,"search"=>$query]);
	// 	// }
		
	// }


	 // $mira = DB::Table('alums')->where('id', 1)->first();
			 
		// 	 return view("usuarios.alumno.mas", ["Alumno"=>$mira]);
	public function index(){
		 //$Alumno = Alum::all();
		// return $Alumno;
		 //return view('usuarios.alumno.index',["Alumno"=>$Alumno]);
		return view('usuarios.alumno.index');
	}

	public function Doinicio(){
		 $Alumno = Alum::all();
		 return view('usuarios.alumno.Docente.index',["Alumno"=>$Alumno]);
		// return view('usuarios.alumno.Docente.index');
	}
	public function all(){
		return Datatables::eloquent(Alum::query())->make(true);
	}
	public function create(){
	 return view('usuarios.alumno.create');
	}
	public function store(AlumnoRequest $request){
		$alumno= new Alum;	 
		$alumno->matricula=$request->get('Matricula');
		$alumno->CVU=$request->get('CVU');
		$alumno->nombre=$request->get('Nombre');
		$alumno->apellido_paterno=$request->get('ApellidoP');
		$alumno->apellido_materno=$request->get('ApellidoM');
		$alumno->correo=$request->get('Correo');
		$alumno->telefono=$request->get('Telefono');
		$alumno->corte="uno";
		$alumno->director=$request->get('dirtesis');
		$alumno->codirector=$request->get('cotesis');
		$alumno->LGAC=$request->get('LGAC');
		$alumno->SAGCC=$request->get('cono');
		$alumno->grado=$request->get('grado');
		$alumno->estatus="Vigente";
		$alumno->fecha_ingreso=$request->get('cmbEleccion');
		$alumno->fecha_egreso=$request->get('fechaideal');
		$alumno->fecha_ideal=$request->get('feegre');
		$alumno->fecha_titulacion="No se ha titulado";
		// $alumno->fecha_titulacion="2018-07-19";
		// $alumno->imagenes=$request->file('imagen')->storeAs('public',$alumno->correo);   
		// Image::make(input::file('foto')->resize(300,200)->save(foo.jpg));
		$alumno->Beca=$request->get('Beca');
		$alumno->Modalidad=$request->get('pago');
		$alumno->Conocimiento=$request->get('reconocimiento');
		// $alumno->imagenes=$alumno->correo;
		if($alumno->fecha_ingreso){
			$alumno->save();
			return Redirect::to('usuarios/alumno')->with('creado', 'Nuevo Alumno agregado!');}
		else
			return redirect()->back()->withErrors("Error capturando datos");
	}
		public function show($id){
		$Alumno = Alum::findOrFail($id);
		// return view("usuarios.alumno.mas",["Alumno"=>Alum::findOrFail($Matricula)]);
		return view("usuarios.alumno.mas",["Alumno"=>$Alumno]);
	}


	public function reporte($id,$num){
		$Alumno = Alum::findOrFail($id);
		if($num==1){
			$pdf = PDF::loadView("usuarios.alumno.reporte",["Alumno"=>$Alumno]);
        	return $pdf->download('listado.pdf');
   		}
	    elseif($num==2){
	    	$pdf = PDF::loadView("usuarios.alumno.reporte1",["Alumno"=>$Alumno]);
	        return $pdf->download('listado.pdf');
   		 }
   		elseif($num==3){
	    	$pdf = PDF::loadView("usuarios.alumno.Reportes.reporteAlumno",["Alumno"=>$Alumno]);
	        return $pdf->download('listado.pdf');
   		}

    	
	}


	public function edit($id){
		 $Alumno = Alum::findOrFail($id);
		 return view("usuarios.alumno.edit",["Alumno"=>$Alumno]);
		 //["Alumno"=>$Alumno,"search"=>$query]);
	}
	public function editP($id){
		 $Alumno = Alum::findOrFail($id);
		 return view("usuarios.alumno.editPos",["Alumno"=>$Alumno]);
		 //["Alumno"=>$Alumno,"search"=>$query]);
	}
	// public function mas($Matricula){
	// 	//return view("usuarios.alumno.edit");
	// 	 return view("usuarios.alumno.mas",["Alumno"=>Alum::findOrFail($Matricula)]);
	// 	 //["Alumno"=>$Alumno,"search"=>$query]);
	// }
	public function update(AlumnoRequest $request,$id)
    {
        $Alumno=Alum::findOrFail($id);
        $Alumno->nombre=$request->get('nombre');
        $Alumno->matricula=$request->get('matricula');
        $Alumno->telefono=$request->get('telefono');
        $Alumno->apellido_paterno=$request->get('apellido_paterno');
        $Alumno->apellido_materno=$request->get('apellido_materno');
		$Alumno->CVU=$request->get('CVU');
		$Alumno->correo=$request->get('correo');
		// $Alumno->imagenes=$request->file('imagen')->storeAs('public',$Alumno->correo);   
		// $Alumno->imagenes=$Alumno->correo;
		// $Alumno->imagenes=$request->file('im')->storeAs('public',$Alumno->correo); 
		// $Alumno->imagenes=$Alumno->correo;
		// $Alumno->corte=$request->get('Corte');
        $Alumno->update();
        // return Redirect::to('usuarios/alumno');
        return $Alumno->nombre;


    }

    public function updatePos(AlumnoRequest $request,$id)
    {
       
     
       $Alumno=Alum::findOrFail($id);
        $Alumno->codirector=$request->get('cotesis');
        $Alumno->director=$request->get('dirtesis');
        $Alumno->LGAC=$request->get('lgaci');
		$Alumno->SAGCC=$request->get('sagcc');
		$Alumno->grado=$request->get('gradoi');
		// $Alumno->corte=$request->get('lgacD');
		$Alumno->estatus=$request->get('estatusD');
		$Alumno->fecha_ingreso=$request->get('feinD');
		$Alumno->fecha_ideal=$request->get('feidD');
		$Alumno->fecha_egreso=$request->get('feegD');
		$Alumno->fecha_titulacion=$request->get('feti');
		if($Alumno->codirector && $Alumno->director ) {
         $Alumno->update();
         return Redirect::to('usuarios/alumno')->with('message', 'Edicion Exitosa!');}
     	else
         return redirect()->back()->withErrors("Error capturando datos");
}

	public function destroy($id){
	}
}