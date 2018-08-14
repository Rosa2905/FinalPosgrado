<?php
$QU=$baQu+$tiExQu+$tiPCQu+$tiSCQu+$tiTCQu; //SUMA TOTAL EGRE horizo de cada materia
$MA=$baMA+$tiExMA+$tiPCMA+$tiSCMA+$tiTCMA;$IN=$baIn+$tiExIn+$tiPCIn+$tiSCIn+$tiTCIn;
$EL=$baEl+$tiExEl+$tiPCEl+$tiSCEl+$tiTCEl;$COM=$baCOM+$tiExCOM+$tiPCCOM+$tiSCCOM+$tiTCCOM;
$BI=$baBi+$tiExBi+$tiPCBi+$tiSCBi+$tiTCBi;$LCM=$baCor+$tiExCor+$tiPCCor+$tiSCCor+$tiTCCor;
$CA=$baCA+$tiExCA+$tiPCCA+$tiSCCA+$tiTCCA;$ISS=$baISS+$tiExISS+$tiPCISS+$tiSCISS+$tiTCISS;
$CU=$baCU+$tiExCU+$tiPCCU+$tiSCCU+$tiTCCU;$SEE=$baSEE+$tiExSEE+$tiPCSEE+$tiSCSEE+$tiTCSEE;
$MPA=$baMPA+$tiExMPA+$tiPCMPA+$tiSCMPA+$tiTCMPA;

$bT=$baQu+$baMA+$baIn+$baEl+$baCOM; $ExQu=$tiExQu+$tiExMA+$tiExIn+$tiExEl+$tiExCOM;
$PCT=$tiPCQu+$tiPCMA+$tiPCIn+$tiPCEl+$tiPCCOM ;$SCT=$tiSCQu+$tiSCMA+$tiSCIn+$tiSCEl+$tiSCCOM;
$TCT=$tiTCQu+$tiTCMA+$tiTCIn+$tiTCEl+$tiTCCOM; 
$Vi=$ViQu+$ViMA+$ViIn+$ViEl+$ViCOM;$Te=$TeQu+$TeMA+$TeIn+$TeEl+$TeCOM;
$total=$bT+$ExQu+$SCT+$TCT+$PCT; //Total Programa


?>  
 <!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <center><h3><u>MAESTRIA</u> Indicadores Historicos de Eficiencia Terminal del programa MyDCI</h3></center>
    
    
       <table id="tabla" class="table table-striped table-bordered "   >
         <tr >
          <th ></th>
            <th >Egresados </th>
            <th >Bajas </th>
            <th class="danger">Titulado Extem </th>
            <th class="success">Titulado 1er_Corte </th>
            <th class="success">Titulado 2do_Corte </th>
            <th class="warning">Titulado 3er_Corte</th>
            <th >Vigente</th>
            <th >Tesista</th>
        </tr>
        <tr>
          <td>  Programa</td>
          <td>{{$total}}</td>
          <td>{{$bT}}</td> 
          <td class="danger">{{$ExQu}}</td>}}</td>
          <td class="success">{{$PCT}}</td>
          <td class="success">{{$SCT}}</td>
          <td class="warning">{{$TCT}}</td>

          <td>{{$Vi}}</td>
          <td>{{$Te}}</td>
          {{-- <td class="success">{{round($pq=(($PCT/$total)*100),2)}}%</td>
          <td class="success">{{round($sq=(($SCT/$total)*100),2)}}%</td>
          <td class="warning">{{round($tq=(($TCT/$total)*100),2)}}%</td>
          <td class="success">{{round($pq+$sq,2)}}%</td>
          <td class="success">{{round($pq+$sq+$tq,2)}}</td>
          <td class="danger">{{round(($ExQu/$total)*100,2)}}%</td>
          <td>{{round((($ExQu+$PCT+$SCT+$TCT)/$total)*100,2)}}%</td> --}}
         </tr>

        <tr>
          <td>SACC_Quimica</td> 
         
          <td>{{$QU}}</td>
          <td>{{$baQu}}</td>
          <td class="danger">{{$tiExQu}}</td>
          <td class="success">{{$tiPCQu}}</td>
          <td class="success">{{$tiSCQu}}</td>
          <td class="warning">{{$tiTCQu}}</td>
          <td>{{$ViQu}}</td>
          <td>{{$TeQu}}</td>
        </tr>

        <tr>
          <td>SACC_Medio.Amb</td> 
          <td>{{$MA}}</td>
          <td>{{$baMA}}</td>
          <td class="danger">{{$tiExMA}}</td>
          <td class="success">{{$tiPCMA}}</td>
          <td class="success">{{$tiSCMA}}</td>
          <td class="warning">{{$tiTCMA}}</td>
          <td>{{$ViMA}}</td>
          <td>{{$TeMA}}</td>
         </tr>

          <tr>
          <td>SACC_Industrial</td> 
          <td>{{$IN}}</td>
          <td>{{$baIn}}</td>
          <td class="danger">{{$tiExIn}}</td>
          <td class="success">{{$tiPCIn}}</td>
          <td class="success">{{$tiSCIn}}</td>
          <td class="warning">{{$tiTCIn}}</td>
          <td>{{$ViIn}}</td>
          <td>{{$TeIn}}</td>
         </tr>

         <tr>
          <td>SACC_Electrica</td> 
          <td>{{$EL}}</td>
          <td>{{$baEl}}</td>
          <td class="danger">{{$tiExEl}}</td>
          <td class="success">{{$tiPCEl}}</td>
          <td class="success">{{$tiSCEl}}</td>
          <td class="warning">{{$tiTCEl}}</td>
          <td>{{$ViEl}}</td>
          <td>{{$TeEl}}</td>
         </tr>

        <tr>
          <td>SACC_Computacion</td> 
          <td>{{$COM}}</td>
          <td>{{$baCOM}}</td>
          <td class="danger">{{$tiExCOM}}</td>
          <td class="success">{{$tiPCCOM}}</td>
          <td class="success">{{$tiSCCOM}}</td>
          <td class="warning">{{$tiTCCOM}}</td>
          <td>{{$ViCOM}}</td>
          <td>{{$TeCOM}}</td>
        </tr>

        <tr>
          <td>LGAC Bioquimica</td> 
          <td>{{$BI}}</td>
          <td>{{$baBi}}</td>
          <td class="danger">{{$tiExBi}}</td>
          <td class="success">{{$tiPCBi}}</td>
          <td class="success">{{$tiSCBi}}</td>
          <td class="warning">{{$tiTCBi}}</td>
          <td>{{$ViBi}}</td>
          <td>{{$TeBi}}</td>
        </tr>

        <tr>
          <td>LGAC Corrosion Y Materiales</td> 
          <td>{{$LCM}}</td>
          <td>{{$baCor}}</td>
          <td class="danger">{{$tiExCor}}</td>
          <td class="success">{{$tiPCCor}}</td>
          <td class="success">{{$tiSCCor}}</td>
          <td class="warning">{{$tiTCCor}}</td>
          <td>{{$ViCor}}</td>
          <td>{{$TeCor}}</td>
        </tr>


        <tr>
          <td>LGAC Contam. Ambiental</td> 
          <td>{{$CA}}</td>
          <td>{{$baCA}}</td>
          <td class="danger">{{$tiExCA}}</td>
          <td class="success">{{$tiPCCA}}</td>
          <td class="success">{{$tiSCCA}}</td>
          <td class="warning">{{$tiTCCA}}</td>
          <td>{{$ViCA}}</td>
          <td>{{$TeCA}}</td>
         </tr>

        <tr>
          <td>LGAC Ing.Software y simulacion social</td> 
          <td>{{$ISS}}</td>
          <td>{{$baISS}}</td>
          <td class="danger">{{$tiExISS}}</td>
          <td class="success">{{$tiPCISS}}</td>
          <td class="success">{{$tiSCISS}}</td>
          <td class="warning">{{$tiTCISS}}</td>
          <td>{{$ViISS}}</td>
          <td>{{$TeISS}}</td>
         </tr>

         <tr>
          <td>LGAC Computo movil y oblicuo</td> 
          <td>{{$CU}}</td>
          <td>{{$baCU}}</td>
          <td class="danger">{{$tiExCU}}</td>
          <td class="success">{{$tiPCCU}}</td>
          <td class="success">{{$tiSCCU}}</td>
          <td class="warning">{{$tiTCCU}}</td>
          <td>{{$ViCU}}</td>
          <td>{{$TeCU}}</td>
         </tr>

         <tr>
          <td>LGAC Sistemas electricos y electronicos</td> 
           <td>{{$SEE}}</td>
          <td>{{$baSEE}}</td>
          <td class="danger">{{$tiExSEE}}</td>
          <td class="success">{{$tiPCSEE}}</td>
          <td class="success">{{$tiSCSEE}}</td>
          <td class="warning">{{$tiTCSEE}}</td>
          <td>{{$ViSEE}}</td>
          <td>{{$TeSEE}}</td>
         </tr>

         <tr>
          <td>LGAC Manufactura produccion y calidad</td> 
          <td>{{$MPA}}</td>
          <td>{{$baMPA}}</td>
          <td class="danger">{{$tiExMPA}}</td>
          <td class="success">{{$tiPCMPA}}</td>
          <td class="success">{{$tiSCMPA}}</td>
          <td class="warning">{{$tiTCMPA}}</td>
          <td>{{$ViMPA}}</td>
          <td>{{$TeMPA}}</td>
         </tr>

      </table>   
       

    <table id="tabla" class="table table-striped table-bordered "   >
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
          <td class="danger">{{round(($ExQu/$total)*100,2)}}%</td>
          <td>{{round((($ExQu+$PCT+$SCT+$TCT)/$total)*100,2)}}%</td>
        </tr>
        <tr>
          <td>SACC_Quimica</td> 
          <td class="success">{{round($pQ=(($tiPCQu/$total)*100),2)}}%</td>
          <td class="success">{{round($sQ=(($tiSCQu/$total)*100),2)}}%</td>
          <td class="warning">{{round($tQ=(($tiTCQu/$total)*100),2)}}%</td>
          <td class="success">{{round($pQ+$sQ,2)}}%</td>
          <td class="success">{{round($pQ+$sQ+$tQ,2)}}%</td>
          <td class="danger">{{round(($tiExQu/$total)*100,2)}}%</td>
          <td>{{round((($tiExQu+$tiPCQu+$tiSCQu+$tiTCQu)/$total)*100,2)}}%</td>
        </tr>

        <tr>
          <td>SACC_Medio.Amb</td> 
          <td class="success">{{round($pMA=(($tiPCMA/$total)*100),2)}}%</td>
          <td class="success">{{round($sMA=(($tiSCMA/$total)*100),2)}}%</td>
          <td class="warning">{{round($tMA=(($tiTCMA/$total)*100),2)}}%</td>
          <td class="success">{{round($pMA+$sMA,2)}}%</td>
          <td class="success">{{round($pMA+$sMA+$tMA,2)}}%</td>
          <td class="danger">{{round(($tiExMA/$total)*100,2)}}%</td>
          <td>{{round((($tiExMA+$tiPCMA+$tiSCMA+$tiTCMA)/$total)*100,2)}}%</td>
         </tr>

          <tr>
          <td>SACC_Industrial</td> 
          <td class="success">{{round($pIn=(($tiPCIn/$total)*100),2)}}%</td>
          <td class="success">{{round($sIn=(($tiSCIn/$total)*100),2)}}%</td>
          <td class="warning">{{round($tIn=(($tiTCIn/$total)*100),2)}}%</td>
          <td class="success">{{round($pIn+$sIn,2)}}%</td>
          <td class="success">{{round($pIn+$sIn+$tIn,2)}}%</td>
          <td class="danger">{{round(($tiExIn/$total)*100,2)}}%</td>
          <td>{{round((($tiExIn+$tiPCIn+$tiSCIn+$tiTCIn)/$total)*100,2)}}%</td>
         </tr>

         <tr>
          <td>SACC_Electrica</td> 
          <td class="success">{{round($pEl=(($tiPCEl/$total)*100),2)}}%</td>
          <td class="success">{{round($sEl=(($tiSCEl/$total)*100),2)}}%</td>
          <td class="warning">{{round($tEl=(($tiTCEl/$total)*100),2)}}%</td>
          <td class="success">{{round($pEl+$sEl,2)}}%</td>
          <td class="success">{{round($pEl+$sEl+$tEl,2)}}%</td>
          <td class="danger">{{round(($tiExEl/$total)*100,2)}}%</td>
          <td>{{round((($tiExEl+$tiPCEl+$tiSCEl+$tiTCEl)/$total)*100,2)}}%</td>
         </tr>

        <tr>
          <td>SACC_Computacion</td> 
          <td class="success">{{round($pCOM=(($tiPCCOM/$total)*100),2)}}%</td>
          <td class="success">{{round($sCOM=(($tiSCCOM/$total)*100),2)}}%</td>
          <td class="warning">{{round($tCOM=(($tiTCCOM/$total)*100),2)}}%</td>
          <td class="success">{{round($pCOM+$sCOM,2)}}%</td>
          <td class="success">{{round($pCOM+$sCOM+$tCOM,2)}}%</td>
          <td class="danger">{{round(($tiExCOM/$total)*100,2)}}%</td>
          <td>{{round((($tiExCOM+$tiPCCOM+$tiSCCOM+$tiTCCOM)/$total)*100,2)}}%</td>
        </tr>

        <tr>
          <td>LGAC Bioquimica</td> 
          <td class="success">{{round($pBi=(($tiPCBi/$total)*100),2)}}%</td>
          <td class="success">{{round($sBi=(($tiSCBi/$total)*100),2)}}%</td>
          <td class="warning">{{round($tBi=(($tiTCBi/$total)*100),2)}}%</td>
          <td class="success">{{round($pBi+$sBi,2)}}%</td>
          <td class="success">{{round($pBi+$sBi+$tBi,2)}}%</td>
          <td class="danger">{{round(($tiExBi/$total)*100,2)}}%</td>
          <td>{{round((($tiExBi+$tiPCBi+$tiSCBi+$tiTCBi)/$total)*100,2)}}%</td>
        </tr>

        <tr>
          <td>LGAC Corrosion Y Materiales</td> 
          <td class="success">{{round($pCor=(($tiPCCor/$total)*100),2)}}%</td>
          <td class="success">{{round($sCor=(($tiSCCor/$total)*100),2)}}%</td>
          <td class="warning">{{round($tCor=(($tiTCCor/$total)*100),2)}}%</td>
          <td class="success">{{round($pCor+$sCor,2)}}%</td>
          <td class="success">{{round($pCor+$sCor+$tCor,2)}}%</td>
          <td class="danger">{{round(($tiExCor/$total)*100,2)}}%</td>
          <td>{{round((($tiExCor+$tiPCCor+$tiSCCor+$tiTCCor)/$total)*100,2)}}%</td>
        </tr>


        <tr>
          <td>LGAC Contam. Ambiental</td> 
         <td class="success">{{round($pCA=(($tiPCCA/$total)*100),2)}}%</td>
          <td class="success">{{round($sCA=(($tiSCCA/$total)*100),2)}}%</td>
          <td class="warning">{{round($tCA=(($tiTCCA/$total)*100),2)}}%</td>
          <td class="success">{{round($pCA+$sCA,2)}}%</td>
          <td class="success">{{round($pCA+$sCA+$tCA,2)}}%</td>
          <td class="danger">{{round(($tiExCA/$total)*100,2)}}%</td>
          <td>{{round((($tiExCA+$tiPCCA+$tiSCCA+$tiTCCA)/$total)*100,2)}}%</td>
         </tr>

         <tr>
          <td>LGAC Ing.Software y simulacion social</td> 
          <td class="success">{{round($pISS=(($tiPCISS/$total)*100),2)}}%</td>
          <td class="success">{{round($sISS=(($tiSCISS/$total)*100),2)}}%</td>
          <td class="warning">{{round($tISS=(($tiTCISS/$total)*100),2)}}%</td>
          <td class="success">{{round($pISS+$sISS,2)}}%</td>
          <td class="success">{{round($pISS+$sISS+$tISS,2)}}%</td>
          <td class="danger">{{round(($tiExISS/$total)*100,2)}}%</td>
          <td>{{round((($tiExISS+$tiPCISS+$tiSCISS+$tiTCISS)/$total)*100,2)}}%</td>
         </tr>

          <tr>
          <td>LGAC Computo movil y oblicuo</td> 
          <td class="success">{{round($pCU=(($tiPCCU/$total)*100),2)}}%</td>
          <td class="success">{{round($sCU=(($tiSCCU/$total)*100),2)}}%</td>
          <td class="warning">{{round($tCU=(($tiTCCU/$total)*100),2)}}%</td>
          <td class="success">{{round($pCU+$sCU,2)}}%</td>
          <td class="success">{{round($pCU+$sCU+$tCU,2)}}%</td>
          <td class="danger">{{round(($tiExCU/$total)*100,2)}}%</td>
          <td>{{round((($tiExCU+$tiPCCU+$tiSCCU+$tiTCCU)/$total)*100,2)}}%</td>
         </tr>

         <tr>
          <td>LGAC Sistemas electricos y electronicos</td> 
          <td class="success">{{round($pSEE=(($tiPCSEE/$total)*100),2)}}%</td>
          <td class="success">{{round($sSEE=(($tiSCSEE/$total)*100),2)}}%</td>
          <td class="warning">{{round($tSEE=(($tiTCSEE/$total)*100),2)}}%</td>
          <td class="success">{{round($pSEE+$sSEE,2)}}%</td>
          <td class="success">{{round($pSEE+$sSEE+$tSEE,2)}}%</td>
          <td class="danger">{{round(($tiExSEE/$total)*100,2)}}%</td>
          <td>{{round((($tiExSEE+$tiPCSEE+$tiSCSEE+$tiTCSEE)/$total)*100,2)}}%</td>
         </tr>
         <tr>
          <td>LGAC Manufactura produccion y calidad</td> 
          <td class="success">{{round($pMPA=(($tiPCMPA/$total)*100),2)}}%</td>
          <td class="success">{{round($sMPA=(($tiSCMPA/$total)*100),2)}}%</td>
          <td class="warning">{{round($tMPA=(($tiTCMPA/$total)*100),2)}}%</td>
          <td class="success">{{round($pMPA+$sMPA,2)}}%</td>
          <td class="success">{{round($pMPA+$sMPA+$tMPA,2)}}%</td>
          <td class="danger">{{round(($tiExMPA/$total)*100,2)}}%</td>
          <td>{{round((($tiExMPA+$tiPCMPA+$tiSCMPA+$tiTCMPA)/$total)*100,2)}}%</td>
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



 