   <?php
         $num;
          $ETQu;$ET2Qu;$ET3Qu;$ET12;  $ETMA;$ET2MA;$ET3MA; $ETIn;$ET2In;$ET3In;  $ETEl;$ET2El;$ET3El; $ETBi;$ET2Bi;$ET3Bi; $ETCor;$ET2Cor;$ET3Cor; 
          $ETCA;$ET2CA;$ET3CA;  $ETISS;$ET2ISS;$ET3ISS; $ETCU;$ET2CU;$ET3CU; $ETSEE;$ET2SEE;$ET3SEE; $ETMPA;$ET2MPA;$ET3MPA; $ETCOM;$ET2COM;$ET3COM;

          if($tiPCQuD==0 or $egQuD ==0)$ETQuD=0;else $ETQuD=($tiPCQuD/$egQuD)*100; if($tiSCQuD==0 or $egQuD ==0)$ET2QuD=0;else $ET2QuD=($tiSCQuD/$egQuD)*100;if($tiTCQuD==0 or $egQuD ==0)$ET3QuD=0;else $ET3QuD=($tiTCQuD/$egQuD)*100;

          if($tiPCMAD==0 or $egMAD ==0)$ETMAD=0;else $ETMAD=($tiPCMAD/$egMAD)*100; if($tiSCMAD==0 or $egMAD ==0)$ET2MAD=0;else $ET2MAD=($tiSCMAD/$egMAD)*100;if($tiTCMAD==0 or $egMAD ==0)$ET3MAD=0;else $ET3MAD=($tiTCMAD/$egMAD)*100;


          if($tiPCInD==0 or $egInD ==0)$ETInD=0;else $ETInD=($tiPCInD/$egInD)*100; if($tiSCInD==0 or $egInD ==0)$ET2InD=0;else $ET2InD=($tiSCInD/$egInD)*100;if($tiTCInD==0 or $egInD ==0)$ET3InD=0;else $ET3InD=($tiTCInD/$egInD)*100;


          if($tiPCElD==0 or $egElD ==0)$ETlD=0;else $ETlD=($tiPCElD/$egElD)*100; if($tiSCElD==0 or $egElD ==0)$ET2ElD=0;else $ET2ElD=($tiSCElD/$egElD)*100;if($tiTCElD==0 or $egElD ==0)$ET3ElD=0;else $ET3ElD=($tiTCElD/$egElD)*100;

          if($tiPCBiD==0 or $egBiD ==0)$ETBiD=0;else $ETBiD=($tiPCBiD/$egBiD)*100; if($tiSCBiD==0 or $egBiD ==0)$ET2BiD=0;else $ET2BiD=($tiSCBiD/$egBiD)*100;if($tiTCBiD==0 or $egBiD ==0)$ET3BiD=0;else $ET3BiD=($tiTCBiD/$egBiD)*100;

          if($tiPCCorD==0 or $egCorD ==0)$ETCorD=0;else $ETCorD=($tiPCCorD/$egCorD)*100; if($tiSCCorD==0 or $egCorD ==0)$ET2CorD=0;else $ET2CorD=($tiSCCorD/$egCorD)*100;if($tiTCCorD==0 or $egCorD ==0)$ET3CorD=0;else $ET3CorD=($tiTCCorD/$egCorD)*100;

          if($tiPCCAD==0 or $egCAD ==0)$ETCAD=0;else $ETCAD=($tiPCCAD/$egCAD)*100; if($tiSCCAD==0 or $egCAD ==0)$ET2CAD=0;else $ET2CAD=($tiSCCAD/$egCAD)*100;if($tiTCCAD==0 or $egCAD ==0)$ET3CAD=0;else $ET3CAD=($tiTCCAD/$egCAD)*100;

          if($tiPCISSD==0 or $egISSD ==0)$ETISSD=0;else $ETISSD=($tiPCISSD/$egISSD)*100; if($tiSCISSD==0 or $egISSD ==0)$ET2ISSD=0;else $ET2ISSD=($tiSCISSD/$egISSD)*100;if($tiTCISSD==0 or $egISSD ==0)$ET3ISSD=0;else $ET3ISSD=($tiTCISSD/$egISSD)*100;

          if($tiPCCUD==0 or $egCUD ==0)$ETCUD=0;else $ETCUD=($tiPCCUD/$egCUD)*100; if($tiSCCUD==0 or $egCUD ==0)$ET2CUD=0;else $ET2CUD=($tiSCCUD/$egCUD)*100;if($tiTCCUD==0 or $egCUD ==0)$ET3CUD=0;else $ET3CUD=($tiTCCUD/$egCUD)*100;

          if($tiPCSEED==0 or $egSEED ==0)$ETSEED=0;else $ETSEED=($tiPCSEED/$egSEED)*100; if($tiSCSEED==0 or $egSEED ==0)$ET2SEED=0;else $ET2SEED=($tiSCSEED/$egSEED)*100;if($tiTCSEED==0 or $egSEED ==0)$ET3SEED=0;else $ET3SEED=($tiTCSEED/$egSEED)*100;

          if($tiPCMPAD==0 or $egMPAD ==0)$ETMPAD=0;else $ETMPAD=($tiPCMPAD/$egMPAD)*100; if($tiSCMPAD==0 or $egMPAD ==0)$ET2MPAD=0;else $ET2MPAD=($tiSCMPAD/$egMPAD)*100;if($tiTCMPAD==0 or $egMPAD ==0)$ET3MPAD=0;else $ET3MPAD=($tiTCMPAD/$egMPAD)*100;

          if($tiPCCOMD==0 or $egCOMD ==0)$ETCOMD=0;else $ETCOMD=($tiPCCOMD/$egCOMD)*100; if($tiSCCOMD==0 or $egCOMD ==0)$ET2COMD=0;else $ET2COMD=($tiSCCOMD/$egCOMD)*100;if($tiTCCOMD==0 or $egCOMD ==0)$ET3COMD=0;else $ET3COMD=($tiTCCOMD/$egCOMD)*100;

          ?>
 <!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <center><h3>Indicadores Historicos de Eficiencia Terminal del programa MyDCI</h3></center>
    <center><h3><u>DOCTORADO</u></h3></center>

    <table class="table table-striped table-bordered "   >
    <tr >
      <th class="info"></th>
      <th class="success">Efici.Terminal Pnpc_Corte_1</th>
      <th class="success">Efici.Terminal Pnpc_Corte_2</th>
      <th class="warning">Efici.Terminal Pnpc_Corte_3</th>
      <th class="warning">Efici.Terminal Pnpc_Cor_12</th>
      <th class="warning">Efici.Terminal Pnpc_Cor_123</th>
      <th class="warning">Extemp.</th>
      <th class="warning">Efi. TerminalGlobal</th>
    </tr>
        <tr>
          <td>SACC_Quimica</td> 
          <td>{{round($ETQuD,2)}}</td>
          <td>{{round($ET2QuD,2)}}</td>
          <td>{{round($ET3QuD,2)}}</td>
          <td>{{round($ETQuD+$ET2QuD,2)}}</td>
          <td>{{round($ETQuD+$ET2QuD+$ET3QuD,2)}}</td>
          <td>falta</td>
          <td>falta</td>
        </tr>

        <tr>
          <td>SACC_Medio.Amb</td> 
          <td>{{round($ETMAD,2)}}</td>
          <td>{{round($ET2MAD,2)}}</td>
          <td>{{round($ET3MAD,2)}}</td>
          <td>{{round($ETMAD+$ET2MAD,2)}}</td>
          <td>{{round($ETMAD+$ET2MAD+$ET3MAD,2)}}</td>
          <td>falta</td>
          <td>falta</td>
         </tr>

          <tr>
          <td>SACC_Industrial</td> 
          <td>{{round($ETInD,2)}}</td>
          <td>{{round($ET2InD,2)}}</td>
          <td>{{round($ET3InD,2)}}</td>
          <td>{{round($ETInD+$ET2InD,2)}}</td>
          <td>{{round($ETInD+$ET2InD+$ET3InD,2)}}</td>
          <td>falta</td>
          <td>falta</td>
         </tr>

         <tr>
          <td>SACC_Electrica</td> 
          <td>{{round($ETlD,2)}}</td>
          <td>{{round($ET2ElD,2)}}</td>
          <td>{{round($ET3ElD,2)}}</td>
          <td>{{round($ETlD+$ET2ElD,2)}}</td>
          <td>{{round($ETlD+$ET2ElD+$ET3ElD,2)}}</td>
          <td>falta</td>
          <td>falta</td>
         </tr>

        <tr>
          <td>SACC_Computacion</td> 
          <<td>{{round($ETCOMD,2)}}</td>
          <td>{{round($ET2COMD,2)}}</td>
          <td>{{round($ET3COMD,2)}}</td>
          <td>{{round($ETCOMD+$ET2COMD,2)}}</td>
          <td>{{round($ETCOMD+$ET2COMD+$ET3COMD,2)}}</td>
          <td>falta</td>
          <td>falta</td>
        </tr>

        <tr>
          <td>LGAC Bioquimica</td> 
          <td>{{round($ETBiD,2)}}</td>
          <td>{{round($ET2BiD,2)}}</td>
          <td>{{round($ET3BiD,2)}}</td>
          <td>{{round($ETBiD+$ET2BiD,2)}}</td>
          <td>{{round($ETBiD+$ET2BiD+$ET3BiD,2)}}</td>
          <td>falta</td>
          <td>falta</td>
        </tr>

        <tr>
          <td>LGAC Corrosion Y Materiales</td> 
          <td>{{round($ETCorD,2)}}</td>
          <td>{{round($ET2CorD,2)}}</td>
          <td>{{round($ET3CorD,2)}}</td>
          <td>{{round($ETCorD+$ET2CorD,2)}}</td>
          <td>{{round($ETCorD+$ET2CorD+$ET3CorD,2)}}</td>
          <td>falta</td>
          <td>falta</td>
        </tr>


        <tr>
          <td>LGAC Contam. Ambiental</td> 
          <td>{{round($ETCAD,2)}}</td>
          <td>{{round($ET2CAD,2)}}</td>
          <td>{{round($ET3CAD,2)}}</td>
          <td>{{round($ETCAD+$ET2CAD,2)}}</td>
          <td>{{round($ETCAD+$ET2CAD+$ET3CAD,2)}}</td>
          <td>falta</td>
          <td>falta</td>
         </tr>
      
        <tr>
          <td>LGAC Ing.Software y simulacion social</td> 
          <td>{{round($ETISSD,2)}}</td>
          <td>{{round($ET2ISSD,2)}}</td>
          <td>{{round($ET3ISSD,2)}}</td>
          <td>{{round($ETISSD+$ET2ISSD,2)}}</td>
          <td>{{round($ETISSD+$ET2ISSD+$ET3ISSD,2)}}</td>
          <td>falta</td>
          <td>falta</td>
        </tr>

        <tr>
          <td>LGAC Computo movil y oblicuo</td> 
          <td>{{round($ETCUD,2)}}</td>
          <td>{{round($ET2CUD,2)}}</td>
          <td>{{round($ET3CUD,2)}}</td>
          <td>{{round($ETCUD+$ET2CUD,2)}}</td>
          <td>{{round($ETCUD+$ET2CUD+$ET3CUD,2)}}</td>
          <td>falta</td>
          <td>falta</td>
         </tr>

         <tr>
            <td>LGAC Sistemas electri._y_electronicos</td> 
            <td>{{round($ETSEED,2)}}</td>
            <td>{{round($ET2SEED,2)}}</td>
            <td>{{round($ET3SEED,2)}}</td>
            <td>{{round($ETSEED+$ET2SEED,2)}}</td>
            <td>{{round($ETSEED+$ET2SEED+$ET3SEED,2)}}</td>
            <td>falta</td>
            <td>falta</td>
         </tr>

          <tr>
            <td>Manufactura produccion_y_calidad</td> 
            <td>{{round($ETMPAD,2)}}</td>
            <td>{{round($ET2MPAD,2)}}</td>
            <td>{{round($ET3MPAD,2)}}</td>
            <td>{{round($ETMPAD+$ET2MPAD,2)}}</td>
            <td>{{round($ETMPAD+$ET2MPAD+$ET3MPAD,2)}}</td>
            <td>falta</td>
            <td>falta</td>
         <tr>

          </table> 

       {{-- <table class="table table-striped table-bordered "   >
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
        </tr> --}}
        {{-- <tr>
          <td>SACC_Quimica</td> 
         
          <td>{{$egQu}}</td>
          <td>{{$baQu}}</td>
          <td class="danger">falta</td>
          <td class="success">{{$tiPCQu}}</td>
          <td class="success">{{$tiSCQu}}</td>
          <td class="warning">{{$tiTCQu}}</td>
          <td>{{$ViQu}}</td>
          <td>{{$TeQu}}</td>
        </tr>

        <tr>
          <td>SACC_Medio.Amb</td> 
          <td>{{$egMA}}</td>
          <td>{{$baMA}}</td>
          <td class="danger">falta</td>
          <td class="success">{{$tiPCMA}}</td>
          <td class="success">{{$tiSCMA}}</td>
          <td class="warning">{{$tiTCMA}}</td>
          <td>{{$ViMA}}</td>
          <td>{{$TeMA}}</td>
         </tr>

          <tr>
          <td>SACC_Industrial</td> 
          <td>{{$egIn}}</td>
          <td>{{$baIn}}</td>
          <td class="danger">falta</td>
          <td class="success">{{$tiPCIn}}</td>
          <td class="success">{{$tiSCIn}}</td>
          <td class="warning">{{$tiTCIn}}</td>
          <td>{{$ViIn}}</td>
          <td>{{$TeIn}}</td>
         </tr>

         <tr>
          <td>SACC_Electrica</td> 
          <td>{{$egEl}}</td>
          <td>{{$baEl}}</td>
          <td class="danger">falta</td>
          <td class="success">{{$tiPCEl}}</td>
          <td class="success">{{$tiSCEl}}</td>
          <td class="warning">{{$tiTCEl}}</td>
          <td>{{$ViEl}}</td>
          <td>{{$TeEl}}</td>
         </tr>

        <tr>
          <td>SACC_Computacion</td> 
          <td>{{$egCOM}}</td>
          <td>{{$baCOM}}</td>
          <td class="danger">falta</td>
          <td class="success">{{$tiPCCOM}}</td>
          <td class="success">{{$tiSCCOM}}</td>
          <td class="warning">{{$tiTCCOM}}</td>
          <td>{{$ViCOM}}</td>
          <td>{{$TeCOM}}</td>
        </tr>

        <tr>
          <td>LGAC Bioquimica</td> 
          <td>{{$egBi}}</td>
          <td>{{$baBi}}</td>
          <td class="danger">falta</td>
          <td class="success">{{$tiPCBi}}</td>
          <td class="success">{{$tiSCBi}}</td>
          <td class="warning">{{$tiTCBi}}</td>
          <td>{{$ViBi}}</td>
          <td>{{$TeBi}}</td>
        </tr>

        <tr>
          <td>LGAC Corrosion Y Materiales</td> 
          <td>{{$egCor}}</td>
          <td>{{$baCor}}</td>
          <td class="danger">falta</td>
          <td class="success">{{$tiPCCor}}</td>
          <td class="success">{{$tiSCCor}}</td>
          <td class="warning">{{$tiTCCor}}</td>
          <td>{{$ViCor}}</td>
          <td>{{$TeCor}}</td>
        </tr>


        <tr>
          <td>LGAC Contam. Ambiental</td> 
          <td>{{$egCA}}</td>
          <td>{{$baCA}}</td>
          <td class="danger">falta</td>
          <td class="success">{{$tiPCCA}}</td>
          <td class="success">{{$tiSCCA}}</td>
          <td class="warning">{{$tiTCCA}}</td>
          <td>{{$ViCA}}</td>
          <td>{{$TeCA}}</td>
         </tr>
      </table>   
       
     --}}
  
            
  </body>
</html>

<style>
#id{  
 position: relative;
  top:-15%;
  left: 20px;
}
</style>



 