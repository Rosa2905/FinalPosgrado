@extends('layouts.alumno')
@section('content')
  <link href="{{ asset('sweetalert/sweetalert.css') }}" rel="stylesheet">
    <script src="{{ asset('sweetalert/sweetalert.min.js') }}"></script>

<div class="topnav" >
  <a class="active" href="{{URL::action('AdminController@index')}}"><span class="  glyphicon glyphicon-circle-arrow-left "></span> Regresar</a>
  {{-- <h3><center>Agregar Alumno</center></h3> --}}
{{--   <a href="#" ><img class="rightedit"   width="20%" src="{{ asset('imagen/esta.png') }}"></a>
 --}}
 </div>

  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      
      @if(count($errors)>0)
      <div class="alert alert-danger">
        <ul>
       @foreach($errors->all() as $error)   
          <li>{{$error}}</li>
       @endforeach
        </ul>
      </div>
      @endif

     {!!Form::model($Alumno,['method'=>'PATCH','route'=>['upeditPos',$Alumno->id]])!!}

      {{Form::token()}}
    <dir><dir></br></br></br>
    <div >
      
       <select id="campoconocimiento" REQUIRED name="campoconocimiento" class="primero">
        <option value='no' selected >- Campo Conocimiento -</b></option>
        <option value='quimica'>Quimica</option>
        <option value='medio'>Medio Ambiente</option>
        <option value='Industrial'>Industrial</option>
        <option value='Electrica'>Electrica</option>
        <option value='Computacion'>Computacion</option>
      </select></br></br></br>
  
      <select  REQUIRED name="grado" class="primero" >
        <option value='no' selected  >-Grado-</b></option>
        <option value='MI'>MI</option>
        <option value='MC'>MC</option>
        <option value='DI'>DI</option>
        <option value='DC'>DC</option>
      </select></br></br>
      <br>
       <select name ="cono" REQUIRED name="campoconocimiento" class="primero" onchange="return campos();">
        <option value='no' selected >- Campo Conocimiento -</b></option>
        <option value='Quimica'>Quimica</option>
        <option value='Medio Ambiente'>Medio Ambiente</option>
        <option value='Industrial'>Industrial</option>
        <option value='Electrica'>Electrica</option>
        <option value='Computacion'>Computacion</option>
      </select></br></br></br>
      <label > .Director</b></br><input  type="text" name="dirtesis"  value="{{$Alumno->director}}"></label>
      <br><label > .Codirector</b></br><input type="text"  name="cotesis" value="{{$Alumno->codirector}}"></label>

     {{--  <input type="text" REQUIRED name="SAGCC"  placeholder="{{$Alumno->SAGCC}}"> --}}

      <div>
        <button class="btn btn-success" type="submit">Guardar</button>
        <button class="btn btn-danger" type="reset">Cancelar</button>
      </div> 
  </div>

  <div >
     <select   REQUIRED name="LGAC"  id="lgac" class="segundo" onchange="return lgac();">
      <option value='no' selected >- LGAC Asociada -</b></option>
      <option value='bioquimica'>Bioquimica</option>
      <option value='corrymate'>Corrosion y Materiales</option>
      <option value='conam'>Contaminacion Ambiental</option>
      <option value='softysimua'>Ing.Software y simulacion social </option>
      <option value='commovil'>Computo movil y oblicuo</option>
      <option value='elecyelec'>Sistemas electricos y electronicos</option>
      <option value='manu'>Manufactura produccion y calidad</option>
    </select>
    <div class="segundo">
      <br><br><b><label > .Fecha ingreso </b></br><input name="cmbEleccion"  id="cmbEleccion" type="date" onchange="return bus();"></label>
      <br><label > .Fecha egreso </label></b></br>
      <label id="fechaideal" REQUIRED name='fechaideal' class="ideal">.            ------------------</label></b>
      </br></br><label > .Fecha Titulacion </b></br><input type="date" name="feegre" ></label></br>
      <br><select   REQUIRED name="estatus"  id="lgac">
        <option value='Vigente' selected >- Vigente -</b></option>
        <option value='Bajo'>Baja</option>
        <option value='Tesista'>Tesista</option>
        <option value='Egresado'>Egresado</option>
        <option value='Extemporaneo'>Extemporaneo</option>
    </select>
    

  </div>
<div class="tercero">
  <label>Fechas Anteriores </label><br><br>
  <label ><font color="green">{{$Alumno->fecha_ingreso}}</font></label><br><br><br><br>
  <label><font color="red">{{$Alumno->fecha_ideal}}</font></label><br><br><br><br>
  <label><font color="green">{{$Alumno->fecha_egreso}}</font></label>
</div>
  </div>

{!!Form::close()!!}
 {{--  <a href="#" ><img class="imagen"   width=80%" src="{{ asset('imagen/esta.png') }}"></a>
  <input  type="file" name="imagen"  class="subir"> --}}
{{--  Image::make(input::file('photo')->resize(300,200)->save(foo.jpg)) --}}
  </div>
  </div>
@endsection

<style >
    .primero
{
  width: 30%;
  font-family: "ABeeZee", ABeeZee-italic;
  text-shadow: 3px 1.2px 2px white;
  background:#c5e1a5;
  color: #000000;
  font-size: 1.3em;
  border-color:black;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  border: 2.2px solid #81c784;
  font-weight:bold;
  height: 30px
}
.segundo{
  position: relative;
  left: 290px;
  top:-425px;
}
.tercero{
  position: relative;
  left: 540px;
  top:-735px;
}
#lgac{
   font-family: "ABeeZee", ABeeZee-italic;
  text-shadow: 3px 1.2px 2px white;
  background:#c5e1a5;
  color: #000000;
  font-size: 1.4em;
  border-color:black;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  border: 2.2px solid #81c784;
  font-weight:bold;
  height: 30px
}

#lgac{
   font-family: "ABeeZee", ABeeZee-italic;
  text-shadow: 3px 1.2px 2px white;
  background:#c5e1a5;
  color: #000000;
  font-size: 1.4em;
  border-color:black;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  border: 2.2px solid #81c784;
  font-weight:bold;
  height: 30px
}
  </style>  


<script type="text/javascript">
function sumarDias(fecha, dias){
  fecha.setDate(fecha.getDate() + dias);
   day=fecha.getDate();
   // el mes es devuelto entre 0 y 11
   month=fecha.getMonth()+1;
   year=fecha.getFullYear();
   miVariable=year+"-"+month+"-"+day;
   // swal("\n-- FECHA DE EGRESO IDEAL -- \n\n"+year+"/"+month+"/"+day);
   // document.getElementById("fechaideal").innerHTML = miVariable;

    swal("-- Fecha de egreso ideal --", day+" /"+month+" /"+year, "info");
   document.getElementById("fechaideal").innerHTML = miVariable;
}
  function bus(){
  var original=document.getElementById("cmbEleccion").value;
  var mV=new Date(document.getElementById("cmbEleccion").value);    //.................Fecha ingreso
  console.log(sumarDias(mV, + 3));
  document.cookie ='variable='+original+'; expires=Thu, 2 Aug 2030 20:47:11 UTC; path=/';
}
</script>
