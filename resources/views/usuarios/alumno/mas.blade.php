@extends('layouts.alumno')
@section('content')
<div class="topnav" >
  <a class="active" href="{{URL::action('AlumnoController@index')}}"><span class="  glyphicon glyphicon-circle-arrow-left "></span> Regresar</a>
  <img src="{{ asset('imagen/esta.png') }}" class="pull-right"  width="94" height="46"> 
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
            

    <section id="alumn">
      <thead>
        <table class="table table-striped table-bordered">
          <tr>
            <th class="success">Foto</th>
            <th class="info">Codirector</th>
            <th class="info">Carrera</th>
            <th class="info">Grado</th>
            <th class="info">Corte</th>
            <th class="danger">Estatus</th>
            <th class="success">LGAC</th>
            <th class="success">SAGCC</th>
          </tr>
        </thead>
        
  
        <tr> 
           <td><img src="{{ asset('storage/'.$Alumno->foto) }}" alt="{{ $Alumno->nombre }}" height="100px" width="100px" class="img-thumbnail"></td>

          
            <td>{{$Alumno->codirector}}</td>
            <td>{{$Alumno->carrera}}</td>
            <td>{{$Alumno->grado}}</td>
            <td>{{$Alumno->corte}}</td>
            <td>{{$Alumno->estatus}}</td>
            <td>{{$Alumno->LGAC}}</td>
            <td>{{$Alumno->SAGCC}}</td>    
        </tr>
      </table>     
    </section>
@endsection