
$(document).on("click", "#btnactualizar",function(){
   var pass= $("#txtpass").val(); 
   var newpass= $("#txtconfirmar").val();

   if (pass.length== 0 || newpass.length==0){
        swal("Error!","campos vacios","error");
   }else{
    if(pass==newpass){
        var usu_id=$('#user_idx').val();
        $.post("../../controller/usuario.php?op=password", {usu_id : usu_id,usu_pass:newpass} ,function(data){
            swal("correcto","Se actualizo Correctamente", "success");
        });

    }else{
        swal("Error!","No coinciden las contraseñas","error");
    }

   } 

});