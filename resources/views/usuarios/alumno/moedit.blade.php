
<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" 
        aria-label="Close"> <span aria-hidden="true">×</span></button>
         <h3 class="modal-title"><center><b>Editar Usuario</b></center></h3>
      </div>
      

      <div class="modal-body"><center>

        <input type="button" id="datos_personales" class="btn btn-primary" value="Datos Personales" />
        <input type="button" id="datos_posgrado" class="btn btn-primary" value="Datos Posgrado" />

       {{--  <input type="button" onclick="location.href='https://www.youtube.com';" class="btn btn-primary" value="Datos Posgrado" /></center> --}}

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        {{-- <button type="submit" class="btn btn-primary">Confirmar</button> Adios--}}
      </div>
    </div>
  </div>


<style>
.modal-content {
    background-color: #fefefe;
    margin: 10% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 7px solid #90EE90;
    width: 70%; /* Could be more or less, depending on screen size */
}
</style>