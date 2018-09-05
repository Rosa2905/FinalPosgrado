<?php
$QuD=$baQuD+$tiExQuD+$tiPCQuD+$tiSCQuD+$tiTCQuD; //SUMAD TOTAL EGRE horizo de CADda MADteria
$MAD=$baMAD+$tiExMAD+$tiPCMAD+$tiSCMAD+$tiTCMAD;$InD=$baInD+$tiExInD+$tiPCInD+$tiSCInD+$tiTCInD;
$ElD=$baElD+$tiExElD+$tiPCElD+$tiSCElD+$tiTCElD;$COMD=$baCOMD+$tiExCOMD+$tiPCCOMD+$tiSCCOMD+$tiTCCOMD;
$BID=$baBiD+$tiExBiD+$tiPCBiD+$tiSCBiD+$tiTCBiD;$LCMD=$baCorD+$tiExCorD+$tiPCCorD+$tiSCCorD+$tiTCCorD;
$CAD=$baCAD+$tiExCAD+$tiPCCAD+$tiSCCAD+$tiTCCAD;$ISSD=$baISSD+$tiExISSD+$tiPCISSD+$tiSCISSD+$tiTCISSD;
$CUD=$baCUD+$tiExCUD+$tiPCCUD+$tiSCCUD+$tiTCCUD;$SEED=$baSEED+$tiExSEED+$tiPCSEED+$tiSCSEED+$tiTCSEED;
$MPAD=$baMPAD+$tiExMPAD+$tiPCMPAD+$tiSCMPAD+$tiTCMPAD;

$bT=$baQuD+$baMAD+$baInD+$baElD+$baCOMD; $ExQuD=$tiExQuD+$tiExMAD+$tiExInD+$tiExElD+$tiExCOMD;
$PCT=$tiPCQuD+$tiPCMAD+$tiPCInD+$tiPCElD+$tiPCCOMD ;$SCT=$tiSCQuD+$tiSCMAD+$tiSCInD+$tiSCElD+$tiSCCOMD;
$TCT=$tiTCQuD+$tiTCMAD+$tiTCInD+$tiTCElD+$tiTCCOMD; 
$Vi=$ViQuD+$ViMAD+$ViInD+$ViElD+$ViCOMD;$Te=$TeQuD+$TeMAD+$TeInD+$TeElD+$TeCOMD;
$total=$bT+$ExQuD+$SCT+$TCT+$PCT; //Total PrograMAD
$pagina_anterior=$_SERVER['HTTP_REFERER'];
//echo "<strong>$pagina_anterior</strong>";
if($pagina_anterior=='http://localhost:3000/ResPosgrado/public/usuarios/inicio')
  $variable='AdminController@index';
else
  $variable='AdminController@Docente';
?>

@extends('layouts.alumno')
@section('content')
<div class="topnav" >
  <a class="active" href="{{URL::action($variable)}}"><span class="  glyphicon glyphicon-circle-arrow-left "></span> Regresar</a>
  <img src="{{ asset('imagen/esta.png') }}" class="pull-right"  width="94" height="46"> 
</div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            {{-- <h3>Alumno: {{ $Alumno->nombre}}</h3><br> --}}
            @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
                </ul>
            </div>
            @endif
  {{--  --}}
             
    <br><section id="alumn" >
      <thead >
        <table id="letra"  class="table table-striped table-bordered "   >
          <tr >
            {{-- <th class="success">Foto </th> --}}
            <th class="info"></th>
            <th >Total Egres</th>
            <th >Bajas</th>
            <th class="danger">Titulado Extemp.</th>
            <th class="success">Titulado 1er_Corte</th>
            <th class="success">Titulado 2do_Corte</th>
            <th class="warning">Titulado 3er_Corte</th>
            <th >Vigente</th>
            <th >Tesista</th>
            <th class="success">Efici.Terminal Pnpc_Corte_1</th>
            <th class="success">Efici.Terminal Pnpc_Corte_2</th>
            <th class="warning">Efici.Terminal Pnpc_Corte_3</th>
            <th class="warning">Efici.Terminal Pnpc_Cor_12</th>
            <th class="warning">Efici.Terminal Pnpc_Cor_123</th>
            <th class="warning">Extemp.</th>
            <th class="warning">Efi. TerminalGlobal</th>


          </tr>
          <tr >
        
        <tr>
          <td>  Programa</td>
          <td>{{$total}}</td>
          <td>{{$bT}}</td> 
          <td class="danger">{{$ExQuD}}</td>}}</td>
          <td class="success">{{$PCT}}</td>
          <td class="success">{{$SCT}}</td>
          <td class="warning">{{$TCT}}</td>

          <td>{{$Vi}}</td>
          <td>{{$Te}}</td>
          <td class="success">{{round($pq=(($PCT/$total)*100),2)}}%</td>
          <td class="success">{{round($sq=(($SCT/$total)*100),2)}}%</td>
          <td class="warning">{{round($tq=(($TCT/$total)*100),2)}}%</td>
          <td class="success">{{round($pq+$sq,2)}}%</td>
          <td class="success">{{round($pq+$sq+$tq,2)}}</td>
          <td class="danger">{{round(($ExQuD/$total)*100,2)}}%</td>
          <td>{{round((($ExQuD+$PCT+$SCT+$TCT)/$total)*100,2)}}%</td> 
        </tr>
        
        <tr>
          <td>SACC_Quimica</td> 
          <td>{{$QuD}}</td>
          <td>{{$baQuD}}</td>
          <td class="danger">{{$tiExQuD}}</td>
          <td class="success">{{$tiPCQuD}}</td>
          <td class="success">{{$tiSCQuD}}</td>
          <td class="warning">{{$tiTCQuD}}</td>
          <td>{{$ViQuD}}</td>
          <td>{{$TeQuD}}</td>
          <td class="success">{{round($pQ=(($tiPCQuD/$total)*100),2)}}%</td>
          <td class="success">{{round($sQ=(($tiSCQuD/$total)*100),2)}}%</td>
          <td class="warning">{{round($tQ=(($tiTCQuD/$total)*100),2)}}%</td>
          <td class="success">{{round($pQ+$sQ,2)}}%</td>
          <td class="success">{{round($pQ+$sQ+$tQ,2)}}%</td>
          <td class="danger">{{round(($tiExQuD/$total)*100,2)}}%</td>
          <td>{{round((($tiExQuD+$tiPCQuD+$tiSCQuD+$tiTCQuD)/$total)*100,2)}}%</td>
         </tr>

        <tr>
          <td>SACC_Medio.Amb</td> 
          <td>{{$MAD}}</td>
          <td>{{$baMAD}}</td>
          <td class="danger">{{$tiExMAD}}</td>
          <td class="success">{{$tiPCMAD}}</td>
          <td class="success">{{$tiSCMAD}}</td>
          <td class="warning">{{$tiTCMAD}}</td>
          <td>{{$ViMAD}}</td>
          <td>{{$TeMAD}}</td>
          <td class="success">{{round($pQ=(($tiPCMAD/$total)*100),2)}}%</td>
          <td class="success">{{round($sQ=(($tiSCMAD/$total)*100),2)}}%</td>
          <td class="warning">{{round($tQ=(($tiTCMAD/$total)*100),2)}}%</td>
          <td class="success">{{round($pQ+$sQ,2)}}%</td>
          <td class="success">{{round($pQ+$sQ+$tQ,2)}}%</td>
          <td class="danger">{{round(($tiExMAD/$total)*100,2)}}%</td>
          <td>{{round((($tiExMAD+$tiPCMAD+$tiSCMAD+$tiTCMAD)/$total)*100,2)}}%</td>
         <tr>

        <tr>
          <td>SACC_Industrial</td> 
          <td>{{$InD}}</td>
          <td>{{$baInD}}</td>
          <td class="danger">{{$tiExInD}}</td>
          <td class="success">{{$tiPCInD}}</td>
          <td class="success">{{$tiSCInD}}</td>
          <td class="warnInDg">{{$tiTCInD}}</td>
          <td>{{$ViInD}}</td>
          <td>{{$TeInD}}</td>
         <td class="success">{{round($pQ=(($tiPCInD/$total)*100),2)}}%</td>
          <td class="success">{{round($sQ=(($tiSCInD/$total)*100),2)}}%</td>
          <td class="warning">{{round($tQ=(($tiTCInD/$total)*100),2)}}%</td>
          <td class="success">{{round($pQ+$sQ,2)}}%</td>
          <td class="success">{{round($pQ+$sQ+$tQ,2)}}%</td>
          <td class="danger">{{round(($tiExInD/$total)*100,2)}}%</td>
          <td>{{round((($tiExInD+$tiPCInD+$tiSCInD+$tiTCInD)/$total)*100,2)}}%</td>
         <tr>

        <tr>
          <td>SACC_Electrica</td> 
          <td>{{$ElD}}</td>
          <td>{{$baElD}}</td>
          <td class="danger">{{$tiExElD}}</td>
          <td class="success">{{$tiPCElD}}</td>
          <td class="success">{{$tiSCElD}}</td>
          <td class="warning">{{$tiTCElD}}</td>
          <td>{{$ViElD}}</td>
          <td>{{$TeElD}}</td>
          <td class="success">{{round($pQ=(($tiPCElD/$total)*100),2)}}%</td>
          <td class="success">{{round($sQ=(($tiSCElD/$total)*100),2)}}%</td>
          <td class="warning">{{round($tQ=(($tiTCElD/$total)*100),2)}}%</td>
          <td class="success">{{round($pQ+$sQ,2)}}%</td>
          <td class="success">{{round($pQ+$sQ+$tQ,2)}}%</td>
          <td class="danger">{{round(($tiExElD/$total)*100,2)}}%</td>
          <td>{{round((($tiExElD+$tiPCElD+$tiSCElD+$tiTCElD)/$total)*100,2)}}%</td>
         <tr>

        <tr>
          <td>SACC_Computacion</td> 
          <td>{{$COMD}}</td>
          <td>{{$baCOMD}}</td>
          <td class="danger">{{$tiExCOMD}}</td>
          <td class="success">{{$tiPCCOMD}}</td>
          <td class="success">{{$tiSCCOMD}}</td>
          <td class="warning">{{$tiTCCOMD}}</td>
          <td>{{$ViCOMD}}</td>
          <td>{{$TeCOMD}}</td>
          <td class="success">{{round($pQ=(($tiPCCOMD/$total)*100),2)}}%</td>
          <td class="success">{{round($sQ=(($tiSCCOMD/$total)*100),2)}}%</td>
          <td class="warning">{{round($tQ=(($tiTCCOMD/$total)*100),2)}}%</td>
          <td class="success">{{round($pQ+$sQ,2)}}%</td>
          <td class="success">{{round($pQ+$sQ+$tQ,2)}}%</td>
          <td class="danger">{{round(($tiExCOMD/$total)*100,2)}}%</td>
          <td>{{round((($tiExCOMD+$tiPCCOMD+$tiSCCOMD+$tiTCCOMD)/$total)*100,2)}}%</td>
        <tr><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>

        <tr>
          <td>LGAC Bioquimica</td> 
          <td>{{$BID}}</td>
          <td>{{$baBiD}}</td>
          <td class="danger">{{$tiExBiD}}</td>
          <td class="success">{{$tiPCBiD}}</td>
          <td class="success">{{$tiSCBiD}}</td>
          <td class="warning">{{$tiTCBiD}}</td>
          <td>{{$ViBiD}}</td>
          <td>{{$TeBiD}}</td>
          <td class="success">{{round($pQ=(($tiPCBiD/$total)*100),2)}}%</td>
          <td class="success">{{round($sQ=(($tiSCBiD/$total)*100),2)}}%</td>
          <td class="warning">{{round($tQ=(($tiTCBiD/$total)*100),2)}}%</td>
          <td class="success">{{round($pQ+$sQ,2)}}%</td>
          <td class="success">{{round($pQ+$sQ+$tQ,2)}}%</td>
          <td class="danger">{{round(($tiExBiD/$total)*100,2)}}%</td>
          <td>{{round((($tiExBiD+$tiPCBiD+$tiSCBiD+$tiTCBiD)/$total)*100,2)}}%</td>
         <tr>

        <tr>
          <td>LGAC Corrosion Y Materiales</td> 
          <td>{{$LCMD}}</td>
          <td>{{$baCorD}}</td>
          <td class="danger">{{$tiExCorD}}</td>
          <td class="success">{{$tiPCCorD}}</td>
          <td class="success">{{$tiSCCorD}}</td>
          <td class="warning">{{$tiTCCorD}}</td>
          <td>{{$ViCorD}}</td>
          <td>{{$TeCorD}}</td>
          <td class="success">{{round($pQ=(($tiPCCorD/$total)*100),2)}}%</td>
          <td class="success">{{round($sQ=(($tiSCCorD/$total)*100),2)}}%</td>
          <td class="warning">{{round($tQ=(($tiTCCorD/$total)*100),2)}}%</td>
          <td class="success">{{round($pQ+$sQ,2)}}%</td>
          <td class="success">{{round($pQ+$sQ+$tQ,2)}}%</td>
          <td class="danger">{{round(($tiExCorD/$total)*100,2)}}%</td>
          <td>{{round((($tiExCorD+$tiPCCorD+$tiSCCorD+$tiTCCorD)/$total)*100,2)}}%</td>
         <tr>

        <tr>
          <td>LGAC Contam. Ambiental</td> 
          <td>{{$CAD}}</td>
          <td>{{$baCAD}}</td>
          <td class="danger">{{$tiExCAD}}</td>
          <td class="success">{{$tiPCCAD}}</td>
          <td class="success">{{$tiSCCAD}}</td>
          <td class="warning">{{$tiTCCAD}}</td>
          <td>{{$ViCAD}}</td>
          <td>{{$TeCAD}}</td>
          <td class="success">{{round($pQ=(($tiPCCorD/$total)*100),2)}}%</td>
          <td class="success">{{round($sQ=(($tiSCCorD/$total)*100),2)}}%</td>
          <td class="warning">{{round($tQ=(($tiTCCorD/$total)*100),2)}}%</td>
          <td class="success">{{round($pQ+$sQ,2)}}%</td>
          <td class="success">{{round($pQ+$sQ+$tQ,2)}}%</td>
          <td class="danger">{{round(($tiExCorD/$total)*100,2)}}%</td>
          <td>{{round((($tiExCorD+$tiPCCorD+$tiSCCorD+$tiTCCorD)/$total)*100,2)}}%</td>
         <tr>

        <tr>
          <td>LGAC Ing.Software y simulacion social</td> 
          <td>{{$ISSD}}</td>
          <td>{{$baISSD}}</td>
          <td class="danger">{{$tiExISSD}}</td>
          <td class="success">{{$tiPCISSD}}</td>
          <td class="success">{{$tiSCISSD}}</td>
          <td class="warning">{{$tiTCISSD}}</td>
          <td>{{$ViISSD}}</td>
          <td>{{$TeISSD}}</td>
          <td class="success">{{round($pQ=(($tiPCISSD/$total)*100),2)}}%</td>
          <td class="success">{{round($sQ=(($tiSCISSD/$total)*100),2)}}%</td>
          <td class="warning">{{round($tQ=(($tiTCISSD/$total)*100),2)}}%</td>
          <td class="success">{{round($pQ+$sQ,2)}}%</td>
          <td class="success">{{round($pQ+$sQ+$tQ,2)}}%</td>
          <td class="danger">{{round(($tiExISSD/$total)*100,2)}}%</td>
          <td>{{round((($tiExISSD+$tiPCISSD+$tiSCISSD+$tiTCISSD)/$total)*100,2)}}%</td>
         <tr>

        <tr>
          <td>LGAC Computo movil y oblicuo</td> 
          <td>{{$CUD}}</td>
          <td>{{$baCUD}}</td>
          <td class="danger">{{$tiExCUD}}</td>
          <td class="success">{{$tiPCCUD}}</td>
          <td class="success">{{$tiSCCUD}}</td>
          <td class="warning">{{$tiTCCUD}}</td>
          <td>{{$ViCUD}}</td>
          <td>{{$TeCUD}}</td>
          <td class="success">{{round($pQ=(($tiPCCUD/$total)*100),2)}}%</td>
          <td class="success">{{round($sQ=(($tiSCCUD/$total)*100),2)}}%</td>
          <td class="warning">{{round($tQ=(($tiTCCUD/$total)*100),2)}}%</td>
          <td class="success">{{round($pQ+$sQ,2)}}%</td>
          <td class="success">{{round($pQ+$sQ+$tQ,2)}}%</td>
          <td class="danger">{{round(($tiExCUD/$total)*100,2)}}%</td>
          <td>{{round((($tiExCUD+$tiPCCUD+$tiSCCUD+$tiTCCUD)/$total)*100,2)}}%</td>
         <tr>

        <tr>
          <td>LGAC Sistemas electri._y_electronicos</td> 
          <td>{{$SEED}}</td>
          <td>{{$baSEED}}</td>
          <td class="danger">{{$tiExSEED}}</td>
          <td class="success">{{$tiPCSEED}}</td>
          <td class="success">{{$tiSCSEED}}</td>
          <td class="warning">{{$tiTCSEED}}</td>
          <td>{{$ViSEED}}</td>
          <td>{{$TeSEED}}</td>
          <td class="success">{{round($pQ=(($tiPCSEED/$total)*100),2)}}%</td>
          <td class="success">{{round($sQ=(($tiSCSEED/$total)*100),2)}}%</td>
          <td class="warning">{{round($tQ=(($tiTCSEED/$total)*100),2)}}%</td>
          <td class="success">{{round($pQ+$sQ,2)}}%</td>
          <td class="success">{{round($pQ+$sQ+$tQ,2)}}%</td>
          <td class="danger">{{round(($tiExSEED/$total)*100,2)}}%</td>
          <td>{{round((($tiExSEED+$tiPCSEED+$tiSCSEED+$tiTCSEED)/$total)*100,2)}}%</td>
         <tr>

        <tr>
          <td>Manufactura produccion_y_calidad</td> 
          <td>{{$MPAD}}</td>
          <td>{{$baMPAD}}</td>
          <td class="danger">{{$tiExMPAD}}</td>
          <td class="success">{{$tiPCMPAD}}</td>
          <td class="success">{{$tiSCMPAD}}</td>
          <td class="warning">{{$tiTCMPAD}}</td>
          <td>{{$ViMPAD}}</td>
          <td>{{$TeMPAD}}</td>
          <td class="success">{{round($pQ=(($tiPCMPAD/$total)*100),2)}}%</td>
          <td class="success">{{round($sQ=(($tiSCMPAD/$total)*100),2)}}%</td>
          <td class="warning">{{round($tQ=(($tiTCMPAD/$total)*100),2)}}%</td>
          <td class="success">{{round($pQ+$sQ,2)}}%</td>
          <td class="success">{{round($pQ+$sQ+$tQ,2)}}%</td>
          <td class="danger">{{round(($tiExMPAD/$total)*100,2)}}%</td>
          <td>{{round((($tiExMPAD+$tiPCMPAD+$tiSCMPAD+$tiTCMPAD)/$total)*100,2)}}%</td>
         <tr>

       
        
     

        </thead>
       
      </table>   
       <div class="modal-body"><center>
        <button  onclick="location.href='{{URL::action('AdminController@indicador',$num=3)}}'"class="btn btn-success editar">
                                <span class=" glyphicon glyphicon-download"></span> Reporte Constancia</button></a>                        
    </div> 
    </section>
    
@endsection

<style>
h3{
font-size: 30px;
text-shadow: 1px 1px 2px #000000;
}
#letra{
  font-size: 15px;

}
</style>
