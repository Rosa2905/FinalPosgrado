<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Alum;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\AlumnoRequest;


use DB;



class AlumnoController extends Controller
{
    
	public function __construct(){
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


	public function index(){
		 //$Alumno = Alum::all();
		// return $Alumno;
		 //return view('usuarios.alumno.index',["Alumno"=>$Alumno]);
		return view('usuarios.alumno.index');
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
		$alumno->director="uno";
		$alumno->codirector="uno";
		$alumno->campus="uno";
		$alumno->carrera="uno";
		$alumno->LGAC="uno";
		$alumno->grado="MI";
		$alumno->corte="uno";
		$alumno->estatus="Vigente";
		$alumno->fecha_ingreso="2018-07-19";
		$alumno->fecha_egreso="2018-07-19";
		$alumno->fecha_ideal="2018-07-19";
		$alumno->foto="uno";
		$alumno->SAGCC="uno";
		$alumno->save();

		// $alumno= new Alum;
		// $alumno->matricula=$request->get('Matricula');
		// $alumno->CVU=$request->get('CVU');
		// $alumno->nombre=$request->get('Nombre');
		// $alumno->apellido_paterno=$request->get('ApellidoP');
		// $alumno->apellido_materno=$request->get('ApellidoM');
		// $alumno->correo=$request->get('Correo');
		// $alumno->telefono=$request->get('Telefono');
		// $alumno->corte="uno";
		// $alumno->director=$request->get('Director');
		// $alumno->codirector=$request->get('Codirector');
		// $alumno->campus=$request->get('Campus');
		// $alumno->carrera=$request->get('Carrera');
		// $alumno->LGAC=$request->get('LGAC');
		// $alumno->grado=$request->get('Grado');
		// $alumno->corte=$request->get('Corte');
		// $alumno->estatus=$request->get('estatus');
		// $alumno->fecha_ingreso=$request->get('FechaIn');
		// $alumno->SAGCC=$request->get('SAGCC');
		// $alumno->save();


		return Redirect::to('usuarios/alumno');
	}
	public function show($id){
		$Alumno = Alum::findOrFail($id);
		// return view("usuarios.alumno.mas",["Alumno"=>Alum::findOrFail($Matricula)]);
		return view("usuarios.alumno.mas",["Alumno"=>$Alumno]);
	}

	public function edit($id){
		 $Alumno = Alum::findOrFail($id);
		 return view("usuarios.alumno.edit",["Alumno"=>$Alumno]);
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
		// $Alumno->corte=$request->get('Corte');
        $Alumno->update();
        // return Redirect::to('usuarios/alumno');
        return $Alumno->nombre;
        
      
    }

	public function destroy($id){

	}

}
