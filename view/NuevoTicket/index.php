<?php 

    require_once("../../config/conexion.php");
    if(isset($_SESSION["usu_id"])){

?>
	<!DOCTYPE html>
	<html>

    <?php require_once("../Mainhead/head.php"); ?>
    <title>Nuevo Ticket</title>

	</head>
	<body class="with-side-menu">


	
    <?php require_once("../mainheader/header.php"); ?>

	
	
	
    <div class="page-content">
        <div class="container-fluid" >  
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Nuevo Ticket</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								<li class="active">Nuevo Ticket</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

            <div class="box-typical box-typical-padding">
				<p>
                    Ventana para generar nuevos Tickets
				</p>

                <h5 class="m-t-lg with-border">Ingresar Información</h5>
				<div class="row">
					<form method="POST" id="ticket_form">
						
						<input type="hidden" id="usu_id" name="usu_id" value="<?php echo $_SESSION["usu_id"] ?>">

						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="cat_id">Categoria</label>
								<div class="col-sm-10">
								<select id="cat_id" name="cat_id" class="form-control">
								</select>
							</fieldset>
						</div>
						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_titulo">Titulo</label>
								<input type="text" class="form-control" id="tick_titulo" name="tick_titulo" placeholder="Igrese Titulo" >
							</fieldset>
						</div>
						
						<div class="col-lg-12">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_descrip">Descripción</label>
									<div class="summernote-theme-1">
										<textarea id="tick_descrip" class="summernote" name="tick_descrip" name="name"></textarea>
									</div>
							</fieldset>
						</div>
						<div class="col-lg-12">
							<button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-primary">Guardar</button>
						</div>
					</form>
				</div>
            </div>
        </div>
    </div>
	<?php require_once("../mainnav/nav.php"); ?>
    <?php require_once("../mainJs/js.php"); ?>

	<script type="text/javascript" src="nuevoticket.js"></script>

	<script>
		$(document).ready(function() {
   		 $('#tick_descrip').summernote({
        height:200
    	});
    	});
	</script>
	</body>
	</html>
<?php 
}else{
    header("Location: ../../index.php");
}

?>