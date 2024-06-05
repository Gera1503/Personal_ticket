<?php 
    require_once("../../config/conexion.php");
    if(isset($_SESSION["usu_id"])){ 

    
?>

<!DOCTYPE html>
<html>


    <?php require_once("../Mainhead/head.php"); ?>
    <title>Detalle Ticket</title>

	
   
</head>
<body class="with-side-menu">

	
    <?php require_once("../mainheader/header.php"); ?>

	<div class="page-content">
        <div class="container-fluid">

            <header class="section-header" >
                <div class="tbl" >
                    <div class="tbl-row" >
                        <div class="tbl-cell">
                            <h3 id="lblnomidticket" ></h3>
                            <div id="lblestado" ></div>
                            <div class="label label-pill label-primary" id="lblnomusuario" ></div>
                            <div class="label label-pill label-default" id="lblfechcrea" ></div>
                         
                            <ol class="breadcrumb breadcrumb-simple">
                                <li><a href="#" >home</a></li>
                                <li class="active" >Detalle Ticket</li>
                                
                            </ol>

                        </div>
                    </div>
                </div>
                

                <div class="box-typical box-typical-padding">
                    <div class="row">
                            <div class="col-lg-6">
                                        <fieldset class="form-group">
                                            <label class="form-label semibold" for="cat_nom">Categoria</label>
                                            <input type="text" class="form-control" id="cat_nom" name="cat_nom" readonly >
                                        </fieldset>
                            </div>
                            <div class="col-lg-6">
                                        <fieldset class="form-group">
                                            <label class="form-label semibold" for="tick_titulo">Titulo</label>
                                            <input type="text" class="form-control" id="tick_titulo" name="tick_titulo" readonly >
                                        </fieldset>
                            </div>
                            <div class="col-lg-12">
                                        <fieldset class="form-group">
                                            <label class="form-label semibold" for="tickd_descripusu">Descripcion</label>
                                            <div class="summernote-theme-1">
                                                <textarea id="tickd_descripusu" class="summernote" name="tickd_descripusu" name="name"></textarea>
                                            </div>
                                        </fieldset>
                            </div>
                    </div>
                 </div>           
            </header>
        
            <section class="activity-line" id="lbldetalle">
            </section>

            <div class="box-typical box-typical-padding" id="pnldetalle" >
                <p>
                    Responder dudas o hacer aclaraciones
                </p>
                <div class="row">
                    <div class="col-lg-12">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tickd_descrip">Descripción</label>
									<div class="summernote-theme-1">
										<textarea id="tickd_descrip" class="summernote" name="tickd_descrip" name="name"></textarea>
									</div>
							</fieldset>
						</div>
						<div class="col-lg-12">
							<button type="button" id="btnenviar" class="btn btn-rounded btn-inline btn-primary">Enviar</button>
                            <button type="button" id="btncerrarticket" class="btn btn-rounded btn-inline btn-warning">Cerrar ticked</button>
					</div>
                </div>
            </div>

        </div>

    </div>
	
	<?php require_once("../mainnav/nav.php"); ?>
	
  
	
    <?php require_once("../mainJs/js.php"); ?>
    
    <script type="text/javascript" src="detalleticket.js" ></script>
    


</body>
</html>
<?php 
}else{
    header("Location: ../../index.php");
}


?>