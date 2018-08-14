@extends('layouts.alumno')
@section('content')
  <link href="{{ asset('css/Admelec.css') }}" rel="stylesheet">
  <div class="topnav" >
    <a class="active" href="{{URL::action('AlumnoController@index')}}"><span class="  glyphicon glyphicon-circle-arrow-left "></span> Regresar</a>
    <a href="#" ><img class="rightedit"   width="20%" src="{{ asset('imagen/esta.png') }}"></a>
  </div>
  <label id="finalizar" class="text-danger" name='finalizar'> Consulta Alumnos  </label>
  <label id="grupoelegir" class="text-danger" name='finalizar'> Con quien desea trabajar: </label>
  <div class="ex3">
    <img id="containerEx3" width="12%" onclick="location.href='{{URL::action('AlumnoController@index')}}'" src="{{ asset('imagen/graduates.png') }}" alt="Cinque Terre" >
    <img id="alumno" width="12%"  src="{{ asset('imagen/presentation.png') }}" alt="Alumnos" >
    <img  id="asignar" width="12%" onclick="location.href='{{URL::action('AlumnoController@index')}}'" src="{{ asset('imagen/asignar.png') }}" alt="Alumnos" >
  <label id="laDo" class="text-danger" > Alumnos  </label>
  <label id="laEs" class="text-danger" > Docentes   </label>
  <label id="laAs" class="text-danger" > Asignar </label>
  </div>
  <br><br><input id="boton" type="button" onclick="location.href='{{URL::action('AdminController@indicador',$num=0)}}'
  " class="btn btn-success"  value="Indicadores Eficiencia Terminal MyDCI_Maestria"></>
        <span  class="glyphicon glyphicon-user"></span>

  <br><br><input type="button" onclick="location.href='{{URL::action('AdminController@indicador',$num=2)}}'" class="btn 
        btn-success"  value="Doctorado"></><span  class="glyphicon glyphicon-user"></span>

  <br><br><input type="button" onclick="location.href='{{URL::action('AdminController@indicador',$num=3)}}'" class="btn 
        btn-success"  value="Archivo de Correos"></><span  class="glyphicon glyphicon-user"></span>


@endsection

<?php
$datetime1 = new DateTime();
 echo"   <table id='Altabla' class='table table-striped table-bordered'>
         <thead>
          <tr>
            <th class='success'>Nombre</th>
            <th class='info'>Fecha Final</th>
            <th class='danger'>Dias restantes</th>   
          </tr>
        </thead>";
echo "<tbody>";
           foreach($Alumno as $fila){
            $datetime2 = new DateTime($fila->fecha_ingreso);
            $interval = $datetime2->diff($datetime1);
            if($interval->format('%R%a días') < 20){
          echo"<tr>";
            echo "<td>$fila->nombre</td>";
            echo "<td>$fila->fecha_egreso</td>";
            echo "<td>".$interval->format('%R%a días')."</td>";
          echo"</tr>";}
         }
echo " </tbody>";
 //echo"<input type='text' name='titulo' class ='titulo'  value=".$interval->format('%R%a días').">"; 
?>

<style>
#boton{
  white-space: normal;
  text-align: center;
}
</style>