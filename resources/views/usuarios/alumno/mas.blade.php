@extends('layouts.alumno')
@section('content')
<div class="topnav" >
  <a class="active" href="{{URL::action('AlumnoController@index')}}"><span class="  glyphicon glyphicon-circle-arrow-left "></span> Regresar</a>
  <img src="{{ asset('imagen/esta.png') }}" class="pull-right"  width="94" height="46"> 
</div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Alumno: {{ $Alumno->nombre}} {{ $Alumno->apellido_paterno }} {{ $Alumno->apellido_materno }}</h3><br>
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
        $interval = $datetime1->diff($datetime2);
        $tiempo = $interval->format('%y años,%m mes');
        $hola=$interval->format('%y años,%m mes');
        if($Alumno->estatus=='Extemporaneo')
            $hola='Fuera de tiempo';
        elseif($Alumno->estatus=='1' || $Alumno->estatus=='2' || $Alumno->estatus=='3')
            $hola=$Alumno->estatus;
        else{
        if($hola <= '2'){
            $hola='1';}
        elseif($hola >'2' and $hola <='2.5'){
            $hola='2';}
        elseif($hola >'2.5' and $hola <='3'){
            $hola='3';}
        else{
            $hola='Fuera de tiempo';
        }
    }
    
     //echo"<input type='text' name='titulo' class ='titulo'  value=".$interval->format('%R%a días').">"; 
    ?>
             
    <section id="alumn" >
      <thead >
        <table width="180%"  class="table table-striped table-bordered "   >
          <tr >
            {{-- <th class="success">Foto </th> --}}
            <th>Cod.Tesis</th>
            <th class="info">Fecha limite titulacion</th>
            <th class="info">Fecha titulacion</th>
           {{--  <th class="info">Tiempo</th> --}}
            <th class="info">Corte</th>
            <th class="danger">Correo</th>
            <th class="danger">Telefono</th>
            <th class="success">Modalidad de pago</th>
            <th class="success">Conocimiento S.N.I</th>
          </tr>
        </thead>
     {{--    <?php
        $estatus;
        if($Alumno->estatus=='MC'){
            $estatus='MC- 240';
        }
        elseif($Alumno->estatus=='MI')
            $estatus='MI- 241';
        elseif($Alumno->estatus=='DC')
            $estatus='DC- 304';
        else
            $estatus='DI- 305';
        ?>
 --}}
        <tr > 
           {{--  <td ><img width="130px" src="{{ asset('/storage/'.$Alumno->imagenes) }}" {{--  class="img-thumbnail" ></td> --}}
           <td>{{$Alumno->codirector}}.  </td>
            <td>{{$Alumno->fecha_ideal}}.  </td>
            <td>{{$Alumno->fecha_titulacion}}</td>
            {{-- <td>{{$tiempo}}.   </td> --}}
            <td>{{$hola}}</td>
            <td>{{$Alumno->correo}}</td>
            <td>{{$Alumno->telefono}}</td>
            <td>{{$Alumno->Modalidad}}</td>
            <td>{{$Alumno->Conocimiento}}</td>    
        </tr>
      </table>     
    </section>
   {{--  <div class="modal-body"><center>
        <button  onclick="location.href='{{URL::action('AlumnoController@reporte',[$Alumno->id,$num=1])}}'"class="btn btn-success editar">
        <span class=" glyphicon glyphicon-download"></span> Reporte Constancia</button></a> 
         <button  onclick="location.href='{{URL::action('AlumnoController@reporte',[$Alumno->id,$num=2])}}'"class="btn btn-success editar">
        <span class=" glyphicon glyphicon-download"></span> Reporte de notificacion</button></a>                        
    </div> --}}
@endsection

<style>
h3{
font-size: 30px;
text-shadow: 1px 1px 2px #000000;
}
</style>