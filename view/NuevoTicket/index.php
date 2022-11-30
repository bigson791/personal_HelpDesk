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
					<div class="col-lg-6">
						<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInput">Categoria</label>
							<select id="cat_id" class="form-control">
								<option>Hardware</option>
								<option>Software</option>
								<option>Otros</option>
							</select>
						</fieldset>
					</div>
					<div class="col-lg-6">
						<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInputEmail1">Titulo</label>
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingresa Titulo">
						</fieldset>
					</div>
					<div class="col-lg-12">
						<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInputPassword1">Descripcion</label>
							<div class="summernote-theme-1">
								<textarea class="summernote" name="name"  id="ticket-descript">Hello Summernote</textarea>
							</div>
						</fieldset>
					</div>
					<div class="col-lg-12">
					<button type="button" class="btn btn-rounded btn-inline btn-primary">Guardar</button>
					</div>
				</div><!--.row-->
			</div>
			
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