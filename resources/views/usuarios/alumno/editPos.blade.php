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
      <select   REQUIRED  id="lgac" name="LGAC" class="primero" onchange="return lgacP();">
      <option value='no' selected >- LGAC Asociada -</b></option>
      <option value='Bioquimica'>Bioquimica</option>
      <option value='Corrosion y Materiales'>Corrosion y Materiales</option>
      <option value='Contaminacion Ambiental'>Contaminacion Ambiental</option>
      <option value='Ing.Software y simulacion social'>Ing.Software y simulacion social </option>
      <option value='Computo movil y oblicuo'>Computo movil y oblicuo</option>
      <option value='Sistemas electricos y electronicos'>Sistemas electricos y electronicos</option>
      <option value='Manufactura produccion y calidad'>Manufactura produccion y calidad</option>
    </select>&emsp;&emsp;&emsp;
    {{-- <label for ="lgacD" id='lgacD' name="lgacD"><font color="green">{{$Alumno->LGAC}}</font></label><br><br><br> --}}
      <font color="green" font size="2"><b><textarea  id="lgaci" name="lgaci" rows="1" cols="30" readonly="">{{$Alumno->LGAC}}</textarea></font></b></br></br></br>

    

       
      <select  REQUIRED name="grado" id="grado" class="primero" onchange="return gradoP();"> 
        <option value='no' selected  >-Grado-</b></option>
        <option value='MI'>MI</option>
        <option value='MC'>MC</option>
        <option value='DI'>DI</option>
        <option value='DC'>DC</option>
      </select>&emsp;&emsp;&emsp;
      {<font color="green" font size="3"><b><textarea  id="gradoi" name="gradoi" rows="1" readonly="">{{$Alumno->grado}}</textarea></font></b></br></br></br>

      <br>
       <select  REQUIRED id="SAGCC" name="campoconocimiento" class="primero" onchange="return sagccD();">
        <option value='no' selected >- Campo Conocimiento -</b></option>
        <option value='Quimica'>Quimica</option>
        <option value='Medio Ambiente'>Medio Ambiente</option>
        <option value='Industrial'>Industrial</option>
        <option value='Electrica'>Electrica</option>
        <option value='Computacion'>Computacion</option>
      </select>&emsp;&emsp;&emsp;
      <font color="green" font size="3"><b><textarea  id="sagcc" name="sagcc" rows="1" readonly="">{{$Alumno->SAGCC}}</textarea></font></b></br></br></br>

      <label > .Director</b></br><input  type="text" REQUIRED name="dirtesis"  value="{{$Alumno->director}}"></label>
      <br><label id="cotesis"> .Codirector</b></br><input type="text"  REQUIRED name="cotesis" value="{{$Alumno->codirector}}"></label>

     {{--  <input type="text" REQUIRED name="SAGCC"  placeholder="{{$Alumno->SAGCC}}"> --}}

      <div>
        <button class="btn btn-success" id=" aviso" type="submit" >Guardar</button>
        <button class="btn btn-danger" type="reset">Cancelar</button>
      </div> 
  </div>

  <div >
    
    <div class="segundo">
      <br><br><b><label > .Fecha ingreso </b></br><input name="cmbEleccion"  id="cmbEleccion" type="date" onchange="return bus();"></label>
      <br><label > .Fecha egreso </label></b></br>
      <label id="fechaideal" REQUIRED name='fechaideal' class="ideal">.            ------------------</label></b>
      </br></br><label > .Fecha ideal </b></br><input type="date" id="feegre" name="feegre"onchange="return bus1();" ></label></br>
     </br><label > .Fecha titulacion</b></br><input type="date" id="deti" name="feti"onchange="return bus2();" ></label></br>
      <br><select REQUIRED name="estatus" class="primero" id="estatus"  onchange="return estatusP();">
        <option value='Vigente' selected >- Vigente -</b></option>
        <option value='Baja'>Baja</option>
        <option value='Tesista'>Tesista</option>
        <option value='Egresado'>Egresado</option>
        <option value='Extemporaneo'>Extemporaneo</option>
    </select>
  </div>

<div class="tercero">
  <label>Fechas Anteriores </label><br><br>
  <font color="green" font size="3"><b><textarea  id="feinD" name="feinD" rows="1" readonly="">{{$Alumno->fecha_ingreso}}</textarea></font></b></br></br></br>
  <font color="green" font size="3"><b><textarea  id="feidD" name="feidD" rows="1" readonly="">{{$Alumno->fecha_ideal}}</textarea></font></b></br></br></br></br>
  <font color="green" font size="3"><b><textarea  id="feegD" name="feegD" rows="1" readonly="">{{$Alumno->fecha_egreso}}</textarea></font></b></br></br></br></br><br>
  <font color="green" font size="3"><b><textarea  id="feti" name="feti" rows="1">{{$Alumno->fecha_titulacion}}</textarea></font></b></br></br></br></br><br>
  <font color="red" font size="3"><b><textarea  id="estatusD" name="estatusD" rows="1" readonly="">{{$Alumno->estatus}}</textarea></font></b></br></br></br>
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
  width: 25%;
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
  left: 520px;
  top:-485px;
}
.tercero{
  position: relative;
  left: 720px;
  top:-915px;
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

textarea {
    max-width: 300px;
    border-bottom: 1px solid #81c784;
    box-shadow: 0 1px 0 0 #81c784;
    border: none;
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
   document.getElementById("feidD").innerHTML = miVariable;
}
  function bus(){
  var original=document.getElementById("cmbEleccion").value;
  var mV=new Date(document.getElementById("cmbEleccion").value);    //.................Fecha ingreso
  console.log(sumarDias(mV, + 3));
  document.cookie ='variable='+original+'; expires=Thu, 2 Aug 2030 20:47:11 UTC; path=/';
   document.getElementById("feinD").innerHTML = original;
}

function aviso(){
 alert("Alumno");
}


function bus1(){
 var original=document.getElementById("feegre").value;
  document.getElementById("feegD").innerHTML = original;
}

function lgacP(){
 var original=document.getElementById("lgac").value;
  document.getElementById("lgaci").innerHTML = original;
}

function gradoP(){
  var original=document.getElementById("grado").value;
  document.getElementById("gradoi").innerHTML = original;
}

function sagccD(){
  var original=document.getElementById("SAGCC").value;
  document.getElementById("sagcc").innerHTML = original;
}

function estatusP(){
  var original=document.getElementById("estatus").value;
  document.getElementById("estatusD").innerHTML = original;
}
</script>
