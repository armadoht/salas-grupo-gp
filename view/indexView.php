<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- Descripcion, Palabras Claves y Autor -->
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Styles -->
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="view/css/bootstrap/bootstrap.min.css">
	<!-- Tabla bootstrap -->
	<link rel="stylesheet" type="text/css" href="view/plug/datatables-plugins/dataTables.bootstrap.css">
	<!-- Tabla bootstrap -->
	<link rel="stylesheet" type="text/css" href="view/plug/datatables-responsive/dataTables.responsive.css">
	<!-- Font awesome CSS -->
	<link rel="stylesheet" type="text/css" href="view/fontawesome-free/css/all.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="view/css/grupak/style.css">
	<!-- Grupak-Blue -->
	<link rel="stylesheet" type="text/css" href="view/css/grupak/grupak-blue.css">
	<!--Favicon Grupak-->
	<link rel="shortcut icon" href="view/img/favicon/grupak-favicon.ico">
	<title>Grupak || Reservación de Salas</title>
</head>
<body>
	<!-- My Header Start-->
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<!-- Logo Grupak -->
					<a href=""><img src="view/img/grupak.png" alt="Grupak Operaciones"></a>
				</div>

				<div class="col-md-4 offset-md-4">
					<div class="list">
						<!--Telefono-->
						<div class="phone">
							<i class="fa fa-phone"></i> Telefono:55 4124- ext.7310
						</div>
						<hr/>
						<!--Email-->
						<div class="email">
							<i class="fa fa-envelope-o"></i> Email: ahuerta@grupak.com.mx
						</div>
						<hr/>
						<!--Direccion-->
						<div class="address">
							<i class="fa fa-home"></i> Carretera Federal Pachuca – Ciudad Sahagun , Tramo Ciudad Sahagun – Emiliano Zapata KM 20 , Municipio Emiliano Zapata, Hidalgo, C.P. 43960
						</div>
					</div>
				</div>

			</div>
		</div>
	</header>
	<!-- .\ End -->
	
	<!-- Pagina en blanco -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero">
					<h2><span>Reservación de Salas Grupak Operaciones.</span></h2>
					<div class="bor"></div>
					<p></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-7">
				<h4>Esta plataforma tiene como objetivo, facilitar el apartado de las salas del Grupo.</h4>
				<div class="button">
					<a href="index.php?controller=Login&action=login"><i class="fa fa-sign-in"></i> Iniciar Sesión</a>
				</div>
			</div>
			<div class="col-md-5">
				<img height="300" width="400" src="view/img/sala/main.jpg">
			</div>
		</div>
	</div>

	<div class="bor"></div>
	
	<!-- index -->
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="afeature">
					<div class="afmatter">
						<i class="fas fa-address-book"></i>
						<h4>Calendario</h4>
						<a href="index.php?controller=Index&action=calendar">Saber más...</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="afeature">
					<div class="afmatter">
						<i class="fas fa-calendar-alt"></i>
						<h4>Registro</h4>
						<a href="index.php?controller=Index&action=registry">Saber más...</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="afeature">
					<div class="afmatter">
						<i class="fas fa-calendar-check"></i>
						<h4>Fechas dísponibles</h4>
						<a href="#">Saber más...</a>
					</div>
				</div>
			</div>
		</div>
		<!-- end row -->
	</div>
	<!--End index -->

	<div class="bor"></div>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="widget">
						<h4>Pie de pagina</h4>
						<p></p>
						<ul>
							<li><i class="fa fa-angle-right"></i> <a href="#"></a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- .\ row -->

			<div class="row">
				<hr/>
				<div class="col-md-12">
					<div class="copy pull-left">
						<p> Copyright &copy; <a href="#">www.grupak.com.mx</a> | Designed by <a href="#"></a>Ing. Armando Huerta Tolentino</a></p>
					</div>
				</div>
			</div>

		</div>
	</footer>
	<!-- .\ End -->

	<!-- jQuery -->
	<script type="text/javascript" src="view/js/query/jquery-min.js"></script>
	<!-- Bootstrap JS -->
	<script type="text/javascript" src="view/js/bootstrap/bootstrap.min.js"></script>
	<!-- DATA TABLES -->
	<script type="text/javascript" src="view/plug/datatables/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="view/plug/datatables-plugins/dataTables.bootstrap.js"></script>
	<script type="text/javascript" src="view/plug/datatables-responsive/dataTables.responsive.js"></script>
</body>
</html>