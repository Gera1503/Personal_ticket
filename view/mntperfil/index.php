<?php 

    require_once("../../config/conexion.php");
    if(isset($_SESSION["usu_id"])){
        

?>
	<!DOCTYPE html>
	<html>

    <?php require_once("../Mainhead/head.php"); ?>
    <title>Perfil</title>

	</head>
	<body class="with-side-menu">


            
            <?php require_once("../mainheader/header.php"); ?>

            <div class="page-content">
                <div class="container-fluid" >  
                    <header class="section-header">
                        <div class="tbl">
                            <div class="tbl-row">
                                <div class="tbl-cell">
                                    <h3>Perfil</h3>
                                    <ol class="breadcrumb breadcrumb-simple">
                                        <li><a href="#">Home</a></li>
                                        <li class="active">Cambiar Contraseña</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </header>
                    
                    

                    <div class="box-typical box-typical-padding">
                        <p>
                            Editar informacion de: <span class="lblcontactonomx"><?php echo $_SESSION["usu_nom"]?> <?php echo $_SESSION["usu_ape"]?></span>
                        </p>

                        <h5 class="m-t-lg with-border">Cambiar Contraseña</h5>
                        <div class="row">
                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="tick_titulo">Nueva Contraseña</label>
                                        <input type="password" class="form-control" id="txtpass" name="txtpass"  >
                                    </fieldset>
                                </div>

                                <div class="col-lg-6">
                                    <fieldset class="form-group">
                                        <label class="form-label semibold" for="tick_titulo">Confirmar Contraseña</label>
                                        <input type="password" class="form-control" id="txtconfirmar" name="txtconfirmar"  >
                                    </fieldset>
                                </div>
                                
                                <div class="col-lg-12">
                                    <button type="button" id="btnactualizar" value="add" class="btn btn-rounded btn-inline btn-primary">Actualizar</button>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <?php require_once("../mainnav/nav.php"); ?>
            <?php require_once("../mainJs/js.php"); ?>

            <script type="text/javascript" src="mntperfil.js">
            </script>

	</body>
	</html>
<?php 
}else{
    header("Location: ../../index.php");
}

?>