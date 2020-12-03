<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" >
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	
	<link href="https://fonts.googleapis.com/css2?family=Convergence&family=Grenze:wght@300;400;600;700&family=Headland+One&family=Katibeh&family=Lancelot&family=Montserrat:wght@400;500;600;700;900&display=swap" rel="stylesheet">

	
	<link rel="stylesheet" href="/css/style.css">

	<title>@yield('titulo')</title>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light red fixed-top">
		<button id="sidebarCollapse" class="btn navbar-btn">
			<i class="fas fa-lg fa-bars"></i>
		</button>
		<a class="navbar-brand" href="">
			<h3 id="logo">BiblioMax</h3>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" id="link" href="#">
						<i class="fas fa-sign-out-alt"></i>
						Cerrar Sesión<span class="sr-only">(current) </span></a>
				</li>
			</ul>
		</div> 
	</nav>

	<div class="wrapper fixed-left">
		<nav id="sidebar">

			<ul class="list-unstyled">
				<li class="nav-item">
					<a href="" class="nav-link">
						<i class="fas fa-home"></i>Inicio
					</a>
				</li>
				<li class="nav-item">
					<a href="#afiliadoSubmenu" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle">
						<i class="fas fa-users"></i>Afiliados
					</a>
					<ul class="collapse list-unstyled" id="afiliadoSubmenu">
						<li class="nav-item">
							<a href="#" class="nav-link">Nuevo afiliado</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Lista de afiliados</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="#prestamoSubmenu" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle">
						<i class="fas fa-book-reader"></i>Libros prestados
					</a>
					<ul class="collapse list-unstyled" id="prestamoSubmenu">
						<li class="nav-item">
							<a href="#" class="nav-link">Nuevo préstamo</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Lista de préstamos</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="#libroSubmenu" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle">
						<i class="fas fa-book"></i>Libros
					</a>
					<ul class="collapse list-unstyled" id="libroSubmenu">
						<li class="nav-item">
							<a href="/libro/create" class="nav-link">Nuevo libro</a>
						</li>
						<li class="nav-item">
							<a href="/libro" class="nav-link">Lista de libros</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="#empleadoSubmenu" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle">
						<i class="far fa-address-card"></i>Empleados
					</a>
					<ul class="collapse list-unstyled" id="empleadoSubmenu">
						<li class="nav-item">
							<a href="#" class="nav-link">Nuevo empleado</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Lista de empleados </a>
						</li>
					</ul>
				</li>
			</ul>
		</nav>
		<div id="content">
			@yield('contenido')
		</div>
	</div>




	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
		crossorigin="anonymous"></script>
	<script src="/js/jquery.min.js"></script>
	<script src="/js/script.js"></script>
</body>

</html> <!--153, 100, 73 el color para las tablas-->