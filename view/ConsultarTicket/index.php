<?php 
    require_once("../../config/conexion.php");
    if(isset($_SESSION["usu_id"])){
    
?>

<!DOCTYPE html>
<html>


    <?php require_once("../Mainhead/head.php"); ?>
    <title>Consultar Ticket</title>

	
   
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
							<h3>Consultar Ticket</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								<li class="active">Consultar Ticket</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

            <div class="box-typical box-typical-padding">
                <table id="ticket_data" name="ticket_data" class="table table-border table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th style="width:5%;">Nro.Ticket</th>
                            <th style="width:15%;">Categoria</th>
                            <th class="d-done d-sm-table-cell" style="width:25%;">Titulo</th>
                            <th class="d-done d-sm-table-cell" style="width:5%;">Estado</th>
                            <th class="d-done d-sm-table-cell" style="width:15%;">Fecha Creación</th> 
                            <th class="d-done d-sm-table-cell" style="width:15%;">Fecha Asignación</th> 
                            <th class="d-done d-sm-table-cell" style="width:10%;">Soporte</th> 
                            <th class="text-center" style="width:5%;"></th>
                        </tr>
                    </thead>
                </table>
            </div>

		</div><!--.container-fluid-->
	</div><!--.page-content-->
    
    <?php require_once("modalasignar.php"); ?>
    <?php require_once("../mainJs/js.php"); ?>
    
    <script type="text/javascript" src="consultarticket.js" ></script>
    


</body>
</html>
<?php 
}else{
    header("Location: ../../index.php");
}


?>