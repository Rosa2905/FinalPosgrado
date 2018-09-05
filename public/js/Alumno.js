$(document).ready( function () {
    var table = $('#Alumnotabla').DataTable({
         "processing": true,
         "serverSide": true,
         "ajax": "alumno/all",
         "columns":[
            {"data":'nombre'},
            {"data":'apellido_paterno'},
            {"data":'matricula'},
            {"data":'CVU'},
            {"data":'Beca'},
            {"data":'estatus'},
            {"data":'SAGCC'},
            {"data":'LGAC'},
            {"data":'grado'},
            {"data":'director'},
            {"data":'fecha_ingreso'},
            {"data":'fecha_egreso'},
                  {"defaultContent":
                                `<a id="edit" data-target="#modal-edit" data-toggle="modal" >
                                <button class="btn btn-success editar">
                                <span class=" glyphicon glyphicon-pencil"></span> Editar</button></a>
                                
                                <button type="button" class="btn btn-success mas" value="Mas">
                                <span class="glyphicon glyphicon-search" ></span> Mas.</button>`}]}
                                );
        
        edit("#Alumnotabla tbody",table);
        show("#Alumnotabla tbody",table);
       $("input").css({"border": "2px solid #00CC00","border-radius": "4px","padding": "7px 10px 8px 20px","margin-top": "15px","margin-bottom": "15px"});
} );


$(document).ready( function () {
    var table = $('#Alumno').DataTable({
         "processing": true,
         "serverSide": true,
         "ajax": "all",
         "columns":[
            {"data":'nombre'},
            {"data":'apellido_paterno'},
            {"data":'matricula'},
            {"data":'CVU'},
            {"data":'Beca'},
            {"data":'estatus'},
            {"data":'SAGCC'},
            {"data":'LGAC'},
            {"data":'grado'},
            {"data":'director'},
            {"data":'fecha_ingreso'},
            {"data":'fecha_egreso'},
                  {"defaultContent":
                                `

                                
                                <button type="button"  class="btn btn-success mas" value="Mas">
                                <span class="glyphicon glyphicon-search" ></span> Mas.</button>`}]}
                                );
      
        showD("#Alumno tbody",table);
       $("input").css({"border": "2px solid #00CC00","border-radius": "4px","padding": "7px 10px 8px 20px","margin-top": "15px","margin-bottom": "15px"});
} );


 var edit = function(tbody,table){
        $(tbody).on("click","button.editar",function(){
            var data = table.row($(this).parents("tr")).data();
            $("#datos_personales").click(function(){
                    location.href='alumno/'+data.id+'/edit'   
              });
            
             $("#datos_posgrado").click(function(){
                    location.href='alumno/'+data.id+'/editP'   
              });
            // console.log(data.id);
        });
 }



var show = function(tbody,table){
        $(tbody).on("click","button.mas",function(){
            var data = table.row($(this).parents("tr")).data();
              location.href='alumno/'+data.id+'/mas'
        });
 }

 var showD = function(tbody,table){
        $(tbody).on("click","button.mas",function(){
            var data = table.row($(this).parents("tr")).data();
              location.href=data.id+'/mas'
        });
 }