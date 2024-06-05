<?php 
    require_once("../../config/conexion.php");
    if(isset($_SESSION["usu_id"])){
    
?>

<!DOCTYPE html>
<html>


    <?php require_once("../Mainhead/head.php"); ?>
    <title>Mantenimiento usuarios</title>

	
   
</head>
<body class="with-side-menu">

	
    <?php require_once("../mainheader/header.php"); ?>

	<div class="mobile-menu-left-overlay"></div>
	
	<?php require_once("../mainnav/nav.php"); ?>
	
  
	<div class="page-content">
		<div class="container-fluid">
        <header class="section-header">
				<div class="tbl"> 
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Mantenimeiento usuarios</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								<li class="active">Manenimiento usuarios</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

            <div class="box-typical box-typical-padding">
                <button type="button" id="btnnuevo" class="btn btn-inline btn-primary" >Nuevo Registro</button>
                <table id="usuario_data" name="ticket_data" class="table table-border table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th style="width:10%;">Nombre</th>
                            <th style="width:10%;">Apellido</th>
                            <th class="d-done d-sm-table-cell" style="width:30%;">Correo</th>
                            <th class="d-done d-sm-table-cell" style="width:5%;">Contraseña</th>
                            <th class="d-done d-sm-table-cell" style="width:5%;">Rol</th> 
                            <th class="text-center" style="width:5%;"></th>
                            <th style="width:10%;">Editado por</th> 
                            <th class="text-center" style="width:5%;"></th>
                        </tr>
                    </thead>
                </table>
            </div>

		</div><!--.container-fluid-->
	</div><!--.page-content-->
    <?php require_once("modal.php"); ?>
    <?php require_once("modalkey.php"); ?>
    <?php require_once("modaldesc.php"); ?>

    <script>
    
    </script>

    <?php require_once("../mainJs/js.php"); ?>
    
    <script type="text/javascript" src="mntusuario.js" ></script>
    


</body>
</html>
<?php 
}else{
    header("Location: ../../index.php");
}


?>