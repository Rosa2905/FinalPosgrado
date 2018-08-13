 <?php
         $num;
          $ETQu;$ET2Qu;$ET3Qu;$ET12;  $ETMA;$ET2MA;$ET3MA; $ETIn;$ET2In;$ET3In;  $ETEl;$ET2El;$ET3El; $ETBi;$ET2Bi;$ET3Bi; $ETCor;$ET2Cor;$ET3Cor; 
          $ETCA;$ET2CA;$ET3CA;  $ETISS;$ET2ISS;$ET3ISS; $ETCU;$ET2CU;$ET3CU; $ETSEE;$ET2SEE;$ET3SEE; $ETMPA;$ET2MPA;$ET3MPA; $ETCOM;$ET2COM;$ET3COM;

          if($tiPCQu==0 or $egQu ==0)$ETQu=0;else $ETQu=($tiPCQu/$egQu)*100; if($tiSCQu==0 or $egQu ==0)$ET2Qu=0;else $ET2Qu=($tiSCQu/$egQu)*100;if($tiTCQu==0 or $egQu ==0)$ET3Qu=0;else $ET3Qu=($tiTCQu/$egQu)*100;

          if($tiPCMA==0 or $egMA ==0)$ETMA=0;else $ETMA=($tiPCMA/$egMA)*100; if($tiSCMA==0 or $egMA ==0)$ET2MA=0;else $ET2MA=($tiSCMA/$egMA)*100;if($tiTCMA==0 or $egMA ==0)$ET3MA=0;else $ET3MA=($tiTCMA/$egMA)*100;


          if($tiPCIn==0 or $egIn ==0)$ETIn=0;else $ETIn=($tiPCIn/$egIn)*100; if($tiSCIn==0 or $egIn ==0)$ET2In=0;else $ET2In=($tiSCIn/$egIn)*100;if($tiTCIn==0 or $egIn ==0)$ET3In=0;else $ET3In=($tiTCIn/$egIn)*100;


          if($tiPCEl==0 or $egEl ==0)$ETEl=0;else $ETEl=($tiPCEl/$egEl)*100; if($tiSCEl==0 or $egEl ==0)$ET2El=0;else $ET2El=($tiSCEl/$egEl)*100;if($tiTCEl==0 or $egEl ==0)$ET3El=0;else $ET3El=($tiTCEl/$egEl)*100;

          if($tiPCBi==0 or $egBi ==0)$ETBi=0;else $ETBi=($tiPCBi/$egBi)*100; if($tiSCBi==0 or $egBi ==0)$ET2Bi=0;else $ET2Bi=($tiSCBi/$egBi)*100;if($tiTCBi==0 or $egBi ==0)$ET3Bi=0;else $ET3Bi=($tiTCBi/$egBi)*100;

          if($tiPCCor==0 or $egCor ==0)$ETCor=0;else $ETCor=($tiPCCor/$egCor)*100; if($tiSCCor==0 or $egCor ==0)$ET2Cor=0;else $ET2Cor=($tiSCCor/$egCor)*100;if($tiTCCor==0 or $egCor ==0)$ET3Cor=0;else $ET3Cor=($tiTCCor/$egCor)*100;

          if($tiPCCA==0 or $egCA ==0)$ETCA=0;else $ETCA=($tiPCCA/$egCA)*100; if($tiSCCA==0 or $egCA ==0)$ET2CA=0;else $ET2CA=($tiSCCA/$egCA)*100;if($tiTCCA==0 or $egCA ==0)$ET3CA=0;else $ET3CA=($tiTCCA/$egCA)*100;

          if($tiPCISS==0 or $egISS ==0)$ETISS=0;else $ETISS=($tiPCISS/$egISS)*100; if($tiSCISS==0 or $egISS ==0)$ET2ISS=0;else $ET2ISS=($tiSCISS/$egISS)*100;if($tiTCISS==0 or $egISS ==0)$ET3ISS=0;else $ET3ISS=($tiTCISS/$egISS)*100;

          if($tiPCCU==0 or $egCU ==0)$ETCU=0;else $ETCU=($tiPCCU/$egCU)*100; if($tiSCCU==0 or $egCU ==0)$ET2CU=0;else $ET2CU=($tiSCCU/$egCU)*100;if($tiTCCU==0 or $egCU ==0)$ET3CU=0;else $ET3CU=($tiTCCU/$egCU)*100;

          if($tiPCSEE==0 or $egSEE ==0)$ETSEE=0;else $ETSEE=($tiPCSEE/$egSEE)*100; if($tiSCSEE==0 or $egSEE ==0)$ET2SEE=0;else $ET2SEE=($tiSCSEE/$egSEE)*100;if($tiTCSEE==0 or $egSEE ==0)$ET3SEE=0;else $ET3SEE=($tiTCSEE/$egSEE)*100;

          if($tiPCMPA==0 or $egMPA ==0)$ETMPA=0;else $ETMPA=($tiPCMPA/$egMPA)*100; if($tiSCMPA==0 or $egMPA ==0)$ET2MPA=0;else $ET2MPA=($tiSCMPA/$egMPA)*100;if($tiTCMPA==0 or $egMPA ==0)$ET3MPA=0;else $ET3MPA=($tiTCMPA/$egMPA)*100;

          if($tiPCCOM==0 or $egCOM ==0)$ETCOM=0;else $ETCOM=($tiPCCOM/$egCOM)*100; if($tiSCCOM==0 or $egCOM ==0)$ET2COM=0;else $ET2COM=($tiSCCOM/$egCOM)*100;if($tiTCCOM==0 or $egCOM ==0)$ET3COM=0;else $ET3COM=($tiTCCOM/$egCOM)*100;

          ?>

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

@extends('layouts.alumno')
@section('content')
<div class="topnav" >
  <a class="active" href="{{URL::action('AlumnoController@index')}}"><span class="  glyphicon glyphicon-circle-arrow-left "></span> Regresar</a>
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
        <table  id="letra" class="table table-striped table-bordered "   >
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
            <th class="success">Efici.Terminal Pnpc_Cor_12</th>
            <th class="success">Efici.Terminal Pnpc_Cor_123</th>
            <th class="warning">Extemp.</th>
            <th class="warning">Efi. TerminalGlobal</th>


          </tr>
          <tr >
        
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
          <td class="success">{{round($pq=(($PCT/$total)*100),2)}}%</td>
          <td class="success">{{round($sq=(($SCT/$total)*100),2)}}%</td>
          <td class="warning">{{round($tq=(($TCT/$total)*100),2)}}%</td>
          <td class="success">{{round($pq+$sq,2)}}%</td>
          <td>{{round($pq+$sq+$tq,2)}}</td>
          <td>{{round(($ExQu/$total)*100,2)}}%</td>
          <td>{{round((($ExQu+$PCT+$SCT+$TCT)/$total)*100,2)}}%</td>
         <tr>
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
          <td class="success">{{round($tiPCQu/$total,2)}}</td>
          <td class="success">{{round($tiSCQu/$total,2)}}</td>
          <td class="warning">{{round($tiTCQu/$total,2)}}</td>
          <td class="success">{{round($ETQu+$ET2Qu,2)}}</td>
          <td>{{round($ETQu+$ET2Qu+$ET3Qu,2)}}</td>
          <td>falta</td>
          <td>falta</td>
         <tr>
       
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
          <td>{{round($ETMA,2)}}</td>
          <td>{{round($ET2MA,2)}}</td>
          <td>{{round($ET3MA,2)}}</td>
          <td>{{round($ETMA+$ET2MA,2)}}</td>
          <td>{{round($ETMA+$ET2MA+$ET3MA,2)}}</td>
          <td>falta</td>
          <td>falta</td>
         <tr>

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
          <td>{{round($ETIn,2)}}</td>
          <td>{{round($ET2In,2)}}</td>
          <td>{{round($ET3In,2)}}</td>
          <td>{{round($ETIn+$ET2In,2)}}</td>
          <td>{{round($ETIn+$ET2In+$ET3In,2)}}</td>
          <td>falta</td>
          <td>falta</td>
         <tr>

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
          <td>{{round($ETEl,2)}}</td>
          <td>{{round($ET2El,2)}}</td>
          <td>{{round($ET3El,2)}}</td>
          <td>{{round($ETEl+$ET2El,2)}}</td>
          <td>{{round($ETEl+$ET2El+$ET3El,2)}}</td>
          <td>falta</td>
          <td>falta</td>
         <tr>

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
          <td>{{round($ETCOM,2)}}</td>
          <td>{{round($ET2COM,2)}}</td>
          <td>{{round($ET3COM,2)}}</td>
          <td>{{round($ETCOM+$ET2COM,2)}}</td>
          <td>{{round($ETCOM+$ET2COM+$ET3COM,2)}}</td>
          <td>falta</td>
          <td>falta</td>
        <tr><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
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
          <td>{{round($ETBi,2)}}</td>
          <td>{{round($ET2Bi,2)}}</td>
          <td>{{round($ET3Bi,2)}}</td>
          <td>{{round($ETBi+$ET2Bi,2)}}</td>
          <td>{{round($ETBi+$ET2Bi+$ET3Bi,2)}}</td>
          <td>falta</td>
          <td>falta</td>
         <tr>

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
          <td>{{round($ETCor,2)}}</td>
          <td>{{round($ET2Cor,2)}}</td>
          <td>{{round($ET3Cor,2)}}</td>
          <td>{{round($ETCor+$ET2Cor,2)}}</td>
          <td>{{round($ETCor+$ET2Cor+$ET3Cor,2)}}</td>
          <td>falta</td>
          <td>falta</td>
         <tr>

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
          <td>{{round($ETCA,2)}}</td>
          <td>{{round($ET2CA,2)}}</td>
          <td>{{round($ET3CA,2)}}</td>
          <td>{{round($ETCA+$ET2CA,2)}}</td>
          <td>{{round($ETCA+$ET2CA+$ET3CA,2)}}</td>
          <td>falta</td>
          <td>falta</td>
         <tr>

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
          <td>{{round($ETISS,2)}}</td>
          <td>{{round($ET2ISS,2)}}</td>
          <td>{{round($ET3ISS,2)}}</td>
          <td>{{round($ETISS+$ET2ISS,2)}}</td>
          <td>{{round($ETISS+$ET2ISS+$ET3ISS,2)}}</td>
          <td>falta</td>
          <td>falta</td>
         <tr>

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
          <td>{{round($ETCU,2)}}</td>
          <td>{{round($ET2CU,2)}}</td>
          <td>{{round($ET3CU,2)}}</td>
          <td>{{round($ETCU+$ET2CU,2)}}</td>
          <td>{{round($ETCU+$ET2CU+$ET3CU,2)}}</td>
          <td>falta</td>
          <td>falta</td>
         <tr>

        <tr>
          <td>LGAC Sistemas electri._y_electronicos</td> 
          <td>{{$SEE}}</td>
          <td>{{$baSEE}}</td>
          <td class="danger">{{$tiExSEE}}</td>
          <td class="success">{{$tiPCSEE}}</td>
          <td class="success">{{$tiSCSEE}}</td>
          <td class="warning">{{$tiTCSEE}}</td>
          <td>{{$ViSEE}}</td>
          <td>{{$TeSEE}}</td>
          <td>{{round($ETSEE,2)}}</td>
          <td>{{round($ET2SEE,2)}}</td>
          <td>{{round($ET3SEE,2)}}</td>
          <td>{{round($ETSEE+$ET2SEE,2)}}</td>
          <td>{{round($ETSEE+$ET2SEE+$ET3SEE,2)}}</td>
          <td>falta</td>
          <td>falta</td>
         <tr>

        <tr>
          <td>Manufactura produccion_y_calidad</td> 
          <td>{{$MPA}}</td>
          <td>{{$baMPA}}</td>
          <td class="danger">{{$tiExMPA}}</td>
          <td class="success">{{$tiPCMPA}}</td>
          <td class="success">{{$tiSCMPA}}</td>
          <td class="warning">{{$tiTCMPA}}</td>
          <td>{{$ViMPA}}</td>
          <td>{{$TeMPA}}</td>
          <td>{{round($ETMPA,2)}}</td>
          <td>{{round($ET2MPA,2)}}</td>
          <td>{{round($ET3MPA,2)}}</td>
          <td>{{round($ETMPA+$ET2MPA,2)}}</td>
          <td>{{round($ETMPA+$ET2MPA+$ET3MPA,2)}}</td>
          <td>falta</td>
          <td>falta</td>
         <tr>

     

        </thead>
       
      </table>   
       <div class="modal-body"><center>
        <button  onclick="location.href='{{URL::action('AdminController@indicador',$num=1)}}'"class="btn btn-success editar">
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