<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
   <center><b><h2>UNIVERSIDAD AUTONOMA DE BAJA CALIFORNIA</h2></b></center>
   <center><h3>Facultad de Ciencias Quimicas e Ingeniería<</h3></center>
   <center><h3>Coordinación De Posgrado e Investigación</h3></center><br><br>

   <b>Alumno: </b>{{ $Alumno->nombre}} {{ $Alumno->apellido_paterno}} {{ $Alumno->apellido_materno }}<br><br>
   <b>Matricula:</b> {{ $Alumno->matricula }}<br><br>
   <b>CVU: </b> {{$Alumno->CVU}}<br><br>
   <b>Programa</b> {{ $Alumno->SAGCC}}<br><br>
   <b>LGAC:</b> {{ $Alumno->LGAC }}<br><br>
   <b>Ingreso:</b> {{ $Alumno->fecha_ingreso }} <br><br>
   <b>Egreso:</b>{{$Alumno->fecha_egreso}}<br><br>
   <b>Director</b> {{ $Alumno->director }}<br><br>
   <b>Codirector</b> {{ $Alumno->codirector }}<br><br>
   <b>Modalidad</b> {{$Alumno->Modalidad}}<br>
          
  </body>
</html>