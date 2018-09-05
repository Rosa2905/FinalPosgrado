@extends('layouts.alumno')
@section('content')
	<link href="{{ asset('sweetalert/sweetalert.css') }}" rel="stylesheet">
    <script src="{{ asset('sweetalert/sweetalert.min.js') }}"></script>
<div class="topnav" >
  <a class="active" href="{{URL::action('AlumnoController@index')}}"><span class="  glyphicon glyphicon-circle-arrow-left "></span> Regresar</a>
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

			{!!Form::open(['route'=>['create'],'method'=>'POST','autocomplete'=>'off','enctype'=>"multipart/form-data"])!!}
			{{Form::token()}}

{{--  @extends('layouts.alumno')
@section('content') --}}

	{{-- <form accept-charset="utf-8" class="form" method="POST" action="php/Alum.php"  enctype="multipart/form-data" > --}}
		<dir><dir></br></br>
		
	
<form action="../../form-result.php"  method="POST" >
			  <br><br><input type="number" REQUIRED name="Matricula" placeholder="Matricula">
			  <br><input type="text" REQUIRED name="Nombre" placeholder="Nombre..">
			  <br><input type="text" REQUIRED name="ApellidoP" placeholder="A.Paterno" >
			  <br><input type="text" REQUIRED name="ApellidoM" placeholder="A. Materno">
			  <br><input type="text" REQUIRED name="CVU" placeholder="CVU.." >
			  <br><input type="text" REQUIRED name="Beca" placeholder="#Beca.." >
			  <br><input type="number"  REQUIRED name="Telefono" placeholder="Telefono..">
			  <br><input type="email" REQUIRED name="Correo" placeholder="Email..">  
		</form>


		
			 <p></p> 
			 <select name ="cono" id="campoconocimiento" REQUIRED name="campoconocimiento" class="eleccion1" onchange="return campos();">
				<option value='Quimica' selected >- Campo Conocimiento -</b></option>
				<option value='Quimica'>Quimica</option>
				<option value='Medio Ambiente'>Medio Ambiente</option>
				<option value='Industrial'>Industrial</option>
				<option value='Electrica'>Electrica</option>
				<option value='Computacion'>Computacion</option>
			</select></br></br></br>

			<select   REQUIRED  name="pago" class="eleccion1" onchange="return lgac();">
				<option value='R.P' selected >Modalidad Pago</b></option>
				<option value='Beca Conacyt'>Beca Conacyt</option>
				<option value='R.P'>Recursos Propios</option>
			</select><br><br><br>
	
			<select  REQUIRED name="grado" class="eleccion1" onchange="return grad();">
				<option value='MI' selected  >-Grado-</b></option>
				<option value='MI'>MI</option>
				<option value='MC'>MC</option>
				<option value='DI'>DI</option>
				<option value='DC'>DC</option>
			</select><br><br><br>

			<select   REQUIRED name="reconocimiento" class="eleccion1" onchange="return lgac();">
				<option value='Candidato' selected >Conocimiento S.N.I</b></option>
				<option value='Candidato'>Candidato</option>
				<option value='Nivel1'> Nivel1</option>
			</select>


		<br><input  type="text" REQUIRED name="dirtesis"  placeholder="Dir. Tesis" class="dir"><br>
		<input type="text" REQUIRED name="cotesis" placeholder="Co.Tesis" class="dir"><br>
	
		<select   REQUIRED name="LGAC" class="eleccion2" onchange="return lgac();">
			<option value='no' selected >- LGAC Asociada -</b></option>
			<option value='Bioquimica'>Bioquimica</option>
			<option value='Corrocion y Materiales'>Corrosion y Materiales</option>
			<option value='Contaminacion Ambiental'>Contaminacion Amb.</option>
			<option value='Ing.Software y simulacion social'>Ing.Soft y simulacion social </option>
			<option value='Computo movil y oblicuo'>Computo movil y oblicuo</option>
			<option value='Sistemas electricos y electronicos'>Sistemas electri y electro</option>
			<option value='Manufactura produccion y calidad'>Manufac produccion y calidad</option>
		</select>
	
		</br></br></br><b><label class="lafein"> .Fecha ingreso </b></br><input REQUIRED name="cmbEleccion" id="cmbEleccion" type="date" class="lafein" onchange="return bus();"></label>
		<br><label class="lafein" name="lafein"> .Fecha de egreso </label></b></br>
		<font color="green" font size="3"><b><textarea  class="lafein" id="fechaideal" name="fechaideal" rows="1" readonly="">-------</textarea></font></b>
		</br></br><b><label class="lafein"> .Fecha limite titulacion </b></br><input type="date" REQUIRED name="feegre" class="lafein"></label></br></br>
	
	<a href="#" ><img class="imagen"   width=80%" src="{{ asset('imagen/esta.png') }}"></a>
	{{-- <input  type="file" name="imagen"  class="subir"> --}}
{{-- 	Image::make(input::file('photo')->resize(300,200)->save(foo.jpg)) --}}
	<div class="boton">
		<button id="guardar" class="btn btn-primary" type="submit">Guardar</button>
		<button class="btn btn-danger" type="reset" >Cancelar</button>
		{{-- <input type="submit" value="AGREGAR" class="boton">	 --}}
	</div>
			{!!Form::close()!!}
		</div>
	</div>
	 	@endsection 
{{-- <script >
	$("#guardar").click(function(){
                    swal("Are you sure you want to do this?", {
  buttons: ["Oh noez!", "Aww yiss!"],
}); 
              });
</script> --}}  
<script type="text/javascript">
function sumarDias(fecha, dias){
  fecha.setDate(fecha.getDate() + dias);
   day=fecha.getDate();
   // el mes es devuelto entre 0 y 11
   month=fecha.getMonth()+1;
   year=fecha.getFullYear();
   if(month<10)
   	miVariable=year+"-"+0+month+"-"+day;
   else
   	miVariable=year+"-"+month+"-"+day;
   //swal("-- Fecha de egreso ideal --", day+" / "+month+" / "+year);
   swal("-- Fecha de egreso ideal --", year+" /"+month+" /"+day, "info");
   document.getElementById("fechaideal").innerHTML = miVariable;
}
	function bus(){
	var original=document.getElementById("cmbEleccion").value;
	var mV=new Date(document.getElementById("cmbEleccion").value);		//.................Fecha ingreso
	console.log(sumarDias(mV, + 3));
	document.cookie ='variable='+original+'; expires=Thu, 2 Aug 2030 20:47:11 UTC; path=/';
}
</script>