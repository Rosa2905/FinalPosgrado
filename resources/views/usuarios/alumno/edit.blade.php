@extends('layouts.alumno')
@section('content')

<div class="topnav" >
  <a class="active" href="{{URL::action('AlumnoController@index')}}"><span class="  glyphicon glyphicon-circle-arrow-left "></span> Regresar</a>
  <a href="#" ><img class="rightedit"   width="20%" src="{{ asset('imagen/esta.png') }}"></a>
</div>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3 class="text-danger">Alumno:  {{ $Alumno->nombre}}</h3>
            @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
                </ul>
            </div>
            @endif
        {!!Form::model($Alumno,['method'=>'PATCH','route'=>['upedit',$Alumno->id],'enctype'=>"multipart/form-data"])!!}
{{--         {!!Form::open(['route'=>['create'],'method'=>'POST','autocomplete'=>'off','enctype'=>"multipart/form-data"])!!}
 --}}
            {{Form::token()}}
        
             <div class="form-group" id="foto">
                <img width="200px" name="iman" src="{{ asset('/storage/'.$Alumno->imagenes) }}"  alt="{{ $Alumno->nombre}}" class="img-thumbnail">
                <input  type="file" name="imagen"  class="subir" id="subir">
                
            </div>

            <div class="form-group" id="nombre">
                <label for="Nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{$Alumno->nombre}}" placeholder="Nombre...">
                <label for="apellidoP">Apellido P.</label>
                <input type="text" name="apellido_paterno" class="form-control" value="{{$Alumno->apellido_paterno}}" placeholder="ApellidoP...">
                <label for="apellidoM">Apellido M.</label>
                <input type="text" name="apellido_materno" class="form-control" value="{{$Alumno->apellido_materno}}" placeholder="ApellidoM...">
            </div>


            
            <div class="form-group" id="matricula">
                <label for="matricula">Matricula</label>
                <input type="number" name="matricula" class="form-control" value="{{$Alumno->id}}" placeholder="Matricula...">
                 <label for="cvu">CVU</label>
                <input type="text" name="CVU" class="form-control" value="{{$Alumno->CVU}}" placeholder="CVU...">
            </div>
           
        
            <div class="form-group" id="correo">
                <label for="Correo">Correo</label>
                <input type="email" name="correo" class="form-control" value="{{$Alumno->correo}}">
                <label for="Telefono">Telefono</label>
                <input type="number" name="telefono" class="form-control" value="{{$Alumno->telefono}}" placeholder="Telefono">
                <div class="form-group" id="botones">
                <button class="btn btn-success" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div> 

            </div>


            {{-- <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" name="descripcion" class="form-control" value="{{$categoria->descripcion}}" placeholder="Descripción...">
            </div> --}}
            
                     
        </div>

            {!!Form::close()!!}     
    </div>
   
 @endsection


<style>
h3 {
    position: absolute;
    left: 40px;
    font-style: normal;
    
}
#foto{
    position: relative;
    top: 100px;
    left: 100px;
}
#nombre{
    width: 22%;
    position: relative;
    top: -85px;
    left: 400px;  
}
#matricula{
    width: 22%;
    position: relative;
    top: -350px;
    left: 600px;
}
#correo {
    width: 40%;
    position: relative;
    top: -525px;
    left: 800px;
}
#botones{
    position: relative;
    top: 50px;
    left: -200px;
}
#subir{
    width: 40%;
    position: relative;
    top: 70px;
    left: -50px;
}
h3{
font-size: 30px;
text-shadow: 1px 1px 2px #000000;
}
</style>
