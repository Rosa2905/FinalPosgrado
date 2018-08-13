 <!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
   <center><b><h2>Universidad Autonoma De Baja California</h2></b></center>
   <center><h3>Facultad de Ciencias Quimicas e Ingenieria</h3></center>
   <center><h3><u>Reporte Posgrado</u></h3></center><br>
   		<p>Se presentando los datos del alumno: <b>{{ $Alumno->nombre}} {{ $Alumno->apellido_paterno}} {{ $Alumno->apellido_materno }}</b> perteneciente al campus <b>{{ $Alumno->campus }}</b> a continuacion:</p><center>
   		<p>Dicho alumno cuyo SAGCC corresponde a <b>{{ $Alumno->SAGCC }} </b> se encuentra cursando la <b>{{ $Alumno->grado }}</b>en el area de conocimiento de <b>{{ $Alumno->carrera}}</b> cuya LGAC asociada es <b>{{ $Alumno->LGAC }}</b> con el director de tesis <b>{{ $Alumno->director }}</b> en conjunto con el codirector de tesis <b>{{ $Alumno->codirector }}</b>, 
   		los cuales ya fueron asignados e informados previamente.Teniendo en cuenta que la fecha de ingreso fue a partir de
   		<b>{{$Alumno->fecha_ingreso }}</b> el alumno actualmente entra dentro del corte <b>{{$Alumno->corte}}</b> y se espera que en 
   		base a la fecha ideal calculada finalize <b>{{ $Alumno->fecha_ideal }}</b>,sin nada mas que informar por el momento, 
   		me despido con un cordial saludo deceando un buen dia.                  </p></center><br><br>
   		
   		<center><pre>------------------.                       .--------------------<br>
   			<b>Atte: Direccion Posgrado.                 .Atte:Director Enrique Palafox</b></pre></center>
            
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
