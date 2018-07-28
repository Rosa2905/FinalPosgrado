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
			<select id="Academica" REQUIRED name ="Academica" class="eleccion" onchange="return academia();">
				<option value='no' selected class="eleccion">- Unidad Academica-</b></option>
				<option value='FCQI'>FCQI</option>
				<option value='Tecate'>Tecate</option>
				<option value='Valle Palmas'>Valle Palmas</option>
			</select>

			  <br><br><input type="number" REQUIRED name="Matricula" placeholder="Matricula">
			  <br><input type="text" REQUIRED name="Nombre" placeholder="Nombre..">
			  <br><input type="text" REQUIRED name="ApellidoP" placeholder="A.Paterno" >
			  <br><input type="text" REQUIRED name="ApellidoM" placeholder="A. Materno">
			  <br><input type="text" REQUIRED name="CVU" placeholder="CVU.." >
			  <br><input type="number"  REQUIRED name="Telefono" placeholder="Telefono..">
			  <br><input type="email" REQUIRED name="Correo" placeholder="Email..">  
		</form>


		<form action="../../form-result.php" class="eleccion1"  method="POST">
			 <p></p> 
			 <select id="campoconocimiento" REQUIRED name="campoconocimiento" class="eleccion" onchange="return campos();">
				<option value='no' selected >- Campo Conocimiento -</b></option>
				<option value='quimica'>Quimica</option>
				<option value='medio'>Medio Ambiente</option>
				<option value='Industrial'>Industrial</option>
				<option value='Electrica'>Electrica</option>
				<option value='Computacion'>Computacion</option>
			</select></br></br></br>
	
			<select id="grado"  REQUIRED name="grado" class="eleccion" onchange="return grad();">
				<option value='no' selected  >-Grado-</b></option>
				<option value='MI'>MI</option>
				<option value='MC'>MC</option>
				<option value='DI'>DI</option>
				<option value='DC'>DC</option>
			</select>
		</form>
	<form action="../../form-result.php" class="eleccion2"  method="POST">
		<select  id="LGAC" REQUIRED name="LGAC" class="eleccion" onchange="return lgac();">
			<option value='no' selected >- LGAC Asociada -</b></option>
			<option value='bioquimica'>Bioquimica</option>
			<option value='corrymate'>Corrocion y Materiales</option>
			<option value='conam'>Contaminacion Ambiental</option>
			<option value='softysimua'>Ing.Software y simulacion social </option>
			<option value='commovil'>Computo movil y oblicuo</option>
			<option value='elecyelec'>Sistemas electricos y electronicos</option>
			<option value='manu'>Manufactura produccion y calidad</option>
		</select>
	</form>

	<form class="dir">	
		<input  type="text" REQUIRED name="dirtesis"  placeholder="Dir. Tesis" >
		<br><input type="text" REQUIRED name="cotesis" placeholder="Co.Tesis">
		<br><input type="text" REQUIRED name="SAGCC"  placeholder="SAGCC">
	</form>

	<form class="lafein">
		</br></br></br><b><label> .Fecha ingreso </b></br><input name="cmbEleccion" id="cmbEleccion" type="date" onchange="return bus();"></label>
		<br><label > .Fecha ideal egreso </label></b></br>
		<b><label id="fechaideal" REQUIRED name='fechaideal' class="ideal">.            ------------------</label></b>
		</br></br><b><label > .Fecha egreso </b></br><input type="date" name="feegre" ></label></br></br>
	</form>

	<a href="#" ><img class="imagen"   width=80%" src="{{ asset('imagen/esta.png') }}"></a>
	<input  type="file" name="imagen"  class="subir">
{{-- 	Image::make(input::file('photo')->resize(300,200)->save(foo.jpg)) --}}

	<div class="form-group">
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
   miVariable=day+"-"+month+"-"+year;
   //swal("-- Fecha de egreso ideal --", day+" / "+month+" / "+year);
   swal("-- Fecha de egreso ideal --", day+" /"+month+" /"+year, "info");
   document.getElementById("fechaideal").innerHTML = miVariable;
}
	function bus(){
	var original=document.getElementById("cmbEleccion").value;
	var mV=new Date(document.getElementById("cmbEleccion").value);		//.................Fecha ingreso
	console.log(sumarDias(mV, + 3));
	document.cookie ='variable='+original+'; expires=Thu, 2 Aug 2030 20:47:11 UTC; path=/';
}
</script>

