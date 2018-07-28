@extends('layouts.alumno')
@section('content')
   <div class="topnav" >
  <a class="active" href="#home"><span class=" glyphicon glyphicon-home "></span> Inicio</a>
  <a href="#about">Consultar</a>
  <a href="#contact">Mas</a>
  <a href="#" ><img class="right"   width="20%" src="{{ asset('imagen/esta.png') }}"></a>


</div>
 {{--  <input type="text"  name="search" id="search" placeholder="Buscar.."> --}}
  <span id="se" class="glyphicon glyphicon-search"></span>

  <table id="Alumnotabla" class="table table-striped table-bordered">
     <thead>
          <tr>
             <th>Unidad</th>
            <th class="info">Nombre</th>
            <th class="info">Matricula</th>
            <th class="info">CVU</th>
            <th class="info">Tel</th>
            <th class="info">Correo</th>
            <th>Grado</th>
            <th>Dir.Tesis</th>
            <th >Ingreso</th>
            <th>Fijada</th>
           <th class="info">ACCION</th>           
          </tr>
        </thead>
    {{--   <tbody>{
           @foreach($Alumno as $fila)
        <tr> 
          <td>{{$fila->campus}}</td>
            <td>{{$fila->nombre}}</td>
            <td>{{$fila->matricula}}</td>
            <td>{{$fila->CVU}}</td>
            <td>{{$fila->telefono}}</td>
            <td>{{$fila->correo}}</td>
            <td>{{$fila->grado}}</td>
            <td>{{$fila->director}}</td>
            <td>{{$fila->fecha_ingreso}}</td>
            <td>{{$fila->fecha_egreso}}</td>--}}
         {{-- <tr>
            <td>    

               <a href="" data-target="#modal-edit-{{ $fila->id}}" data-toggle="modal" >
              <button class="btn btn-success"> 
              <span class=" glyphicon glyphicon-pencil"></span> Editar</button></a>

              <button type="button" class="btn btn-success" >
              <span class=" glyphicon glyphicon-trash" ></span> Borrar</button>

               <button type="button" onclick="location.href='{{URL::action('AlumnoController@show',$fila->id)}}'" class="btn btn-success"  value="Mas">
              <span class="glyphicon glyphicon-search" ></span> Mas.</button>

            </td> 
           
        </tr>
          
        @endforeach
       </tbody>  --}}
      </table> 
@endsection
