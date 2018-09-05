<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Alum;
use App\Admin;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\AlumnoRequest;
use Barryvdh\DomPDF\Facade as PDF;
use Alert;
use DB;
class AdminController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response

     */


    public function index()
    {
         $Alumno = Alum::all();
         return view('usuarios.alumno.admelec',["Alumno"=>$Alumno]);
    }

     public function Docente()
    {
         $Alumno = Alum::all();
         return view('usuarios.alumno.Docente.admelec',["Alumno"=>$Alumno]);
    }

    public function reporte($num){
       // $Alumno = Alum::findOrFail($id);
        if($num==1){
        $pdf = PDF::loadView("usuarios.alumno.indiGlobal");
        return $pdf->download('listado.pdf');
         }
    else
        return 'hola';

        
    }

    public function indicador($num){

        $egQu= DB::Table('alums')->where('SAGCC', 'Quimica')->where('grado','LIKE','%'.'M'.'%')->count();$baQu= DB::Table('alums')->where('SAGCC', 'Quimica')->where('estatus','Baja')->where('grado','LIKE','%'.'M'.'%')->count();$tiExQu= DB::Table('alums')->where('SAGCC', 'Quimica')->where('estatus', 'Extemporaneo')->where('grado','LIKE','%'.'M'.'%')->count();$tiPCQu= DB::Table('alums')->where('SAGCC', 'Quimica')->where('corte', 1)->where('grado','LIKE','%'.'M'.'%')->count();  $tiSCQu= DB::Table('alums')->where('SAGCC', 'Quimica')->where('corte', 2)->where('grado','LIKE','%'.'M'.'%')->count();$tiTCQu= DB::Table('alums')->where('SAGCC', 'Quimica')->where('corte', 3)->where('grado','LIKE','%'.'M'.'%')->count();$ViQu= DB::Table('alums')->where('SAGCC', 'Quimica')->where('estatus', 'Vigente')->where('grado','LIKE','%'.'M'.'%')->count();$TeQu= DB::Table('alums')->where('SAGCC', 'Quimica')->where('estatus', 'Tesista')->where('grado','LIKE','%'.'M'.'%')->count();

        $egMA= DB::Table('alums')->where('SAGCC', 'Medio Ambiente')->where('grado','LIKE','%'.'M'.'%')->count();$baMA= DB::Table('alums')->where('SAGCC', 'Medio Ambiente')->where('estatus', 'Baja')->where('grado','LIKE','%'.'M'.'%')->count();$tiExMA= DB::Table('alums')->where('SAGCC', 'Medio Ambiente')->where('estatus', 'Extemporaneo')->where('grado','LIKE','%'.'M'.'%')->count();$tiPCMA= DB::Table('alums')->where('SAGCC', 'Medio Ambiente')->where('corte', 1)->where('grado','LIKE','%'.'M'.'%')->count();  $tiSCMA= DB::Table('alums')->where('SAGCC', 'Medio Ambiente')->where('corte', 2)->where('grado','LIKE','%'.'M'.'%')->count();$tiTCMA= DB::Table('alums')->where('SAGCC', 'Medio Ambiente')->where('corte', 3)->where('grado','LIKE','%'.'M'.'%')->count();$ViMA= DB::Table('alums')->where('SAGCC', 'Medio Ambiente')->where('estatus', 'Vigente')->where('grado','LIKE','%'.'M'.'%')->count();$TeMA= DB::Table('alums')->where('SAGCC', 'Medio Ambiente')->where('estatus', 'Tesista')->where('grado','LIKE','%'.'M'.'%')->count();


         $egIn= DB::Table('alums')->where('SAGCC','Industrial')->where('grado','LIKE','%'.'M'.'%')->count();$baIn= DB::Table('alums')->where('SAGCC','Industrial')->where('estatus', 'Baja')->where('grado','LIKE','%'.'M'.'%')->count();$tiExIn= DB::Table('alums')->where('SAGCC','Industrial')->where('estatus', 'Extemporaneo')->where('grado','LIKE','%'.'M'.'%')->count();$tiPCIn= DB::Table('alums')->where('SAGCC','Industrial')->where('corte', 1)->where('grado','LIKE','%'.'M'.'%')->count();
         $tiSCIn= DB::Table('alums')->where('SAGCC','Industrial')->where('corte', 2)->where('grado','LIKE','%'.'M'.'%')->count();$tiTCIn= DB::Table('alums')->where('SAGCC','Industrial')->where('corte', 3)->where('grado','LIKE','%'.'M'.'%')->count();$ViIn= DB::Table('alums')->where('SAGCC','Industrial')->where('estatus', 'Vigente')->where('grado','LIKE','%'.'M'.'%')->count();$TeIn= DB::Table('alums')->where('SAGCC','Industrial')->where('estatus', 'Tesista')->where('grado','LIKE','%'.'M'.'%')->count();

        $egEl= DB::Table('alums')->where('SAGCC','Electrica')->where('grado','LIKE','%'.'M'.'%')->count();$baEl= DB::Table('alums')->where('SAGCC','Electrica')->where('estatus', 'Baja')->where('grado','LIKE','%'.'M'.'%')->count();$tiExEl= DB::Table('alums')->where('SAGCC','Electrica')->where('estatus', 'Extemporaneo')->where('grado','LIKE','%'.'M'.'%')->count();$tiPCEl= DB::Table('alums')->where('SAGCC','Electrica')->where('corte', 1)->where('grado','LIKE','%'.'M'.'%')->count();
        $tiSCEl= DB::Table('alums')->where('SAGCC','Electrica')->where('corte', 2)->where('grado','LIKE','%'.'M'.'%')->count();$tiTCEl= DB::Table('alums')->where('SAGCC','Electrica')->where('corte', 3)->where('grado','LIKE','%'.'M'.'%')->count();$ViEl= DB::Table('alums')->where('SAGCC','Electrica')->where('estatus', 'Vigente')->where('grado','LIKE','%'.'M'.'%')->count();$TeEl= DB::Table('alums')->where('SAGCC','Electrica')->where('estatus', 'Tesista')->where('grado','LIKE','%'.'M'.'%')->count();

        $egCOM= DB::Table('alums')->where('SAGCC', 'Computacion')->where('grado','LIKE','%'.'M'.'%')->count();$baCOM= DB::Table('alums')->where('SAGCC', 'Computacion')->where('estatus', 'Baja')->where('grado','LIKE','%'.'M'.'%')->count();$tiExCOM= DB::Table('alums')->where('SAGCC', 'Computacion')->where('estatus', 'Extemporaneo')->where('grado','LIKE','%'.'M'.'%')->count();$tiPCCOM= DB::Table('alums')->where('SAGCC', 'Computacion')->where('corte', 1)->where('grado','LIKE','%'.'M'.'%')->count();  $tiSCCOM= DB::Table('alums')->where('SAGCC', 'Computacion')->where('corte', 2)->where('grado','LIKE','%'.'M'.'%')->count();$tiTCCOM= DB::Table('alums')->where('SAGCC', 'Computacion')->where('corte', 3)->where('grado','LIKE','%'.'M'.'%')->count();$ViCOM= DB::Table('alums')->where('SAGCC', 'Computacion')->where('estatus', 'Vigente')->where('grado','LIKE','%'.'M'.'%')->count();$TeCOM= DB::Table('alums')->where('SAGCC', 'Computacion')->where('estatus', 'Tesista')->where('grado','LIKE','%'.'M'.'%')->count();
        
        $egBi= DB::Table('alums')->where('LGAC','Bioquimica')->where('grado','LIKE','%'.'M'.'%')->count();$baBi= DB::Table('alums')->where('LGAC','Bioquimica')->where('estatus', 'Baja')->where('grado','LIKE','%'.'M'.'%')->count();$tiExBi= DB::Table('alums')->where('LGAC','Bioquimica')->where('estatus', 'Extemporaneo')->where('grado','LIKE','%'.'M'.'%')->count();$tiPCBi= DB::Table('alums')->where('LGAC','Bioquimica')->where('corte', 1)->where('grado','LIKE','%'.'M'.'%')->count();
        $tiSCBi= DB::Table('alums')->where('LGAC','Bioquimica')->where('corte', 2)->where('grado','LIKE','%'.'M'.'%')->count();$tiTCBi= DB::Table('alums')->where('LGAC','Bioquimica')->where('corte', 3)->where('grado','LIKE','%'.'M'.'%')->count();$ViBi= DB::Table('alums')->where('LGAC','Bioquimica')->where('estatus', 'Vigente')->where('grado','LIKE','%'.'M'.'%')->count();$TeBi= DB::Table('alums')->where('LGAC','Bioquimica')->where('estatus', 'Tesista')->where('grado','LIKE','%'.'M'.'%')->count();

         $egCor= DB::Table('alums')->where('LGAC','Corrosion y Materiales')->where('grado','LIKE','%'.'M'.'%')->count();$baCor= DB::Table('alums')->where('LGAC','Corrosion y Materiales')->where('estatus', 'Baja')->where('grado','LIKE','%'.'M'.'%')->count();$tiExCor= DB::Table('alums')->where('LGAC','Corrosion y Materiales')->where('estatus', 'Extemporaneo')->where('grado','LIKE','%'.'M'.'%')->count();$tiPCCor= DB::Table('alums')->where('LGAC','Corrosion y Materiales')->where('corte', 1)->where('grado','LIKE','%'.'M'.'%')->count();
         $tiSCCor= DB::Table('alums')->where('LGAC','Corrosion y Materiales')->where('corte', 2)->where('grado','LIKE','%'.'M'.'%')->count();$tiTCCor= DB::Table('alums')->where('LGAC','Corrosion y Materiales')->where('corte', 3)->where('grado','LIKE','%'.'M'.'%')->count();$ViCor= DB::Table('alums')->where('LGAC','Corrosion y Materiales')->where('estatus', 'Vigente')->where('grado','LIKE','%'.'M'.'%')->count();$TeCor= DB::Table('alums')->where('LGAC','Corrosion y Materiales')->where('estatus', 'Tesista')->where('grado','LIKE','%'.'M'.'%')->count();

        $egCA= DB::Table('alums')->where('LGAC','Contaminacion Ambiental')->where('grado','LIKE','%'.'M'.'%')->count();$baCA= DB::Table('alums')->where('LGAC','Contaminacion Ambiental')->where('estatus', 'Baja')->where('grado','LIKE','%'.'M'.'%')->count();$tiExCA= DB::Table('alums')->where('LGAC','Contaminacion Ambiental')->where('estatus', 'Extemporaneo')->where('grado','LIKE','%'.'M'.'%')->count();$tiPCCA= DB::Table('alums')->where('LGAC','Contaminacion Ambiental')->where('corte', 1)->where('grado','LIKE','%'.'M'.'%')->count();
         $tiSCCA= DB::Table('alums')->where('LGAC','Contaminacion Ambiental')->where('corte', 2)->where('grado','LIKE','%'.'M'.'%')->count();$tiTCCA= DB::Table('alums')->where('LGAC','Contaminacion Ambiental')->where('corte', 3)->where('grado','LIKE','%'.'M'.'%')->count();$ViCA= DB::Table('alums')->where('LGAC','Contaminacion Ambiental')->where('estatus', 'Vigente')->where('grado','LIKE','%'.'M'.'%')->count();$TeCA= DB::Table('alums')->where('LGAC','Contaminacion Ambiental')->where('estatus', 'Tesista')->where('grado','LIKE','%'.'M'.'%')->count();


        $egISS= DB::Table('alums')->where('LGAC','Ing.Software y simulacion social')->where('grado','LIKE','%'.'M'.'%')->count();$baISS= DB::Table('alums')->where('LGAC','Ing.Software y simulacion social')->where('estatus', 'Baja')->where('grado','LIKE','%'.'M'.'%')->count();$tiExISS= DB::Table('alums')->where('LGAC','Ing.Software y simulacion social')->where('estatus', 'Extemporaneo')->where('grado','LIKE','%'.'M'.'%')->count();$tiPCISS= DB::Table('alums')->where('LGAC','Ing.Software y simulacion social')->where('corte', 1)->where('grado','LIKE','%'.'M'.'%')->count();
         $tiSCISS= DB::Table('alums')->where('LGAC','Ing.Software y simulacion social')->where('corte', 2)->where('grado','LIKE','%'.'M'.'%')->count();$tiTCISS= DB::Table('alums')->where('LGAC','Ing.Software y simulacion social')->where('corte', 3)->where('grado','LIKE','%'.'M'.'%')->count();$ViISS= DB::Table('alums')->where('LGAC','Ing.Software y simulacion social')->where('estatus', 'Vigente')->where('grado','LIKE','%'.'M'.'%')->count();$TeISS= DB::Table('alums')->where('LGAC','Ing.Software y simulacion social')->where('estatus', 'Tesista')->where('grado','LIKE','%'.'M'.'%')->count();

         $egCU= DB::Table('alums')->where('LGAC','Computo movil y oblicuo')->where('grado','LIKE','%'.'M'.'%')->count();$baCU= DB::Table('alums')->where('LGAC','Computo movil y oblicuo')->where('estatus', 'Baja')->where('grado','LIKE','%'.'M'.'%')->count();$tiExCU= DB::Table('alums')->where('LGAC','Computo movil y oblicuo')->where('estatus', 'Extemporaneo')->where('grado','LIKE','%'.'M'.'%')->count();$tiPCCU= DB::Table('alums')->where('LGAC','Computo movil y oblicuo')->where('corte', 1)->where('grado','LIKE','%'.'M'.'%')->count();
        $tiSCCU= DB::Table('alums')->where('LGAC','Computo movil y oblicuo')->where('corte', 2)->where('grado','LIKE','%'.'M'.'%')->count();$tiTCCU= DB::Table('alums')->where('LGAC','Computo movil y oblicuo')->where('corte', 3)->where('grado','LIKE','%'.'M'.'%')->count();$ViCU= DB::Table('alums')->where('LGAC','Computo movil y oblicuo')->where('estatus', 'Vigente')->where('grado','LIKE','%'.'M'.'%')->count();$TeCU= DB::Table('alums')->where('LGAC','Computo movil y oblicuo')->where('estatus', 'Tesista')->where('grado','LIKE','%'.'M'.'%')->count();

        $egSEE= DB::Table('alums')->where('LGAC','Sistemas electricos y electronicos')->where('grado','LIKE','%'.'M'.'%')->count();$baSEE= DB::Table('alums')->where('LGAC','Sistemas electricos y electronicos')->where('estatus', 'Baja')->where('grado','LIKE','%'.'M'.'%')->count();$tiExSEE= DB::Table('alums')->where('LGAC','Sistemas electricos y electronicos')->where('estatus', 'Extemporaneo')->where('grado','LIKE','%'.'M'.'%')->count();$tiPCSEE= DB::Table('alums')->where('LGAC','Sistemas electricos y electronicos')->where('corte', 1)->where('grado','LIKE','%'.'M'.'%')->count();
        $tiSCSEE= DB::Table('alums')->where('LGAC','Sistemas electricos y electronicos')->where('corte', 2)->where('grado','LIKE','%'.'M'.'%')->count();$tiTCSEE= DB::Table('alums')->where('LGAC','Sistemas electricos y electronicos')->where('corte', 3)->where('grado','LIKE','%'.'M'.'%')->count();$ViSEE= DB::Table('alums')->where('LGAC','Sistemas electricos y electronicos')->where('estatus', 'Vigente')->where('grado','LIKE','%'.'M'.'%')->count();$TeSEE= DB::Table('alums')->where('LGAC','Sistemas electricos y electronicos')->where('estatus', 'Tesista')->where('grado','LIKE','%'.'M'.'%')->count();

        $egMPA= DB::Table('alums')->where('LGAC', 'Manufactura produccion y calidad')->where('grado','LIKE','%'.'M'.'%')->count();$baMPA= DB::Table('alums')->where('LGAC', 'Manufactura produccion y calidad')->where('estatus', 'Baja')->where('grado','LIKE','%'.'M'.'%')->count();$tiExMPA= DB::Table('alums')->where('LGAC', 'Manufactura produccion y calidad')->where('estatus', 'Extemporaneo')->where('grado','LIKE','%'.'M'.'%')->count();$tiPCMPA= DB::Table('alums')->where('LGAC', 'Manufactura produccion y calidad')->where('corte', 1)->where('grado','LIKE','%'.'M'.'%')->count();  $tiSCMPA= DB::Table('alums')->where('LGAC', 'Manufactura produccion y calidad')->where('corte', 2)->where('grado','LIKE','%'.'M'.'%')->count();$tiTCMPA= DB::Table('alums')->where('LGAC', 'Manufactura produccion y calidad')->where('corte', 3)->where('grado','LIKE','%'.'M'.'%')->count();$ViMPA= DB::Table('alums')->where('LGAC', 'Manufactura produccion y calidad')->where('estatus', 'Vigente')->where('grado','LIKE','%'.'M'.'%')->count();$TeMPA= DB::Table('alums')->where('LGAC', 'Manufactura produccion y calidad')->where('estatus', 'Tesista')->where('grado','LIKE','%'.'M'.'%')->count();


        //=============================================DOCTORADO

        $egQuD= DB::Table('alums')->where('SAGCC', 'Quimica')->where('grado','LIKE','%'.'D'.'%')->count();$baQuD= DB::Table('alums')->where('SAGCC', 'Quimica')->where('estatus', 'Baja')->where('grado','LIKE','%'.'D'.'%')->count();$tiExQuD= DB::Table('alums')->where('SAGCC', 'Quimica')->where('estatus', 'Extemporaneo')->where('grado','LIKE','%'.'D'.'%')->count();$tiPCQuD= DB::Table('alums')->where('SAGCC', 'Quimica')->where('corte', 1)->where('grado','LIKE','%'.'D'.'%')->count();  $tiSCQuD= DB::Table('alums')->where('SAGCC', 'Quimica')->where('corte', 2)->where('grado','LIKE','%'.'D'.'%')->count();$tiTCQuD= DB::Table('alums')->where('SAGCC', 'Quimica')->where('corte', 3)->where('grado','LIKE','%'.'D'.'%')->count();$ViQuD= DB::Table('alums')->where('SAGCC', 'Quimica')->where('estatus', 'Vigente')->where('grado','LIKE','%'.'D'.'%')->count();$TeQuD= DB::Table('alums')->where('SAGCC', 'Quimica')->where('estatus', 'Tesista')->where('grado','LIKE','%'.'D'.'%')->count();

        $egMAD= DB::Table('alums')->where('SAGCC', 'Medio Ambiente')->where('grado','LIKE','%'.'D'.'%')->count();$baMAD= DB::Table('alums')->where('SAGCC', 'Medio Ambiente')->where('estatus', 'Baja')->where('grado','LIKE','%'.'D'.'%')->count();$tiExMAD= DB::Table('alums')->where('SAGCC', 'Medio Ambiente')->where('estatus', 'Extemporaneo')->where('grado','LIKE','%'.'D'.'%')->count();$tiPCMAD= DB::Table('alums')->where('SAGCC', 'Medio Ambiente')->where('corte', 1)->where('grado','LIKE','%'.'D'.'%')->count();  $tiSCMAD= DB::Table('alums')->where('SAGCC', 'Medio Ambiente')->where('corte', 2)->where('grado','LIKE','%'.'D'.'%')->count();$tiTCMAD= DB::Table('alums')->where('SAGCC', 'Medio Ambiente')->where('corte', 3)->where('grado','LIKE','%'.'D'.'%')->count();$ViMAD= DB::Table('alums')->where('SAGCC', 'Medio Ambiente')->where('estatus', 'Vigente')->where('grado','LIKE','%'.'D'.'%')->count();$TeMAD= DB::Table('alums')->where('SAGCC', 'Medio Ambiente')->where('estatus', 'Tesista')->where('grado','LIKE','%'.'D'.'%')->count();

         $tiSCMAD= DB::Table('alums')->where('SAGCC', 'Medio Ambiente')->where('corte', 2)->where('grado','LIKE','%'.'D'.'%')->count();$tiTCMAD= DB::Table('alums')->where('SAGCC','Medio Ambiente')->where('corte', 3)->where('grado','LIKE','%'.'D'.'%')->count();$ViMAD= DB::Table('alums')->where('SAGCC','Medio Ambiente')->where('estatus', 'Vigente')->where('grado','LIKE','%'.'D'.'%')->count();$TeMAD= DB::Table('alums')->where('SAGCC','Medio Ambiente')->where('estatus', 'Tesista')->where('grado','LIKE','%'.'D'.'%')->count();

         $egInD= DB::Table('alums')->where('SAGCC','Industrial')->where('grado','LIKE','%'.'D'.'%')->count();$baInD= DB::Table('alums')->where('SAGCC','Industrial')->where('estatus', 'Baja')->where('grado','LIKE','%'.'D'.'%')->count();$tiExInD= DB::Table('alums')->where('SAGCC','Industrial')->where('estatus', 'Extemporaneo')->where('grado','LIKE','%'.'D'.'%')->count();$tiPCInD= DB::Table('alums')->where('SAGCC','Industrial')->where('corte', 1)->where('grado','LIKE','%'.'D'.'%')->count();
         $tiSCInD= DB::Table('alums')->where('SAGCC','Industrial')->where('corte', 2)->where('grado','LIKE','%'.'D'.'%')->count();$tiTCInD= DB::Table('alums')->where('SAGCC','Industrial')->where('corte', 3)->where('grado','LIKE','%'.'D'.'%')->count();$ViInD= DB::Table('alums')->where('SAGCC','Industrial')->where('estatus', 'Vigente')->where('grado','LIKE','%'.'D'.'%')->count();$TeInD= DB::Table('alums')->where('SAGCC','Industrial')->where('estatus', 'Tesista')->where('grado','LIKE','%'.'D'.'%')->count();

        $egElD= DB::Table('alums')->where('SAGCC','Electrica')->where('grado','LIKE','%'.'D'.'%')->count();$baElD= DB::Table('alums')->where('SAGCC','Electrica')->where('estatus', 'Baja')->where('grado','LIKE','%'.'D'.'%')->count();$tiExElD= DB::Table('alums')->where('SAGCC','Electrica')->where('estatus', 'Extemporaneo')->where('grado','LIKE','%'.'D'.'%')->count();$tiPCElD= DB::Table('alums')->where('SAGCC','Electrica')->where('corte', 1)->where('grado','LIKE','%'.'D'.'%')->count();
        $tiSCElD= DB::Table('alums')->where('SAGCC','Electrica')->where('corte', 2)->where('grado','LIKE','%'.'D'.'%')->count();$tiTCElD= DB::Table('alums')->where('SAGCC','Electrica')->where('corte', 3)->where('grado','LIKE','%'.'D'.'%')->count();$ViElD= DB::Table('alums')->where('SAGCC','Electrica')->where('estatus', 'Vigente')->where('grado','LIKE','%'.'D'.'%')->count();$TeElD= DB::Table('alums')->where('SAGCC','Electrica')->where('estatus', 'Tesista')->where('grado','LIKE','%'.'D'.'%')->count();

        $egCOMD= DB::Table('alums')->where('SAGCC', 'Computacion')->where('grado','LIKE','%'.'D'.'%')->count();$baCOMD= DB::Table('alums')->where('SAGCC', 'Computacion')->where('estatus', 'Baja')->where('grado','LIKE','%'.'D'.'%')->count();$tiExCOMD= DB::Table('alums')->where('SAGCC', 'Computacion')->where('estatus', 'Extemporaneo')->where('grado','LIKE','%'.'D'.'%')->count();$tiPCCOMD= DB::Table('alums')->where('SAGCC', 'Computacion')->where('corte', 1)->where('grado','LIKE','%'.'D'.'%')->count();  $tiSCCOMD= DB::Table('alums')->where('SAGCC', 'Computacion')->where('corte', 2)->where('grado','LIKE','%'.'D'.'%')->count();$tiTCCOMD= DB::Table('alums')->where('SAGCC', 'Computacion')->where('corte', 3)->where('grado','LIKE','%'.'D'.'%')->count();$ViCOMD= DB::Table('alums')->where('SAGCC', 'Computacion')->where('estatus', 'Vigente')->where('grado','LIKE','%'.'D'.'%')->count();$TeCOMD= DB::Table('alums')->where('SAGCC', 'Computacion')->where('estatus', 'Tesista')->where('grado','LIKE','%'.'D'.'%')->count();
        
        $egBiD= DB::Table('alums')->where('LGAC','Bioquimica')->where('grado','LIKE','%'.'D'.'%')->count();$baBiD= DB::Table('alums')->where('LGAC','Bioquimica')->where('estatus', 'Baja')->where('grado','LIKE','%'.'D'.'%')->count();$tiExBiD= DB::Table('alums')->where('LGAC','Bioquimica')->where('estatus', 'Extemporaneo')->where('grado','LIKE','%'.'D'.'%')->count();$tiPCBiD= DB::Table('alums')->where('LGAC','Bioquimica')->where('corte', 1)->where('grado','LIKE','%'.'D'.'%')->count();
        $tiSCBiD= DB::Table('alums')->where('LGAC','Bioquimica')->where('corte', 2)->where('grado','LIKE','%'.'D'.'%')->count();$tiTCBiD= DB::Table('alums')->where('LGAC','Bioquimica')->where('corte', 3)->where('grado','LIKE','%'.'D'.'%')->count();$ViBiD= DB::Table('alums')->where('LGAC','Bioquimica')->where('estatus', 'Vigente')->where('grado','LIKE','%'.'D'.'%')->count();$TeBiD= DB::Table('alums')->where('LGAC','Bioquimica')->where('estatus', 'Tesista')->where('grado','LIKE','%'.'D'.'%')->count();

         $egCorD= DB::Table('alums')->where('LGAC','Corrosion y Materiales')->where('grado','LIKE','%'.'D'.'%')->count();$baCorD= DB::Table('alums')->where('LGAC','Corrosion y Materiales')->where('estatus', 'Baja')->where('grado','LIKE','%'.'D'.'%')->count();$tiExCorD= DB::Table('alums')->where('LGAC','Corrosion y Materiales')->where('estatus', 'Extemporaneo')->where('grado','LIKE','%'.'D'.'%')->count();$tiPCCorD= DB::Table('alums')->where('LGAC','Corrosion y Materiales')->where('corte', 1)->where('grado','LIKE','%'.'D'.'%')->count();
         $tiSCCorD= DB::Table('alums')->where('LGAC','Corrosion y Materiales')->where('corte', 2)->where('grado','LIKE','%'.'D'.'%')->count();$tiTCCorD= DB::Table('alums')->where('LGAC','Corrosion y Materiales')->where('corte', 3)->where('grado','LIKE','%'.'D'.'%')->count();$ViCorD= DB::Table('alums')->where('LGAC','Corrosion y Materiales')->where('estatus', 'Vigente')->where('grado','LIKE','%'.'D'.'%')->count();$TeCorD= DB::Table('alums')->where('LGAC','Corrosion y Materiales')->where('estatus', 'Tesista')->where('grado','LIKE','%'.'D'.'%')->count();

        $egCAD= DB::Table('alums')->where('LGAC','Contaminacion Ambiental')->where('grado','LIKE','%'.'D'.'%')->count();$baCAD= DB::Table('alums')->where('LGAC','Contaminacion Ambiental')->where('estatus', 'Baja')->where('grado','LIKE','%'.'D'.'%')->count();$tiExCAD= DB::Table('alums')->where('LGAC','Contaminacion Ambiental')->where('estatus', 'Extemporaneo')->where('grado','LIKE','%'.'D'.'%')->count();$tiPCCAD= DB::Table('alums')->where('LGAC','Contaminacion Ambiental')->where('corte', 1)->where('grado','LIKE','%'.'D'.'%')->count();
         $tiSCCAD= DB::Table('alums')->where('LGAC','Contaminacion Ambiental')->where('corte', 2)->where('grado','LIKE','%'.'D'.'%')->count();$tiTCCAD= DB::Table('alums')->where('LGAC','Contaminacion Ambiental')->where('corte', 3)->where('grado','LIKE','%'.'D'.'%')->count();$ViCAD= DB::Table('alums')->where('LGAC','Contaminacion Ambiental')->where('estatus', 'Vigente')->where('grado','LIKE','%'.'D'.'%')->count();$TeCAD= DB::Table('alums')->where('LGAC','Contaminacion Ambiental')->where('estatus', 'Tesista')->where('grado','LIKE','%'.'D'.'%')->count();


        $egISSD= DB::Table('alums')->where('LGAC','Ing.Software y simulacion social')->where('grado','LIKE','%'.'D'.'%')->count();$baISSD= DB::Table('alums')->where('LGAC','Ing.Software y simulacion social')->where('estatus', 'Baja')->where('grado','LIKE','%'.'D'.'%')->count();$tiExISSD= DB::Table('alums')->where('LGAC','Ing.Software y simulacion social')->where('estatus', 'Extemporaneo')->where('grado','LIKE','%'.'D'.'%')->count();$tiPCISSD= DB::Table('alums')->where('LGAC','Ing.Software y simulacion social')->where('corte', 1)->where('grado','LIKE','%'.'D'.'%')->count();
         $tiSCISSD= DB::Table('alums')->where('LGAC','Ing.Software y simulacion social')->where('corte', 2)->where('grado','LIKE','%'.'D'.'%')->count();$tiTCISSD= DB::Table('alums')->where('LGAC','Ing.Software y simulacion social')->where('corte', 3)->where('grado','LIKE','%'.'D'.'%')->count();$ViISSD= DB::Table('alums')->where('LGAC','Ing.Software y simulacion social')->where('estatus', 'Vigente')->where('grado','LIKE','%'.'D'.'%')->count();$TeISSD= DB::Table('alums')->where('LGAC','Ing.Software y simulacion social')->where('estatus', 'Tesista')->where('grado','LIKE','%'.'D'.'%')->count();

         $egCUD= DB::Table('alums')->where('LGAC','Computo movil y oblicuo')->where('grado','LIKE','%'.'D'.'%')->count();$baCUD= DB::Table('alums')->where('LGAC','Computo movil y oblicuo')->where('estatus', 'Baja')->where('grado','LIKE','%'.'D'.'%')->count();$tiExCUD= DB::Table('alums')->where('LGAC','Computo movil y oblicuo')->where('estatus', 'Extemporaneo')->where('grado','LIKE','%'.'D'.'%')->count();$tiPCCUD= DB::Table('alums')->where('LGAC','Computo movil y oblicuo')->where('corte', 1)->where('grado','LIKE','%'.'D'.'%')->count();
        $tiSCCUD= DB::Table('alums')->where('LGAC','Computo movil y oblicuo')->where('corte', 2)->where('grado','LIKE','%'.'D'.'%')->count();$tiTCCUD= DB::Table('alums')->where('LGAC','Computo movil y oblicuo')->where('corte', 3)->where('grado','LIKE','%'.'D'.'%')->count();$ViCUD= DB::Table('alums')->where('LGAC','Computo movil y oblicuo')->where('estatus', 'Vigente')->where('grado','LIKE','%'.'D'.'%')->count();$TeCUD= DB::Table('alums')->where('LGAC','Computo movil y oblicuo')->where('estatus', 'Tesista')->where('grado','LIKE','%'.'D'.'%')->count();

         $egSEED= DB::Table('alums')->where('LGAC','Sistemas electricos y electronicos')->where('grado','LIKE','%'.'D'.'%')->count();$baSEED= DB::Table('alums')->where('LGAC','Sistemas electricos y electronicos')->where('estatus', 'Baja')->where('grado','LIKE','%'.'D'.'%')->count();$tiExSEED= DB::Table('alums')->where('LGAC','Sistemas electricos y electronicos')->where('estatus', 'Extemporaneo')->where('grado','LIKE','%'.'D'.'%')->count();$tiPCSEED= DB::Table('alums')->where('LGAC','Sistemas electricos y electronicos')->where('corte', 1)->where('grado','LIKE','%'.'D'.'%')->count();
        $tiSCSEED= DB::Table('alums')->where('LGAC','Sistemas electricos y electronicos')->where('corte', 2)->where('grado','LIKE','%'.'D'.'%')->count();$tiTCSEED= DB::Table('alums')->where('LGAC','Sistemas electricos y electronicos')->where('corte', 3)->where('grado','LIKE','%'.'D'.'%')->count();$ViSEED= DB::Table('alums')->where('LGAC','Sistemas electricos y electronicos')->where('estatus', 'Vigente')->where('grado','LIKE','%'.'D'.'%')->count();$TeSEED= DB::Table('alums')->where('LGAC','Sistemas electricos y electronicos')->where('estatus', 'Tesista')->where('grado','LIKE','%'.'D'.'%')->count();

        $egMPAD= DB::Table('alums')->where('LGAC', 'Manufactura produccion y calidad')->where('grado','LIKE','%'.'D'.'%')->count();$baMPAD= DB::Table('alums')->where('LGAC', 'Manufactura produccion y calidad')->where('estatus', 'Baja')->where('grado','LIKE','%'.'D'.'%')->count();$tiExMPAD= DB::Table('alums')->where('LGAC', 'Manufactura produccion y calidad')->where('estatus', 'Extemporaneo')->where('grado','LIKE','%'.'D'.'%')->count();$tiPCMPAD= DB::Table('alums')->where('LGAC', 'Manufactura produccion y calidad')->where('corte', 1)->where('grado','LIKE','%'.'D'.'%')->count();  $tiSCMPAD= DB::Table('alums')->where('LGAC', 'Manufactura produccion y calidad')->where('corte', 2)->where('grado','LIKE','%'.'D'.'%')->count();$tiTCMPAD= DB::Table('alums')->where('LGAC', 'Manufactura produccion y calidad')->where('corte', 3)->where('grado','LIKE','%'.'D'.'%')->count();$ViMPAD= DB::Table('alums')->where('LGAC', 'Manufactura produccion y calidad')->where('estatus', 'Vigente')->where('grado','LIKE','%'.'D'.'%')->count();$TeMPAD= DB::Table('alums')->where('LGAC', 'Manufactura produccion y calidad')->where('estatus', 'Tesista')->where('grado','LIKE','%'.'D'.'%')->count();


         $arreglo=["egQu"=>$egQu,"baQu"=>$baQu,"tiExQu"=>$tiExQu,"tiPCQu"=>$tiPCQu,"tiSCQu"=>$tiSCQu,"tiTCQu"=>$tiTCQu,"ViQu"=>$ViQu,"TeQu"=>$TeQu,"egMA"=>$egMA,"baMA"=>$baMA,"tiExMA"=>$tiExMA,"tiPCMA"=>$tiPCMA,"tiSCMA"=>$tiSCMA,"tiTCMA"=>$tiTCMA,"ViMA"=>$ViMA,"TeMA"=>$TeMA,    "egIn"=>$egIn,"baIn"=>$baIn,"tiExIn"=>$tiExIn,"tiPCIn"=>$tiPCIn,"tiSCIn"=>$tiSCIn,"tiTCIn"=>$tiTCIn,"ViIn"=>$ViIn,"TeIn"=>$TeIn,    "egEl"=>$egEl,"baEl"=>$baEl,"tiExEl"=>$tiExEl,"tiPCEl"=>$tiPCEl,"tiSCEl"=>$tiSCEl,"tiTCEl"=>$tiTCEl,"ViEl"=>$ViEl,"TeEl"=>$TeEl,   "egCOM"=>$egCOM,"baCOM"=>$baCOM,"tiExCOM"=>$tiExCOM,"tiPCCOM"=>$tiPCCOM,"tiSCCOM"=>$tiSCCOM,"tiTCCOM"=>$tiTCCOM,"ViCOM"=>$ViCOM,"TeCOM"=>$TeCOM,  "egBi"=>$egBi,"baBi"=>$baBi,"tiExBi"=>$tiExBi,"tiPCBi"=>$tiPCBi,"tiSCBi"=>$tiSCBi,"tiTCBi"=>$tiTCBi,"ViBi"=>$ViBi,"TeBi"=>$TeBi,  "egCor"=>$egCor,"baCor"=>$baCor,"tiExCor"=>$tiExCor,"tiPCCor"=>$tiPCCor,"tiSCCor"=>$tiSCCor,"tiTCCor"=>$tiTCCor,"ViCor"=>$ViCor,"TeCor"=>$TeCor,  "egCA"=>$egCA,"baCA"=>$baCA,"tiExCA"=>$tiExCA,"tiPCCA"=>$tiPCCA,"tiSCCA"=>$tiSCCA,"tiTCCA"=>$tiTCCA,"ViCA"=>$ViCA,"TeCA"=>$TeCA, "egISS"=>$egISS,"baISS"=>$baISS,"tiExISS"=>$tiExISS,"tiPCISS"=>$tiPCISS,"tiSCISS"=>$tiSCISS,"tiTCISS"=>$tiTCISS,"ViISS"=>$ViISS,"TeISS"=>$TeISS,  "egCU"=>$egCU,"baCU"=>$baCU,"tiExCU"=>$tiExCU,"tiPCCU"=>$tiPCCU,"tiSCCU"=>$tiSCCU,"tiTCCU"=>$tiTCCU,"ViCU"=>$ViCU,"TeCU"=>$TeCU,   "egSEE"=>$egSEE,"baSEE"=>$baSEE,"tiExSEE"=>$tiExSEE,"tiPCSEE"=>$tiPCSEE,"tiSCSEE"=>$tiSCSEE,"tiTCSEE"=>$tiTCSEE,"ViSEE"=>$ViSEE,"TeSEE"=>$TeSEE,  "egMPA"=>$egMPA,"baMPA"=>$baMPA,"tiExMPA"=>$tiExMPA,"tiPCMPA"=>$tiPCMPA,"tiSCMPA"=>$tiSCMPA,"tiTCMPA"=>$tiTCMPA,"ViMPA"=>$ViMPA,"TeMPA"=>$TeMPA];


         $arregloD=["egQuD"=>$egQuD,"baQuD"=>$baQuD,"tiExQuD"=>$tiExQuD,"tiPCQuD"=>$tiPCQuD,"tiSCQuD"=>$tiSCQuD,"tiTCQuD"=>$tiTCQuD,"ViQuD"=>$ViQuD,"TeQuD"=>$TeQuD,"egMAD"=>$egMAD,"baMAD"=>$baMAD,"tiExMAD"=>$tiExMAD,"tiPCMAD"=>$tiPCMAD,"tiSCMAD"=>$tiSCMAD,"tiTCMAD"=>$tiTCMAD,"ViMAD"=>$ViMAD,"TeMAD"=>$TeMAD,    "egInD"=>$egInD,"baInD"=>$baInD,"tiExInD"=>$tiExInD,"tiPCInD"=>$tiPCInD,"tiSCInD"=>$tiSCInD,"tiTCInD"=>$tiTCInD,"ViInD"=>$ViInD,"TeInD"=>$TeInD,    "egElD"=>$egElD,"baElD"=>$baElD,"tiExElD"=>$tiExElD,"tiPCElD"=>$tiPCElD,"tiSCElD"=>$tiSCElD,"tiTCElD"=>$tiTCElD,"ViElD"=>$ViElD,"TeElD"=>$TeElD,   "egCOMD"=>$egCOMD,"baCOMD"=>$baCOMD,"tiExCOMD"=>$tiExCOMD,"tiPCCOMD"=>$tiPCCOMD,"tiSCCOMD"=>$tiSCCOMD,"tiTCCOMD"=>$tiTCCOMD,"ViCOMD"=>$ViCOMD,"TeCOMD"=>$TeCOMD,  "egBiD"=>$egBiD,"baBiD"=>$baBiD,"tiExBiD"=>$tiExBiD,"tiPCBiD"=>$tiPCBiD,"tiSCBiD"=>$tiSCBiD,"tiTCBiD"=>$tiTCBiD,"ViBiD"=>$ViBiD,"TeBiD"=>$TeBiD,  "egCorD"=>$egCorD,"baCorD"=>$baCorD,"tiExCorD"=>$tiExCorD,"tiPCCorD"=>$tiPCCorD,"tiSCCorD"=>$tiSCCorD,"tiTCCorD"=>$tiTCCorD,"ViCorD"=>$ViCorD,"TeCorD"=>$TeCorD,  "egCAD"=>$egCAD,"baCAD"=>$baCAD,"tiExCAD"=>$tiExCAD,"tiPCCAD"=>$tiPCCAD,"tiSCCAD"=>$tiSCCAD,"tiTCCAD"=>$tiTCCAD,"ViCAD"=>$ViCAD,"TeCAD"=>$TeCAD, "egISSD"=>$egISSD,"baISSD"=>$baISSD,"tiExISSD"=>$tiExISSD,"tiPCISSD"=>$tiPCISSD,"tiSCISSD"=>$tiSCISSD,"tiTCISSD"=>$tiTCISSD,"ViISSD"=>$ViISSD,"TeISSD"=>$TeISSD,  "egCUD"=>$egCUD,"baCUD"=>$baCUD,"tiExCUD"=>$tiExCUD,"tiPCCUD"=>$tiPCCUD,"tiSCCUD"=>$tiSCCUD,"tiTCCUD"=>$tiTCCUD,"ViCUD"=>$ViCUD,"TeCUD"=>$TeCUD,   "egSEED"=>$egSEED,"baSEED"=>$baSEED,"tiExSEED"=>$tiExSEED,"tiPCSEED"=>$tiPCSEED,"tiSCSEED"=>$tiSCSEED,"tiTCSEED"=>$tiTCSEED,"ViSEED"=>$ViSEED,"TeSEED"=>$TeSEED,  "egMPAD"=>$egMPAD,"baMPAD"=>$baMPAD,"tiExMPAD"=>$tiExMPAD,"tiPCMPAD"=>$tiPCMPAD,"tiSCMPAD"=>$tiSCMPAD,"tiTCMPAD"=>$tiTCMPAD,"ViMPAD"=>$ViMPAD,"TeMPAD"=>$TeMPAD];



        $tabla= DB::table('alums')->select('correo')->where('estatus','Vigente')->get();
           

        

       if($num==0){
        return $hola= view("usuarios.alumno.indiGlobal",$arreglo);
       }     
        elseif($num==1){
             $pdf = PDF::loadView("usuarios.alumno.Reportes.indiGlobalpdf",$arreglo);
            //  return $pdf->download('listado.pdf')->setPaper('a4')->setOrientation('landscape');
              $pdf->setPaper('A4', 'landscape');
            return $pdf->stream('test_pdf.pdf');
          }
        elseif($num==2){
            return $hola= view("usuarios.alumno.indiGlobalDoc",$arregloD);
          }
         elseif($num==3){
             $pdf = PDF::loadView("usuarios.alumno.Reportes.reporteDoc",$arregloD);
            //  return $pdf->download('listado.pdf')->setPaper('a4')->setOrientation('landscape');
              $pdf->setPaper('A4', 'landscape');
            return $pdf->stream('test_pdf.pdf');
          }
        elseif($num==4){
            $pdf = PDF::loadView("usuarios.alumno.Reportes.reporteCorreos",["tabla"=>$tabla]);
             return $pdf->download('listado.pdf');
        }
        elseif($num==5){
            $pdf = PDF::loadView("usuarios.alumno.Reportes.reporteAlumno",$arregloD);
            //  return $pdf->download('listado.pdf')->setPaper('a4')->setOrientation('landscape');
              $pdf->setPaper('A4', 'landscape');
            return $pdf->stream('test_pdf.pdf');
        }
        
    }
}