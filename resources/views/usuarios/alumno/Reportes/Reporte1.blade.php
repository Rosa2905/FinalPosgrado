 <?php
$fecha= date("m-d-Y");
?>
 <!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
   <center><b><h2>UNIVERSIDAD AUTONOMA DE BAJA CALIFORNIA</h2></b></center>
   <center><h3>Facultad de Ciencias Quimicas e Ingeniería<</h3></center>
   <center><h3>Coordinación De Posgrado e Investigación</h3></center><br>
   		<p>DR. <b>{{$Alumno->director }}</b> <br>
      ACADEMICO DE LA FACULTAD
      </p><br><P ALIGN="justify">
   		<p>
       Por medio del presente se le notifica que ha sido designado como Codirector de tesis del  C.<b>{{ $Alumno->nombre}} {{ $Alumno->apellido_paterno}} {{ $Alumno->apellido_materno }}, </b>alumno de maestria del Programa <b>Maestría y Doctorado en Ciencias e Ingeniería</b> que se imparte en esta facultad.<br><br>
       Asimismo, le comento que se tiene plena confianza en que usted cumplirá de forma ejemplar las actividades pertinentes para que el alumno culmine sus estudios en tiempo y forma.<br><br>
       Sin otro particular por el momento y agradeciendo de antemano la atención prestada al presente, le envio un cordial saludo.<br><br>
      </p></p>
   		
   		<center><pre>                         ATENTAMENTE  <b>   
Tijuana,Baja California a {{ $fecha }}    
"POR LA REALIZACIÓN PLENA DEL HOMBRE"   <br><br></b><b> 
DR. JUAN RAMON CASTRO RODRÍGUEZ</b><br>
COORDINADOR DE POSGRADO E INVESTIGACIÓN                   </pre></center> 

            
  </body>
</html>




<style>
p {
/*font-family: Arial, Helvetica, sans-serif;*/
font-size: 19px;
line-height: 140%   /*esta es la propiedad para el interlineado*/
color: #000;
/*padding: 10px;*/
}
#logito{
	position: relative;
    top: -350px;
    left: 600px;
}
</style>
