<?php 
	require_once("../../config/conexion.php");
	if (isset($_SESSION["usu_id"])) {
		
?>
<!DOCTYPE html>
<html>
    <?php require_once("../MainHead/head.php")?>
    <title>A y F :: Pagina Inicio</title>

</head>
<body class="with-side-menu">
<?php require_once("../MainHeader/header.php")?>

	<div class="mobile-menu-left-overlay"></div>
	<?php require_once("../MainNav/nav.php")?>

	<!-- contenido -->
	<div class="page-content">
		<div class="container-fluid">
			Blank page.
		</div><!--.container-fluid-->
	</div><!--.page-content-->
		<!-- contenido -->
	<script src="home.js"></script>
    <?php require_once("../MainJS/js.php")?>
</body>
</html>
<?php
	}else{
		$conectar = new Conectar();
		header("Location:".$conectar->ruta()."index.php");
		exit();
	} 

?>