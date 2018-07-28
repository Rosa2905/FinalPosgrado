<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Alum;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\AlumnoRequest;

class AdminController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $Alumno = Alum::all();
        // return $Alumno;
         return view('usuarios.alumno.admelec',["Alumno"=>$Alumno]);
        // return view('usuarios.alumno.admelec');
    }
}
