<?php 
	require_once("../../config/conexion.php");
	if (isset($_SESSION["usu_id"])) {
		
?>
<!DOCTYPE html>
<html>
    <?php require_once("../MainHead/head.php")?>
    <title>A y F :: Nuevo Ticket</title>

</head>
<body class="with-side-menu">
<?php require_once("../MainHeader/header.php")?>

	<div class="mobile-menu-left-overlay"></div>
	<?php require_once("../MainNav/nav.php")?>

	<!-- contenido -->
	<div class="page-content">
		<div class="container-fluid">
			<header class="section-header">
					<div class="tbl">
						<div class="tbl-row">
							<div class="tbl-cell">
								<h3>Nuevo Ticket</h3>
								<ol class="breadcrumb breadcrumb-simple">
									<li><a href="../../view/home/">Home</a></li>
									<li class="active">Nuevo Ticket</li>
								</ol>
							</div>
						</div>
					</div>
				</header>
				<div class="box-typical box-typical-padding">
					<p>
						En este espacio se puede generar nuevos tickets de HelpDesk	
					</p>
					<h5 class="m-t-lg with-border">Ingresar Información</h5>				
					<div class="row">
						<form method="post" id="ticket_form" >
							<input type="hidden" id="tick_usu_id" name="tick_usu_id" value="<?php echo $_SESSION['usu_id']?>"></input>
							<div class="col-lg-6">
								<fieldset class="form-group">
									<label class="form-label semibold" for="tick_cat_id">Categoria</label>
									<select id="tick_cat_id" name="tick_cat_id" class="form-control">
									</select>
								</fieldset>
							</div>
							<div class="col-lg-6">
								<fieldset class="form-group">
									<label class="form-label semibold" for="tick_titulo">Titulo</label>
									<input type="text" class="form-control" id="tick_titulo" name="tick_titulo" placeholder="Ingresa Titulo">
								</fieldset>
							</div>
							<div class="col-lg-12">
								<fieldset class="form-group">
										<label class="form-label semibold" for="tick_descrip">Descripcion</label>
										<div class="summernote-theme-1">
											<textarea class="summernote" name="tick_descrip"  id="tick_descrip"></textarea>
										</div>
								</fieldset>
							</div>
							<div class="col-lg-12">
								<button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-primary">Guardar</button>
							</div>
						</form>					
					</div><!--.row-->
				</div>
			</header>
		</div><!--.container-fluid-->
	</div><!--.page-content-->
		<!-- contenido -->
	

    <?php require_once("../MainJS/js.php")?>
	<script type="text/javascript" src="NuevoTicket.js"></script>

</body>
</html>
<?php
	}else{
		$conectar = new Conectar();
		header("Location:".$conectar->ruta()."index.php");
		exit();
	} 

?>