  <?php
         $num;
          $ETQu;$ET2Qu;$ET3Qu;$ET12;  $ETMA;$ET2MA;$ET3MA; $ETIn;$ET2In;$ET3In;  $ETEl;$ET2El;$ET3El;   $ETCOM;$ET2COM;$ET3COM;  $ETBi;$ET2Bi;$ET3Bi; $ETCor;$ET2Cor;$ET3Cor; 
          $ETCA;$ET2CA;$ET3CA;  $ETISS;$ET2ISS;$ET3ISS; $ETCU;$ET2CU;$ET3CU; $ETSEE;$ET2SEE;$ET3SEE; $ETMPA;$ET2MPA;$ET3MPA;

          if($tiPCQu==0 or $egQu ==0)$ETQu=0;else $ETQu=($tiPCQu/$egQu)*100; if($tiSCQu==0 or $egQu ==0)$ET2Qu=0;else $ET2Qu=($tiSCQu/$egQu)*100;if($tiTCQu==0 or $egQu ==0)$ET3Qu=0;else $ET3Qu=($tiTCQu/$egQu)*100;

          if($tiPCMA==0 or $egMA ==0)$ETMA=0;else $ETMA=($tiPCMA/$egMA)*100; if($tiSCMA==0 or $egMA ==0)$ET2MA=0;else $ET2MA=($tiSCMA/$egMA)*100;if($tiTCMA==0 or $egMA ==0)$ET3MA=0;else $ET3MA=($tiTCMA/$egMA)*100;


          if($tiPCIn==0 or $egIn ==0)$ETIn=0;else $ETIn=($tiPCIn/$egIn)*100; if($tiSCIn==0 or $egIn ==0)$ET2In=0;else $ET2In=($tiSCIn/$egIn)*100;if($tiTCIn==0 or $egIn ==0)$ET3In=0;else $ET3In=($tiTCIn/$egIn)*100;


          if($tiPCEl==0 or $egEl ==0)$ETEl=0;else $ETEl=($tiPCEl/$egEl)*100; if($tiSCEl==0 or $egEl ==0)$ET2El=0;else $ET2El=($tiSCEl/$egEl)*100;if($tiTCEl==0 or $egEl ==0)$ET3El=0;else $ET3El=($tiTCEl/$egEl)*100;

          if($tiPCCOM==0 or $egCOM ==0)$ETCOM=0;else $ETCOM=($tiPCCOM/$egCOM)*100; if($tiSCCOM==0 or $egCOM ==0)$ET2COM=0;else $ET2COM=($tiSCCOM/$egCOM)*100;if($tiTCCOM==0 or $egCOM ==0)$ET3COM=0;else $ET3COM=($tiTCCOM/$egCOM)*100;

          if($tiPCBi==0 or $egBi ==0)$ETBi=0;else $ETBi=($tiPCBi/$egBi)*100; if($tiSCBi==0 or $egBi ==0)$ET2Bi=0;else $ET2Bi=($tiSCBi/$egBi)*100;if($tiTCBi==0 or $egBi ==0)$ET3Bi=0;else $ET3Bi=($tiTCBi/$egBi)*100;

          if($tiPCCor==0 or $egCor ==0)$ETCor=0;else $ETCor=($tiPCCor/$egCor)*100; if($tiSCCor==0 or $egCor ==0)$ET2Cor=0;else $ET2Cor=($tiSCCor/$egCor)*100;if($tiTCCor==0 or $egCor ==0)$ET3Cor=0;else $ET3Cor=($tiTCCor/$egCor)*100;

          if($tiPCCA==0 or $egCA ==0)$ETCA=0;else $ETCA=($tiPCCA/$egCA)*100; if($tiSCCA==0 or $egCA ==0)$ET2CA=0;else $ET2CA=($tiSCCA/$egCA)*100;if($tiTCCA==0 or $egCA ==0)$ET3CA=0;else $ET3CA=($tiTCCA/$egCA)*100;

          if($tiPCISS==0 or $egISS ==0)$ETISS=0;else $ETISS=($tiPCISS/$egISS)*100; if($tiSCISS==0 or $egISS ==0)$ET2ISS=0;else $ET2ISS=($tiSCISS/$egISS)*100;if($tiTCISS==0 or $egISS ==0)$ET3ISS=0;else $ET3ISS=($tiTCISS/$egISS)*100;

          if($tiPCCU==0 or $egCU ==0)$ETCU=0;else $ETCU=($tiPCCU/$egCU)*100; if($tiSCCU==0 or $egCU ==0)$ET2CU=0;else $ET2CU=($tiSCCU/$egCU)*100;if($tiTCCU==0 or $egCU ==0)$ET3CU=0;else $ET3CU=($tiTCCU/$egCU)*100;

          if($tiPCSEE==0 or $egSEE ==0)$ETSEE=0;else $ETSEE=($tiPCSEE/$egSEE)*100; if($tiSCSEE==0 or $egSEE ==0)$ET2SEE=0;else $ET2SEE=($tiSCSEE/$egSEE)*100;if($tiTCSEE==0 or $egSEE ==0)$ET3SEE=0;else $ET3SEE=($tiTCSEE/$egSEE)*100;

          if($tiPCMPA==0 or $egMPA ==0)$ETMPA=0;else $ETMPA=($tiPCMPA/$egMPA)*100; if($tiSCMPA==0 or $egMPA ==0)$ET2MPA=0;else $ET2MPA=($tiSCMPA/$egMPA)*100;if($tiTCMPA==0 or $egMPA ==0)$ET3MPA=0;else $ET3MPA=($tiTCMPA/$egMPA)*100;

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

        <tr>
          <td>LGAC Ing.Software y simulacion social</td> 
          <td>{{$egISS}}</td>
          <td>{{$baISS}}</td>
          <td class="danger">falta</td>
          <td class="success">{{$tiPCISS}}</td>
          <td class="success">{{$tiSCISS}}</td>
          <td class="warning">{{$tiTCISS}}</td>
          <td>{{$ViISS}}</td>
          <td>{{$TeISS}}</td>
         </tr>

         <tr>
          <td>LGAC Computo movil y oblicuo</td> 
          <td>{{$egCU}}</td>
          <td>{{$baCU}}</td>
          <td class="danger">falta</td>
          <td class="success">{{$tiPCCU}}</td>
          <td class="success">{{$tiSCCU}}</td>
          <td class="warning">{{$tiTCCU}}</td>
          <td>{{$ViCU}}</td>
          <td>{{$TeCU}}</td>
         </tr>

         <tr>
          <td>LGAC Sistemas electricos y electronicos</td> 
          <td>{{$egSEE}}</td>
          <td>{{$baSEE}}</td>
          <td class="danger">falta</td>
          <td class="success">{{$tiPCSEE}}</td>
          <td class="success">{{$tiSCSEE}}</td>
          <td class="warning">{{$tiTCSEE}}</td>
          <td>{{$ViSEE}}</td>
          <td>{{$TeSEE}}</td>
         </tr>

         <tr>
          <td>LGAC Manufactura produccion y calidad</td> 
          <td>{{$egMPA}}</td>
          <td>{{$baMPA}}</td>
          <td class="danger">falta</td>
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
      <th class="success">PNPC_Corte1 % </th>
      <th class="success">PNPC_Corte2 % </th>
      <th class="warning">PNPC_Corte3 % </th>
      <th class="warning">PNPC_Cor12 % </th>
      <th class="warning">PNPC_Cor123 %</th>
      <th class="warning">Extem.</th>
      <th class="warning">Ter Global</th>
    </tr>
        <tr>
          <td>SACC_Quimica</td> 
          <td>{{round($ETQu,2)}}</td>
          <td>{{round($ET2Qu,2)}}</td>
          <td>{{round($ET3Qu,2)}}</td>
          <td>{{round($ETQu+$ET2Qu,2)}}</td>
          <td>{{round($ETQu+$ET2Qu+$ET3Qu,2)}}</td>
          <td>falta</td>
          <td>falta</td> 
        </tr>

        <tr>
          <td>SACC_Medio.Amb</td> 
          <td>{{round($ETMA,2)}}</td>
          <td>{{round($ET2MA,2)}}</td>
          <td>{{round($ET3MA,2)}}</td>
          <td>{{round($ETMA+$ET2MA,2)}}</td>
          <td>{{round($ETMA+$ET2MA+$ET3MA,2)}}</td>
          <td>falta</td>
          <td>falta</td>
         </tr>

          <tr>
          <td>SACC_Industrial</td> 
          <td>{{round($ETIn,2)}}</td>
          <td>{{round($ET2In,2)}}</td>
          <td>{{round($ET3In,2)}}</td>
          <td>{{round($ETIn+$ET2In,2)}}</td>
          <td>{{round($ETIn+$ET2In+$ET3In,2)}}</td>
          <td>falta</td>
          <td>falta</td>
         </tr>

         <tr>
          <td>SACC_Electrica</td> 
          <td>{{round($ETEl,2)}}</td>
          <td>{{round($ET2El,2)}}</td>
          <td>{{round($ET3El,2)}}</td>
          <td>{{round($ETEl+$ET2El,2)}}</td>
          <td>{{round($ETEl+$ET2El+$ET3El,2)}}</td>
          <td>falta</td>
          <td>falta</td>
         </tr>

        <tr>
          <td>SACC_Computacion</td> 
          <td>{{round($ETCOM,2)}}</td>
          <td>{{round($ET2COM,2)}}</td>
          <td>{{round($ET3COM,2)}}</td>
          <td>{{round($ETCOM+$ET2COM,2)}}</td>
          <td>{{round($ETCOM+$ET2COM+$ET3COM,2)}}</td>
          <td>falta</td>
          <td>falta</td>
        </tr>

        <tr>
          <td>LGAC Bioquimica</td> 
          <td>{{round($ETBi,2)}}</td>
          <td>{{round($ET2Bi,2)}}</td>
          <td>{{round($ET3Bi,2)}}</td>
          <td>{{round($ETBi+$ET2Bi,2)}}</td>
          <td>{{round($ETBi+$ET2Bi+$ET3Bi,2)}}</td>
          <td>falta</td>
          <td>falta</td>
        </tr>

        <tr>
          <td>LGAC Corrosion Y Materiales</td> 
          <td>{{round($ETCor,2)}}</td>
          <td>{{round($ET2Cor,2)}}</td>
          <td>{{round($ET3Cor,2)}}</td>
          <td>{{round($ETCor+$ET2Cor,2)}}</td>
          <td>{{round($ETCor+$ET2Cor+$ET3Cor,2)}}</td>
          <td>falta</td>
          <td>falta</td>
        </tr>


        <tr>
          <td>LGAC Contam. Ambiental</td> 
          <td>{{round($ETCA,2)}}</td>
          <td>{{round($ET2CA,2)}}</td>
          <td>{{round($ET3CA,2)}}</td>
          <td>{{round($ETCA+$ET2CA,2)}}</td>
          <td>{{round($ETCA+$ET2CA+$ET3CA,2)}}</td>
          <td>falta</td>
          <td>falta</td>
         </tr>

         <tr>
          <td>LGAC Ing.Software y simulacion social</td> 
          <td>{{round($ETISS,2)}}</td>
          <td>{{round($ET2ISS,2)}}</td>
          <td>{{round($ET3ISS,2)}}</td>
          <td>{{round($ETISS+$ET2ISS,2)}}</td>
          <td>{{round($ETISS+$ET2ISS+$ET3ISS,2)}}</td>
          <td>falta</td>
          <td>falta</td>
         </tr>

          <tr>
          <td>LGAC Computo movil y oblicuo</td> 
          <td>{{round($ETCU,2)}}</td>
          <td>{{round($ET2CU,2)}}</td>
          <td>{{round($ET3CU,2)}}</td>
          <td>{{round($ETCU+$ET2CU,2)}}</td>
          <td>{{round($ETCU+$ET2CU+$ET3CU,2)}}</td>
          <td>falta</td>
          <td>falta</td>
         </tr>

         <tr>
          <td>LGAC Sistemas electricos y electronicos</td> 
          <td>{{round($ETSEE,2)}}</td>
          <td>{{round($ET2SEE,2)}}</td>
          <td>{{round($ET3SEE,2)}}</td>
          <td>{{round($ETSEE+$ET2SEE,2)}}</td>
          <td>{{round($ETSEE+$ET2SEE+$ET3SEE,2)}}</td>
          <td>falta</td>
          <td>falta</td>
         </tr>
         <tr>
          <td>LGAC Manufactura produccion y calidad</td> 
          <td>{{round($ETMPA,2)}}</td>
          <td>{{round($ET2MPA,2)}}</td>
          <td>{{round($ET3MPA,2)}}</td>
          <td>{{round($ETMPA+$ET2MPA,2)}}</td>
          <td>{{round($ETMPA+$ET2MPA+$ET3MPA,2)}}</td>
          <td>falta</td>
          <td>falta</td>
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



 