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
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <center><h3><u>DOCTORADO</u>  Indicadores Historicos de Eficiencia Terminal del programa MyDCI</h3></center>
  
     <table id="tabla" class="table table-striped table-bordered "   >
         <tr >
          <th ></th>
            <th >Total Egres</th>
            <th >Bajas</th>
            <th class="danger">Titulado Extemp.</th>
            <th class="success">Titulado 1er_Corte</th>
            <th class="success">Titulado 2do_Corte</th>
            <th class="warning">Titulado 3er_Corte</th>
            <th >Vigente</th>
            <th >Tesista</th>
        </tr>
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
         </tr>

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
         </tr>

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
         </tr>

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
        </tr>

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
        </tr>

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
        </tr>


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
         </tr>
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
         </tr>

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
         </tr>

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
         </tr>

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
         </tr>
      </table>   
       
    

    <table id="tabla "class="table table-striped table-bordered "   >
    <tr >
      <th class="info"></th>
      <th class="success">PNPC_Corte1 </th>
      <th class="success">PNPC_Corte2 </th>
      <th class="warning">PNPC_Corte3 </th>
      <th class="warning">PNPC_Cor12 </th>
      <th class="warning">PNPC_Cor123 </th>
      <th class="warning">Extempora</th>
      <th class="warning">Ter Global</th>
    </tr>
       <tr>
          <td>  Programa</td>
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
          <td class="success">{{round($pQ=(($tiPCMAD/$total)*100),2)}}%</td>
          <td class="success">{{round($sQ=(($tiSCMAD/$total)*100),2)}}%</td>
          <td class="warning">{{round($tQ=(($tiTCMAD/$total)*100),2)}}%</td>
          <td class="success">{{round($pQ+$sQ,2)}}%</td>
          <td class="success">{{round($pQ+$sQ+$tQ,2)}}%</td>
          <td class="danger">{{round(($tiExMAD/$total)*100,2)}}%</td>
          <td>{{round((($tiExMAD+$tiPCMAD+$tiSCMAD+$tiTCMAD)/$total)*100,2)}}%</td>
         </tr>
<tr>
          <td>SACC_Industrial</td> 
         <td class="success">{{round($pQ=(($tiPCInD/$total)*100),2)}}%</td>
          <td class="success">{{round($sQ=(($tiSCInD/$total)*100),2)}}%</td>
          <td class="warning">{{round($tQ=(($tiTCInD/$total)*100),2)}}%</td>
          <td class="success">{{round($pQ+$sQ,2)}}%</td>
          <td class="success">{{round($pQ+$sQ+$tQ,2)}}%</td>
          <td class="danger">{{round(($tiExInD/$total)*100,2)}}%</td>
          <td>{{round((($tiExInD+$tiPCInD+$tiSCInD+$tiTCInD)/$total)*100,2)}}%</td>
         </tr>

        <tr>
          <td>SACC_Electrica</td> 
          <td class="success">{{round($pQ=(($tiPCElD/$total)*100),2)}}%</td>
          <td class="success">{{round($sQ=(($tiSCElD/$total)*100),2)}}%</td>
          <td class="warning">{{round($tQ=(($tiTCElD/$total)*100),2)}}%</td>
          <td class="success">{{round($pQ+$sQ,2)}}%</td>
          <td class="success">{{round($pQ+$sQ+$tQ,2)}}%</td>
          <td class="danger">{{round(($tiExElD/$total)*100,2)}}%</td>
          <td>{{round((($tiExElD+$tiPCElD+$tiSCElD+$tiTCElD)/$total)*100,2)}}%</td>
         </tr>

        <tr>
          <td>SACC_Computacion</td> 
          <td class="success">{{round($pQ=(($tiPCCOMD/$total)*100),2)}}%</td>
          <td class="success">{{round($sQ=(($tiSCCOMD/$total)*100),2)}}%</td>
          <td class="warning">{{round($tQ=(($tiTCCOMD/$total)*100),2)}}%</td>
          <td class="success">{{round($pQ+$sQ,2)}}%</td>
          <td class="success">{{round($pQ+$sQ+$tQ,2)}}%</td>
          <td class="danger">{{round(($tiExCOMD/$total)*100,2)}}%</td>
          <td>{{round((($tiExCOMD+$tiPCCOMD+$tiSCCOMD+$tiTCCOMD)/$total)*100,2)}}%</td>
        </tr>

        <tr>
          <td>LGAC Bioquimica</td> 
          <td class="success">{{round($pQ=(($tiPCBiD/$total)*100),2)}}%</td>
          <td class="success">{{round($sQ=(($tiSCBiD/$total)*100),2)}}%</td>
          <td class="warning">{{round($tQ=(($tiTCBiD/$total)*100),2)}}%</td>
          <td class="success">{{round($pQ+$sQ,2)}}%</td>
          <td class="success">{{round($pQ+$sQ+$tQ,2)}}%</td>
          <td class="danger">{{round(($tiExBiD/$total)*100,2)}}%</td>
          <td>{{round((($tiExBiD+$tiPCBiD+$tiSCBiD+$tiTCBiD)/$total)*100,2)}}%</td>
         </tr>

        <tr>
          <td>LGAC Corrosion Y Materiales</td> 
          <td class="success">{{round($pQ=(($tiPCCorD/$total)*100),2)}}%</td>
          <td class="success">{{round($sQ=(($tiSCCorD/$total)*100),2)}}%</td>
          <td class="warning">{{round($tQ=(($tiTCCorD/$total)*100),2)}}%</td>
          <td class="success">{{round($pQ+$sQ,2)}}%</td>
          <td class="success">{{round($pQ+$sQ+$tQ,2)}}%</td>
          <td class="danger">{{round(($tiExCorD/$total)*100,2)}}%</td>
          <td>{{round((($tiExCorD+$tiPCCorD+$tiSCCorD+$tiTCCorD)/$total)*100,2)}}%</td>
         </tr>

        <tr>
          <td>LGAC Contam. Ambiental</td> 
          <td class="success">{{round($pQ=(($tiPCCorD/$total)*100),2)}}%</td>
          <td class="success">{{round($sQ=(($tiSCCorD/$total)*100),2)}}%</td>
          <td class="warning">{{round($tQ=(($tiTCCorD/$total)*100),2)}}%</td>
          <td class="success">{{round($pQ+$sQ,2)}}%</td>
          <td class="success">{{round($pQ+$sQ+$tQ,2)}}%</td>
          <td class="danger">{{round(($tiExCorD/$total)*100,2)}}%</td>
          <td>{{round((($tiExCorD+$tiPCCorD+$tiSCCorD+$tiTCCorD)/$total)*100,2)}}%</td>
         </tr>

        <tr>
          <td>LGAC Ing.Software y simulacion social</td> 
          <td class="success">{{round($pQ=(($tiPCISSD/$total)*100),2)}}%</td>
          <td class="success">{{round($sQ=(($tiSCISSD/$total)*100),2)}}%</td>
          <td class="warning">{{round($tQ=(($tiTCISSD/$total)*100),2)}}%</td>
          <td class="success">{{round($pQ+$sQ,2)}}%</td>
          <td class="success">{{round($pQ+$sQ+$tQ,2)}}%</td>
          <td class="danger">{{round(($tiExISSD/$total)*100,2)}}%</td>
          <td>{{round((($tiExISSD+$tiPCISSD+$tiSCISSD+$tiTCISSD)/$total)*100,2)}}%</td>
         </tr>

        <tr>
          <td>LGAC Computo movil y oblicuo</td> 
          <td class="success">{{round($pQ=(($tiPCCUD/$total)*100),2)}}%</td>
          <td class="success">{{round($sQ=(($tiSCCUD/$total)*100),2)}}%</td>
          <td class="warning">{{round($tQ=(($tiTCCUD/$total)*100),2)}}%</td>
          <td class="success">{{round($pQ+$sQ,2)}}%</td>
          <td class="success">{{round($pQ+$sQ+$tQ,2)}}%</td>
          <td class="danger">{{round(($tiExCUD/$total)*100,2)}}%</td>
          <td>{{round((($tiExCUD+$tiPCCUD+$tiSCCUD+$tiTCCUD)/$total)*100,2)}}%</td>
         </tr>

        <tr>
          <td>LGAC Sistemas electri._y_electronicos</td> 
          <td class="success">{{round($pQ=(($tiPCSEED/$total)*100),2)}}%</td>
          <td class="success">{{round($sQ=(($tiSCSEED/$total)*100),2)}}%</td>
          <td class="warning">{{round($tQ=(($tiTCSEED/$total)*100),2)}}%</td>
          <td class="success">{{round($pQ+$sQ,2)}}%</td>
          <td class="success">{{round($pQ+$sQ+$tQ,2)}}%</td>
          <td class="danger">{{round(($tiExSEED/$total)*100,2)}}%</td>
          <td>{{round((($tiExSEED+$tiPCSEED+$tiSCSEED+$tiTCSEED)/$total)*100,2)}}%</td>
         </tr>

        <tr>
          <td>Manufactura produccion_y_calidad</td> 
          <td class="success">{{round($pQ=(($tiPCMPAD/$total)*100),2)}}%</td>
          <td class="success">{{round($sQ=(($tiSCMPAD/$total)*100),2)}}%</td>
          <td class="warning">{{round($tQ=(($tiTCMPAD/$total)*100),2)}}%</td>
          <td class="success">{{round($pQ+$sQ,2)}}%</td>
          <td class="success">{{round($pQ+$sQ+$tQ,2)}}%</td>
          <td class="danger">{{round(($tiExMPAD/$total)*100,2)}}%</td>
          <td>{{round((($tiExMPAD+$tiPCMPAD+$tiSCMPAD+$tiTCMPAD)/$total)*100,2)}}%</td>
         </tr>

          </table> 

      
  
            
  </body>
</html>

<style>
#id{  
 position: relative;
  top:-15%;
  left: 20px;
}

#tabla{
  font-size: 0.9em;
}
</style>


 