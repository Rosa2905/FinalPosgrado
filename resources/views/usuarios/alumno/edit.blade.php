@extends('layouts.alumno')
@section('content')

<div class="topnav" >
  <a class="active" href="{{URL::action('AlumnoController@index')}}"><span class="  glyphicon glyphicon-circle-arrow-left "></span> Regresar</a>
  <a href="#" ><img class="rightedit"   width="20%" src="{{ asset('imagen/esta.png') }}"></a>
</div>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3><b>Alumno:</b> {{ $Alumno->nombre}}</h3>
            @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
                </ul>
            </div>
            @endif
        {!!Form::model($Alumno,['method'=>'PATCH','route'=>['upedit',$Alumno->id]])!!}

            {{Form::token()}}
        
             <div class="form-group" id="foto">
                <img src="{{ asset('imagen/'.$Alumno->foto) }}" alt="{{ $Alumno->nombre}}" height="100px" width="100px" class="img-thumbnail">
            </div>

            <div class="form-group" id="nombre">
                <label for="Nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{$Alumno->nombre}}" placeholder="Nombre...">
            </div>

            <div class="form-group" id="apellidoP">
                <label for="apellidoP">Apellido P.</label>
                <input type="text" name="apellido_paterno" class="form-control" value="{{$Alumno->apellido_paterno}}" placeholder="Nombre...">
            </div>

               <div class="form-group" id="apellidoM">
                <label for="apellidoM">Apellido M.</label>
                <input type="text" name="apellido_materno" class="form-control" value="{{$Alumno->apellido_materno}}" placeholder="Nombre...">
            </div>

            <div class="form-group" id="matricula">
                <label for="matricula">Matricula</label>
                <input type="text" name="matricula" class="form-control" value="{{$Alumno->id}}" placeholder="Nombre...">
            </div>
            <div class="form-group" id="cvu">
                <label for="cvu">CVU</label>
                <input type="text" name="CVU" class="form-control" value="{{$Alumno->CVU}}" placeholder="Nombre...">
            </div>

            <div class="form-group" id="telefono">
                <label for="Telefono">Telefono</label>
                <input type="text" name="telefono" class="form-control" value="{{$Alumno->telefono}}" placeholder="Nombre...">
            </div>

            <div class="form-group" id="correo">
                <label for="Correo">Correo</label>
                <input type="text" name="correo" class="form-control" value="{{$Alumno->correo}}">
            </div>
            {{-- <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" name="descripcion" class="form-control" value="{{$categoria->descripcion}}" placeholder="Descripción...">
            </div> --}}
            <div class="form-group" id="botones">
                <button class="btn btn-success" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div> 
                     
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
    position: absolute;
    top: 100px;
    left: 100px;
}

#nombre{
    position: absolute;
    top: 80px;
    left: 300px;
   
}

#apellidoP{
    position: absolute;
    top: 170px;
    left: 300px;
}

#apellidoM{
    position: absolute;
    top: 260px;
    left: 300px;
}

#matricula{
    position: absolute;
    top: 80px;
    left: 490px;
}

#cvu{
    position: absolute;
    top: 170px;
    left: 490px;
}


#correo {
   position: absolute;
    top: 260px;
    left: 490px;
}

#correo {
   position: absolute;
    top: 260px;
    left: 490px;
}

#telefono{
    position: absolute;
    top: 80px;
    left: 670px;
}

#botones{
    position: absolute;
    top: 300px;
    left: 80px;
}
</style>


