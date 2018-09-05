@extends('layouts.alumno')
@section('content')
  <link href="{{ asset('css/Admelec.css') }}" rel="stylesheet">
  <div class="topnav" >
    <a class="active" href="{{ route('logout') }}"onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">{{ __('Salir  ') }}<span class="  glyphicon glyphicon-off"></span></a>
     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf</form>
    <a href="#" ><img class="rightedit"   width="20%" src="{{ asset('imagen/esta.png') }}"></a>
  </div>
  <label id="finalizar" class="text-primary" name='finalizar'> Consulta Alumnos  </label>
  <label id="grupoelegir" class="text-primary" name='finalizar'>Con quien desea trabajar </label>
{{--   <label id="reporte" class="text-danger" name='finalizar'> Reporte: </label> --}}
  <div class="ex33">
    <img id="containerEx3" width="12%" onclick="location.href='{{URL::action('AlumnoController@Doinicio')}}'" src="{{ asset('imagen/graduates.png') }}" alt="Cinque Terre" >
    <img id="alumno" width="12%"  src="{{ asset('imagen/presentation.png') }}" alt="Alumnos" >
    <img  id="asignar" width="12%" onclick="location.href='{{URL::action('AlumnoController@Doinicio')}}'" src="{{ asset('imagen/asignar.png') }}" alt="Alumnos" >
    <label id="laDo" class="text-danger" > Alumnos  </label>
    <label id="laEs" class="text-danger" > Docentes   </label>
    <label id="laAs" class="text-danger" > Asignar </label>
  </div>
  <button id="boton" onclick="location.href='{{URL::action('AdminController@indicador',$num=0)}}'" class="btn btn-success" >Indicador Efici.<br/>Terminal<br/>MyDCI_Maestria {{-- <span  class="glyphicon glyphicon-user"></span> --}}</button>

  <button id="boton" onclick="location.href='{{URL::action('AdminController@indicador',$num=2)}}'" class="btn btn-success" >Indicador Efici.<br/>Terminal<br/>MyDCI_Doctorado</button>
 {{--  <br><br><input type="button" onclick="location.href='{{URL::action('AdminController@indicador',$num=3)}}'" class="btn btn-success"  value="Archivo de Correos"></><span  class="glyphicon glyphicon-user"></span> --}}
  <a href="" data-target="#modal-proximos" data-toggle="modal" > <button id="boton" class="btn btn-info">Alumnos<br/>Proximos<br/>Egresar</button></a>


  <div class="modal fade modal-slide-in-right" aria-hidden="true"
  role="dialog" tabindex="-1" id="modal-proximos">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" 
          aria-label="Close"> <span aria-hidden="true">×</span></button>
           <h3 class="modal-title"><center><b>Proximos a Egresar</b></center></h3>
        </div>
        <div class="modal-body">
          <?php
          $datetime1 = new DateTime();
           echo"   <table id='Altabla' class='table table-striped table-bordered'>
                   <thead>
                    <tr>
                      <th class='success'>Nombre</th>
                      <th class='success'>Apellido</th>
                      <th class='success'>Director</th>
                      <th class='info'>Fecha_Final</th>
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
                      echo "<td>$fila->apellido_paterno</td>";
                      echo "<td>$fila->director</td>";
                      echo "<td>$fila->fecha_egreso</td>";
                      echo "<td>".$interval->format('%R%a días')."</td>";
                    echo"</tr>";}
                   }
          echo " </tbody>"; 
          ?>
      </div>
    </div>
@endsection


<style>

.modal-content {
    background-color: #fefefe;
    margin: 20% auto; /* 15% from the top and centered */
    padding: 5px;
    border: 7px solid #90EE90;
    width: 40%; /* Could be more or less, depending on screen size */
    height: 65%;
}
#boton{
  position: relative;
  left: 120px;
  top:-75px;
}
#salir{
  position: relative;
  left: 1490px;
  top:15px;
  font-size: 1.5em;
}
</style>