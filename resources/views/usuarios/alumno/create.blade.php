@extends('layouts.alumno')
@section('content')

<div class="topnav" >
  <a class="active" href="{{URL::action('AlumnoController@index')}}"><span class="  glyphicon glyphicon-circle-arrow-left "></span> Regresar</a>
{{--   <a href="#" ><img class="rightedit"   width="20%" src="{{ asset('imagen/esta.png') }}"></a>
 --}}
 </div>

	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Alumno</h3>
			@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
			 @foreach($errors->all() as $error)		
					<li>{{$error}}</li>
			 @endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(['route'=>['create'],'method'=>'POST','autocomplete'=>'off'])!!}
			{{Form::token()}}

{{--  @extends('layouts.alumno')
@section('content') --}}

	{{-- <form accept-charset="utf-8" class="form" method="POST" action="php/Alum.php"  enctype="multipart/form-data" > --}}
		<dir><dir></br></br>
		<form action="../../form-result.php"  method="POST" >
			<select id="Academica" name ="Academica" class="eleccion" onchange="return academia();">
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
			 <select id="campoconocimiento" name="campoconocimiento" class="eleccion" onchange="return campos();">
				<option value='no' selected >- Campo Conoci. -</b></option>
				<option value='quimica'>Quimica</option>
				<option value='medio'>Medio Ambiente</option>
				<option value='Industrial'>Industrial</option>
				<option value='Electrica'>Electrica</option>
				<option value='Computacion'>Computacion</option>
			</select></br></br></br>
	
			<select id="grado"  name="grado" class="eleccion" onchange="return grad();">
				<option value='no' selected  >- Grado -</b></option>
				<option value='MI'>MI</option>
				<option value='MC'>MC</option>
				<option value='DI'>DI</option>
				<option value='DC'>DC</option>
			</select>
		</form>
	<form action="../../form-result.php" class="eleccion2"  method="POST">
		<select  id="LGAC" name="LGAC" class="eleccion" onchange="return lgac();">
			<option value='no' selected >- LGAC Asociada -</b></option>
			<option value='bioquimica'>Bioquimica</option>
			<option value='corrymate'>Corrocion y Materiales</option>
			<option value='conam'>Contaminacion Ambiental</option>
			<option value='softysimua'>Ing.Software y simulacion social </option>
			<option value='commovil'>Computo movil y oblicuo</option>
			<option value='elecyelec'>Sistemas electricos y electronicos</option>
			<option value='manu'>Manufactura produccion y calidad</option>
		</select>
		</br></br></br><b><label> .Fecha ingreso </b></br><input name="cmbEleccion" id="cmbEleccion" type="date" onchange="return bus();"></label>
	</form>
		
		</br></br><input  type="text" REQUIRED name="dirtesis" class="dir" placeholder="Dir. Tesis" >
		<input type="text" REQUIRED name="cotesis" class="cor" placeholder="Co.Tesis">
{{-- 		<input  type="file" name="imagen"  class="subir">
 --}}		</br></br><b><label class="lafein" > .Fecha egreso </b></br><input type="date" name="feegre" class="fein" ></label></br></br>
		<b><label class="laideal"> .Fecha ideal egreso </label></b></br>
		<b><label id="fechaideal" REQUIRED name='fechaideal' class='ideal' >     ------------------</label></b>
		 <a href="#" ><img class="imagen"   width=80%" src="{{ asset('imagen/esta.png') }}"></a>
		{{-- <input type="submit" value="AGREGAR" class="boton">	 --}}
	</form>
		
		 	{{-- <div class="form-group">
				<label for="corte">Corte</label>
				<input type="text" name="Corte" class="form-control" placeholder="">
			</div>  --}}

		
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
			{!!Form::close()!!}



		</div>
	</div>
	 	@endsection   

<style>




.eleccion
{
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
}

.eleccion1{
	text-shadow: 3px 1.2px 2px white;
	top: -550px;
	position: relative;
	left: 290px;
	color: #000000;
	font-size: 1.0em;
	
}

.eleccion2{
	
	top: -650px;
	position: relative;
	left: 550px;
	color: #000000;
	font-size: 1.0em;
}

.Grado{

	font-family: "ABeeZee", ABeeZee-italic;
	background:#c5e1a5;
	color: #000000;
	font-size: 1.3em;
	border-color:black;
}
.imagen{
	position: relative;
	top: -1200px;
	left: 800px;
	border-image-slice: 20;
}
.boton{
	position: relative;
	top: -1130px;
	left: 600px;
	font-size:18px;
    font-family: "ABeeZee", ABeeZee-italic;
	text-shadow: 2.5px 1.2px 2px white;
	font-weight:bold;
	background:#aed581;
    width:143px;
    height:32px;
    cursor: pointer;
    border: 3px solid #81c784;
    border-radius: 8px 8px 8px 8px;
}

.subir
{
	position: relative;
	top: -480px;
	left: 40px;
	background:#c5e1a5;
	font-size:16px;
    font-family: "ABeeZee", ABeeZee-italic;
	font-weight:bold;
	border: 1.5px solid #81c784;
}

/*.ladir
{
	position: relative;
	top: -620px;
	left: 250px;
}*/
.dir
{
	position: relative;
	top: -760px;
	left: 290px;
	display: inline-block;
    border-radius: 4px;
}

/*.lacor
{
	position: relative;
	top: -578px;
	left: 250px;
}*/
.cor
{
	position: relative;
	top: -700px;
	left: 165px;
	display: inline-block;
    border-radius: 4px;
}


.lafein
{
	position: relative;
	top: -680px;
	left: 555px;
}
.fein
{
	position: relative;
	top: -670px;
	left: 550px;
	display: inline-block;
    border-radius: 4px;
}


.laideal
{
	position: relative;
	top: -890px;
	left: 555px;
}
.ideal
{
	position: relative;	
	font-size:16px;
	color: red;
	top: -880px;
	left: 580px;
	display: inline-block;
    border-radius: 4px;
}


</style>

