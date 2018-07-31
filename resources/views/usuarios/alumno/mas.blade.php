@extends('layouts.alumno')
@section('content')
<div class="topnav" >
  <a class="active" href="{{URL::action('AlumnoController@index')}}"><span class="  glyphicon glyphicon-circle-arrow-left "></span> Regresar</a>
  <img src="{{ asset('imagen/esta.png') }}" class="pull-right"  width="94" height="46"> 
</div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Alumno: {{ $Alumno->nombre}}</h3><br>
            @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
                </ul>
            </div>
            @endif
    <?php
    $num='1';
        $datetime1 = new DateTime();
        $datetime2 = new DateTime($Alumno->fecha_ingreso);
        $interval = $datetime2->diff($datetime1);
        $tiempo = $interval->format('%y años,%m mes');
        $hola=$interval->format('%y años,%m mes');
        if($hola <= '2'){
            $hola='primer';}
        elseif($hola >'2' and $hola <='2.5'){
            $hola='segundo';}
        else{
            $hola='tercero';} 
     //echo"<input type='text' name='titulo' class ='titulo'  value=".$interval->format('%R%a días').">"; 
    ?>
             
    <section id="alumn">
      <thead>
        <table class="table table-striped table-bordered">
          <tr>
            <th class="success">Foto</th>
            <th class="info">Codirector</th>
            <th class="info">Carrera</th>
            <th class="info">Grado</th>
            <th class="info">Tiempo</th>
            <th class="info">Corte</th>
            <th class="danger">Estatus</th>
            <th class="success">LGAC</th>
            <th class="success">SAGCC</th>
          </tr>
        </thead>
        <tr> 
            <td><img width="200px" src="{{ asset('/storage/'.$Alumno->imagenes) }}"  class="img-thumbnail"></td>
            <td>{{$Alumno->codirector}}</td>
            <td>{{$Alumno->carrera}}</td>
            <td>{{$Alumno->grado}}</td>
            <td>{{$tiempo}}</td>
            <td>{{$hola}}</td>
            <td>{{$Alumno->estatus}}</td>
            <td>{{$Alumno->LGAC}}</td>
            <td>{{$Alumno->SAGCC}}</td>    
        </tr>
      </table>     
    </section>
    <div class="modal-body"><center>
        <input type="button" onclick="location.href='{{URL::action('AlumnoController@reporte',[$Alumno->id,$num=1])}}'" class="btn 
        btn-success"  value="Crear Reporte"/>
    </div>
@endsection

<style>
h3{
font-size: 30px;
text-shadow: 1px 1px 2px #000000;
}
</style>