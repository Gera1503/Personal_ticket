var tabla;


function init(){
    $('#usuario_form').on("submit",function(e){
        guardaryeditar(e);
    });

      
} 


function guardaryeditar(e){
    e.preventDefault();
    var formData = new FormData($("#usuario_form")[0]);
    $.ajax({
        url:"../../controller/usuario.php?op=guardaryeditar",
        type:"POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos){
            console.log(datos);
            $('#usuario_form')[0].reset();
            $("#modaln").modal('hide');
            $('#usuario_data').DataTable().ajax.reload();

            
            swal({
                title: "Listo",
                text: "Guardado",
                type: "success",
                confirmButtonClass: "btn-success"
            });
        }
    });
}

$(document).ready(function(){

        tabla=$('#usuario_data').dataTable({
            "aProcessing": true,
            "aServerSide": true,
            dom: 'Bfrtip',
            "searching": true,
            lengthChange: false,
            colReorder: true,
            buttons: [
                   
                    'excelHtml5',
                    'pdfHtml5'
                    ],
            "ajax":{
                url: '../../controller/usuario.php?op=listar',
                type : "post",
                dataType : "json",
                error: function(e){
                    console.log(e.responseText);
                }
            },
            "ordering": false,
            "bDestroy": true,
            "responsive": true,
            "bInfo":true,
            "iDisplayLength": 10,
            "autoWidth": false,
            "language": {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }     
        }).DataTable();

});


function desencriptar(usu_id){
    $('#mdlkey').html('Desencirptar contraseña');
    $('#modalkey').modal('show');
    
    $(document).on("click", "#btnvalidar",function(){
        let llave="llave1";

        let key=$("#key").val();
       
        if (key.length==0){
            swal("Error!","LLave no ingresada","error");
        }else {
            if(llave == key){
                $('#mdldtitulo').html('Contraseña Desencriptada');
                $.post("../../controller/usuario.php?op=mostrar", {usu_id : usu_id} ,function(data){
                    data= JSON.parse(data);
                    console.log(data);
                    $('#us_id').val(data.usu_id);
                    $('#desi').val(data.usu_pass);
                });
                $('#modaldes').modal('show');
                $('#modalkey').modal('hide');
                $('#key_form')[0].reset();

    
            }else{
                swal("Error!","llave incorrecta","error");
                $('#key_form')[0].reset(); 
            }
        }
    
    });     

}
         

function editar(usu_id){
    
    $('#mdltitulo').html('Editar Registro');
    $.post("../../controller/usuario.php?op=mostrar", {usu_id : usu_id} ,function(data){
       data= JSON.parse(data);
       $('#usu_id').val(data.usu_id);
       $('#usu_nom').val(data.usu_nom);
       $('#usu_ape').val(data.usu_ape);
       $('#usu_correo').val(data.usu_correo);
       $('#usu_pass').val(data.usu_pass);
       $('#rol_id').val(data.rol_id).trigger('change');
       $('#user_idx').val(data.edit);

    });
    $('#modaln').modal('show');
   
}



function eliminar(usu_id){
    swal({
        title: "Advertencia",
        text: "¿Estas seguro de eliminar el registro?",
        type: "error",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Si",
        cancelButtonText: "No",
        closeOnConfirm: false,
        
    },
        function(isConfirm) {
        if (isConfirm) {
           
            $.post("../../controller/usuario.php?op=eliminar", {usu_id : usu_id} ,function(data){

              });

              $('#usuario_data').DataTable().ajax.reload();


            swal({
                title: "Listo",
                text: "Registro eliminado",
                type: "success",
                confirmButtonClass: "btn-success"
            });
        } 
    });
}

$(document).on("click", "#btnnuevo",function(){
    $('#mdltitulo').html('Nuevo Registro');
    $('#usuario_form')[0].reset();
    $('#modaln').modal('show');

});





init();

