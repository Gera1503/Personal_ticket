function init(){
    $("#ticket_form").on("submit",function(e){
        guardaryeditar(e);
        
    });
}

$(document).ready(function() {
        $('#tick_descrip').summernote({
            height:200,
            lang :"es-ES",
            popover:{
                image:[],
                link:[],
                air:[]
            },
            callbacks: {
                onImageUpload: function(image) {
                    console.log("Image detect...");
                    myimagetreat(image[0]);
                },
                onPaste: function (e) {
                    console.log("Text detect...");
                }
            }
        });

        $.post("../../controller/categorias.php?op=combo",function(data,status){
        $('#cat_id').html(data);

        });

    });


    function guardaryeditar(e){
        e.preventDefault(); 
        var formData= new FormData($("#ticket_form")[0]); 
        if($('#tick_descrip').summernote('isEmpty') || $('#tick_titulo').val()==''){
            swal("Advertencia!","Falta llenar campos", "warning");

        } else{
            $.ajax({
                url:"../../controller/ticket.php?op=insert",
                type:"POST",
                data: formData,
                contentType:false,
                processData: false,
                success: function(data){
                    console.log(data);
                    
                    $('#tick_titulo').val('');
                    $('#tick_descrip').summernote('reset');
                    swal("correcto","Registrado Correctamente", "success");

                }

            });
            
        }

        
}

init();

