
<!doctype html>
<html>
	<body>
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

			{!!Form::open(['url'=>'usuarios/create','method'=>'POST','autocomplete'=>'off'])!!}
			{{Form::token()}}

{{--  @extends('layouts.alumno')
@section('content') --}}
			<div class="form-group">
				<label for="Matricula">Matricula</label>
				<input type="text" name="Matricula" class="form-control" placeholder="Matricula">
			</div>
			<br>
			<br>
			<div class="form-group">
				<label for="Nombre">Nombre</label>
				<input type="text" name="Nombre" class="form-control" placeholder="Nombre">
			</div>
			<br>
			<br>
			<div class="form-group">
				<label for="ApellidoP">Apellido Paterno</label>
				<input type="text" name="ApellidoP" class="form-control" placeholder="">
			</div>
			<br>
			<br>
			<div class="form-group">
				<label for="ApellidoM">Apellido Materno</label>
				<input type="text" name="ApellidoM" class="form-control" placeholder="">
			</div>
			<br>
			<br>
			<div class="form-group">
				<label for="CVU">CVU</label>
				<input type="text" name="CVU" class="form-control" placeholder="">
			</div>
			<br>
			<br>
			<div class="form-group">
				<label for="Correo">Correo</label>
				<input type="text" name="Correo" class="form-control" placeholder="">
			</div>
			<br>
			<br>
			<div class="form-group">
				<label for="Telefono">Telefono</label>
				<input type="text" name="Telefono" class="form-control" placeholder="">
			</div>

			<br>
			<br>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
{{-- @endsection --}}
			{!!Form::close()!!}

		</div>
	</div>
	</body>
</html>

