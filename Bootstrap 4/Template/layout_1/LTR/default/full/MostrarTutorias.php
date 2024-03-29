<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Listado de tutorías</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="global_assets/js/main/jquery.min.js"></script>
	<script src="global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="global_assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="global_assets/js/demo_pages/form_layouts.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="index.html" class="d-inline-block">
				<img src="global_assets/images/logo_light.png" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-git-compare"></i>
						<span class="d-md-none ml-2">Git updates</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">9</span>
					</a>

					<div class="dropdown-menu dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Git updates</span>
							<a href="#" class="text-default"><i class="icon-sync"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>

									<div class="media-body">
										Drop the IE <a href="#">specific hacks</a> for temporal inputs
										<div class="text-muted font-size-sm">4 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-warning text-warning rounded-round border-2 btn-icon"><i class="icon-git-commit"></i></a>
									</div>
									
									<div class="media-body">
										Add full font overrides for popovers and tooltips
										<div class="text-muted font-size-sm">36 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-info text-info rounded-round border-2 btn-icon"><i class="icon-git-branch"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch
										<div class="text-muted font-size-sm">2 hours ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i class="icon-git-merge"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Eugene Kopyov</a> merged <span class="font-weight-semibold">Master</span> and <span class="font-weight-semibold">Dev</span> branches
										<div class="text-muted font-size-sm">Dec 18, 18:36</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>
									
									<div class="media-body">
										Have Carousel ignore keyboard events
										<div class="text-muted font-size-sm">Dec 12, 05:46</div>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All updates</a>
							<div>
								<a href="#" class="text-grey" data-popup="tooltip" title="Mark all as read"><i class="icon-radio-unchecked"></i></a>
								<a href="#" class="text-grey ml-2" data-popup="tooltip" title="Bug tracker"><i class="icon-bug2"></i></a>
							</div>
						</div>
					</div>
				</li>
			</ul>

			<span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-people"></i>
						<span class="d-md-none ml-2">Users</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-300">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Users online</span>
							<a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
										<span class="d-block text-muted font-size-sm">Lead web developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Will Brason</a>
										<span class="d-block text-muted font-size-sm">Marketing manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-danger"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Hanna Walden</a>
										<span class="d-block text-muted font-size-sm">Project manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Dori Laperriere</a>
										<span class="d-block text-muted font-size-sm">Business developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-warning-300"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Vanessa Aurelius</a>
										<span class="d-block text-muted font-size-sm">UX expert</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-grey-400"></span></div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All users</a>
							<a href="#" class="text-grey"><i class="icon-gear"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="d-md-none ml-2">Messages</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">2</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Messages</span>
							<a href="#" class="text-default"><i class="icon-compose"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3 position-relative">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">James Alexander</span>
												<span class="text-muted float-right font-size-sm">04:58</span>
											</a>
										</div>

										<span class="text-muted">who knows, maybe that would be the best thing for me...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3 position-relative">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Margo Baker</span>
												<span class="text-muted float-right font-size-sm">12:16</span>
											</a>
										</div>

										<span class="text-muted">That was something he was unable to do because...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Jeremy Victorino</span>
												<span class="text-muted float-right font-size-sm">22:48</span>
											</a>
										</div>

										<span class="text-muted">But that would be extremely strained and suspicious...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Beatrix Diaz</span>
												<span class="text-muted float-right font-size-sm">Tue</span>
											</a>
										</div>

										<span class="text-muted">What a strenuous career it is that I've chosen...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Richard Vango</span>
												<span class="text-muted float-right font-size-sm">Mon</span>
											</a>
										</div>
										
										<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer justify-content-center p-0">
							<a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Load more"><i class="icon-menu7 d-block top-0"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
						<span>Diana</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> Mi perfil</a>
						<a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
						<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Mensajes <span class="badge badge-pill bg-blue ml-auto">58</span></a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Configuración de cuenta</a>
						<a href="#" class="dropdown-item"><i class="icon-switch2"></i> Cerrar sesión</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="#"><img src="global_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold">Diana González</div>
								<div class="font-size-xs opacity-50">
									<i class="icon-pin font-size-sm"></i> &nbsp;cd. Victoria, MX
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="index2.php" class="nav-link active">
								<i class="icon-home4"></i>
								<span>
									Inicio
								</span>
							</a>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Alumnos</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Alumnos">
								<li class="nav-item"><a href="FormularioAlumnos.php" class="nav-link active">Agregar alumno</a></li>
								<li class="nav-item"><a href="EditarAlumnos.php" class="nav-link">Editar alumno</a></li>

								<li class="nav-item"><a href="MostrarAlumnos.php" class="nav-link active">Mostrar alumnos</a></li>
							</ul>
						</li>

						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Maestros</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Maestros">
								<li class="nav-item"><a href="FormularioMaestros.php" class="nav-link active">Agregar maestro</a></li>
								
								<li class="nav-item"><a href="EditarMaestros.php" class="nav-link active">Editar maestro</a></li>

								<li class="nav-item"><a href="MostrarMaestros.php" class="nav-link active">Mostrar maestros</a></li>
							</ul>
						</li>

						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Grupos</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Grupos">
								<li class="nav-item"><a href="FormularioGrupos.php" class="nav-link">Añadir grupo</a></li>
								<li class="nav-item"><a href="EditarGrupo.php" class="nav-link">Editar grupo</a></li>
								<li class="nav-item"><a href="MostrarGrupos.php" class="nav-link">Mostrar grupos</a></li>
							</ul>
						</li>

						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Materias</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Materias">
								<li class="nav-item"><a href="FormularioMaterias.php" class="nav-link">Añadir materia</a></li>
								<li class="nav-item"><a href="EditarMateria.php" class="nav-link">Editar materia</a></li>
								<li class="nav-item"><a href="MostrarMaterias.php" class="nav-link">Mostrar materias</a></li>
							
							</ul>
						</li>

						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Transporte</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Materias">
								<li class="nav-item"><a href="FormularioTransporte.php" class="nav-link">Agregar transporte</a></li>
											
							</ul>
						</li>

						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Tutorías</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Materias">
								<li class="nav-item"><a href="FormularioTutorias.php" class="nav-link">Agregar tutoría</a></li>
								<li class="nav-item"><a href="MostrarTutorias.php" class="nav-link">Listado de tutorías</a></li>
							
							</ul>
						</li>
					</ul>
				</div>
				<!-- /main navigation -->


			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Tutorías</span> - Listado de tutorías</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
						</div>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Inicio</a>
							<a href="form_layout_horizontal.html" class="breadcrumb-item">Tutorías</a>
							<span class="breadcrumb-item active">Listado de tutorías</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="breadcrumb justify-content-center">
							<a href="#" class="breadcrumb-elements-item">
								<i class="icon-comment-discussion mr-2"></i>
								Support
							</a>

							<div class="breadcrumb-elements-item dropdown p-0">
								<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear mr-2"></i>
									Settings
								</a>

								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
									<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
									<a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

				<button class="btn btn-success" data-toggle="modal" data-target="#modalUno">Editar tutoria</button>

							<!--Creando modal -->
							<div class="modal fade" id="modalUno" tabindex="-1" role="dialog" aria-labelledby="tituloVentana" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 id="tituloVentana">Editar tutoría</h5>
											<button class="close" data-dismiss="modal" aria-label="Cerrar">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">

											<div class="alert alert-success">
												<div class="form-group row">
										           <label class="col-lg-3 col-form-label">Buscar:</label>
										            <div class="col-lg-9">
											            <input type="text" class="form-control" required pattern="[A-Za-z0-9]+" placeholder="Nombre del alumno, matrícula, clave del profesor o ID de tutoría" maxlength="30">
											            <br>
											            <button class="btn btn-success" type="button">Aceptar</button>

											            <br>
											            
											            <div class="card-header header-elements-inline">
											            	<h5 class="card-title">Datos del alumno</h5>
											            </div>

											            <form action="#">
											            	<div class="form-group row">
											            		<label class="col-lg-3 col-form-label">Nombre:</label>
											            		<div class="col-lg-9">
											            			<input type="text" class="form-control" required pattern="[A-Za-z]+" placeholder="Christina Abigail Barrera Castillo" maxlength="30"> 
											            		</div>
											            	</div>

											            	<div class="form-group row">
											            		<label class="col-lg-3 col-form-label">Matrícula:</label>

											            		<div class="col-lg-9">
											            			<input type="text" class="form-control" minlength="7" maxlength="7" required pattern="[0-9]+" placeholder="1927421">
											            		</div>
											            	</div>

											            	<div class="form-group row">
											            		<label class="col-lg-3 col-form-label">Carrera:</label>

											            		<div class="col-lg-9">
											            			<select class="form-control form-control-select2" data-fouc>
											            				<option value="ITI">Ingeniería en Tecnologías de la Información</option><option value="ISA">Ingeniería en Sistemas Automotrices</option>
											            				<option value="PYMES">Licenciatura en Administración y Gestión de Pequeñas y Medianas Empresas</option>
											            				<option value="MECA">Ingeniería en Mecatrónica</option>
											            				<option value="MANU">Ingeniería en Tecnologías de Manufactura</option>
											            			</select>
											            		</div>
											            	</div>

											            	<div class="form-group row">
											            		<label class="col-lg-3 col-form-label">Correo:</label>
											            		<div class="col-lg-9">
											            			<input type="text" class="form-control" required pattern="[A-Za-z]+" placeholder="Christina" maxlength="15"> 
											            		</div>
											            	</div>

											            	<div class="card-header header-elements-inline">
											            	<h5 class="card-title">Datos del maestro</h5>
											            </div>

											            <form action="#">
											            	<div class="form-group row">
											            		<label class="col-lg-3 col-form-label">Nombre:</label>
											            		<div class="col-lg-9">
											            			<input type="text" class="form-control" required pattern="[A-Za-z]+" placeholder="Christina Abigail Barrera Castillo" maxlength="30"> 
											            		</div>
											            	</div>

											            	<div class="form-group row">
											            		<label class="col-lg-3 col-form-label">Clave de profesor:</label>

											            		<div class="col-lg-9">
											            			<input type="text" class="form-control" minlength="7" maxlength="7" required pattern="[0-9]+" placeholder="1927421">
											            		</div>
											            	</div>

											            	<div class="form-group row">
											            		<label class="col-lg-3 col-form-label">Carrera:</label>

											            		<div class="col-lg-9">
											            			<select class="form-control form-control-select2" data-fouc>
											            				<option value="ITI">Ingeniería en Tecnologías de la Información</option><option value="ISA">Ingeniería en Sistemas Automotrices</option>
											            				<option value="PYMES">Licenciatura en Administración y Gestión de Pequeñas y Medianas Empresas</option>
											            				<option value="MECA">Ingeniería en Mecatrónica</option>
											            				<option value="MANU">Ingeniería en Tecnologías de Manufactura</option>
											            			</select>
											            		</div>
											            	</div>

											            	<div class="card-header header-elements-inline">
											            	<h5 class="card-title">Datos de la tutoría</h5>
											            </div>

											            <form action="#">
											            	<div class="form-group row">
											            		<label class="col-lg-3 col-form-label">ID:</label>
											            		<div class="col-lg-9">
											            			<input type="text" class="form-control" minlength="0" maxlength="0" value="1" autocomplete="on">
											            		</div>
											            	</div>

											            	<div class="form-group row">
											            		<label class="col-lg-3 col-form-label">Tema a tratar:</label>
											            		<div class="col-lg-9">
											            			<input type="text" class="form-control" required pattern="[A-Za-z]+" placeholder="Uso de excel" maxlength="30"> 
											            		</div>
											            	</div>

											            	<h6>Fecha de sesión</h6> 
											            	<div class="form-group row">
											            		<label class="col-lg-3 col-form-label">Día:</label>
											            		<div class="col-lg-9">
											            			<select class="form-control form-control-select2" data-fouc>
											            				<option value="Uno">1</option>
											            				<option value="Dos">2</option>
											            				<option value="Tres">3</option>
											            				<option value="Cuatro">4</option>
											            				<option value="Cinco">5</option>
											            				<option value="Seis">6</option>
											            				<option value="Siete">7</option>
											            				<option value="Ocho">8</option>
											            				<option value="Nueve">9</option>
											            				<option value="Diez">10</option>
											            				<option value="<Once">11</option>
											            				<option value="Doce">12</option>
											            				<option value="Trece">13</option>
											            				<option value="Catorce">14</option>
											            				<option value="Quince">15</option>
											            				<option value="Dieciseis">16</option>
											            				<option value="Diecisiete">17</option>
											            				<option value="Dieciocho">18</option>
											            				<option value="Diecinueve">19</option>
											            				<option value="Veinte">20</option>
											            				<option value="<Veintiuno">21</option>
											            				<option value="Veintidos">22</option>
											            				<option value="Veintitres">23</option>
											            				<option value="Veinticuatro">24</option>
											            				<option value="Veinticinco">25</option>
											            				<option value="Veintiseis">26</option>
											            				<option value="Veintisiete">27</option>
											            				<option value="Veintiocho">28</option>
											            				<option value="Veintinueve">29</option>
											            				<option value="Treinta">30</option>
											            				<option value="Treinta y uno">31</option>
											            			</select>
											            		</div>
											            	</div>
											            	<div class="form-group row">
											            		<label class="col-lg-3 col-form-label">Mes:</label>
											            		<div class="col-lg-9">
											            			<select class="form-control form-control-select2" data-fouc>
											            				<option value="UnoM">1</option>
											            				<option value="DosM">2</option>
											            				<option value="TresM">3</option>
											            				<option value="CuatroM">4</option>
											            				<option value="CincoM">5</option>
											            				<option value="SeisM">6</option>
											            				<option value="SieteM">7</option>
											            				<option value="OchoM">8</option>
											            				<option value="NueveM">9</option>
											            				<option value="DiezM">10</option>
											            				<option value="<OnceM">11</option>
											            				<option value="DoceM">12</option>
											            			</select>
											            		</div>
											            	</div>

											            	<div class="form-group row">
											            		<label class="col-lg-3 col-form-label">Año:</label><div class="col-lg-9">
											            			<input type="text" class="form-control" minlength="0" maxlength="0" value="2019" autocomplete="on">
											            		</div>
											            	</div>

											            	<div class="form-group row">
											            		<label class="col-lg-3 col-form-label">Hora:</label>
											            		<div class="col-lg-9">
											            			<select class="form-control form-control-select2" data-fouc>
											            				<option value="UnoH">7:00-7:54</option>
											            				<option value="DosH">7:55-8:49</option>
											            				<option value="TresH">8:50-9:44</option>
											            				<option value="CuatroH">9:45-10:39</option>
											            				<option value="CincoH">11:10-12:04</option>
											            				<option value="SeisH">12:05-12:59</option>
											            				<option value="SieteH">13:00-13:59</option>
											            				<option value="OchoH">14:00-14:59</option>
											            				<option value="NueveH">15:00-15:59</option>
											            			</select>
											            		</div>
											            	</div>
											            	
											            	<div class="text-right">
											            		<button type="submit" class="btn btn-primary">Guardar cambios <i class="icon-paperplane ml-2"></i></button>
											            	</div>
											            </form>
										            </div>
									            </div>
									        </div>	
									    </div>
										<div class="modal-footer">
											<button class="btn btn-warning" type="button" data-dismiss="modal">Cerrar</button>
										</div>										
									</div>
								</div>
							</div>

							<!--Creando tercer modal -->
							<div class="modal fade" id="modalTres" tabindex="-1" role="dialog" aria-labelledby="tituloVentana" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 id="tituloVentana">Eliminar tutoría</h5>
											<button class="close" data-dismiss="modal" aria-label="Cerrar">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">

											<div class="alert alert-success">
												<div class="form-group row">
										           
										            <div class="col-lg-9">

											             <div class="card-header header-elements-inline">
											            	<h5 class="card-title">Identificación de usuario</h5>
											            </div>

											            <form action="#">

											            	<div class="form-group row">
											            		<label class="col-lg-3 col-form-label">Nombre de usuario:</label>

											            		<div class="col-lg-9">
											            			<input type="text" class="form-control" minlength="7" maxlength="7" required pattern="[0-9]+" placeholder="Matrícula o clave de profesor">
											            		</div>
											            	</div>

											            	<div class="form-group row">
											            		<label class="col-lg-3 col-form-label">Contraseña:</label>
											            		<div class="col-lg-9">
											            			<input type="password" class="form-control" required placeholder="Chris_B/12" minlength="4" maxlength="12"> 
											            		</div>
											            	</div>

											            	<div class="text-right">
											            		<button class="btn btn-warning" type="button" data-dismiss="modal">Confirmar eliminación</button>
											            	</div>
											            </form>
										            </div>
									            </div>
									        </div>	
									    </div>
										<div class="modal-footer">
											<button class="btn btn-success" type="button" data-dismiss="modal">Cancelar</button>
										</div>										
									</div>
								</div>
							</div>

							<!--Creando segundo modal -->
							<div class="modal fade" id="modalDos" tabindex="-1" role="dialog" aria-labelledby="tituloVentana" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 id="tituloVentana">Eliminar tutoría</h5>
											<button class="close" data-dismiss="modal" aria-label="Cerrar">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">

											<div class="alert alert-success">
												<div class="form-group row">
										           
										            <div class="col-lg-9">
											            <h5>¿Estás seguro de que deseas eliminar esta tutoría?</h5>
											            <br>

											            <div class="text-right">
											            	<button class="btn btn-warning" data-toggle="modal" data-target="#modalTres" data-dismiss="modal">Sí, eliminar</button>
											            	<button class="btn btn-success" type="button" data-dismiss="modal">No, cancelar</button>	
											            </div>						
										            </div>
									            </div>
									        </div>	
										</div>
									</div>
								</div>
							</div>

				<!-- Basic datatable -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Listado de tutorías</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<table class="table datatable-basic">
						<thead>
							<tr>
								<th>Opción</th>
								<th>ID</th>
								<th>Tema</th>
								<th>Fecha</th>
								<th>Hora</th>
								<th>Alumno</th>
								<th>Matrícula</th>
								<th>Maestro</th>
								<th>Clave de profesor</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<button class="btn btn-warning" data-toggle="modal" data-target="#modalDos">Eliminar</button>
								</td>
								<td>1</td>
								<td>Funciones</td>
								<td>25/10/2019</td>
								<td>7:00-7:54</td>
								<td>Paulina	Rodríguez</td>
								<td>1111101</td>
								<td>Amalia	Becerra</td>
								<td>2222201</td>
							</tr>

							<tr>
								<td>
									<button class="btn btn-warning" data-toggle="modal" data-target="#modalDos">Eliminar</button>
								</td>
								<td>2</td>
								<td>Interfaz de línea de comandos</td>
								<td>25/10/2019</td>
								<td>7:55-8:49</td>
								<td>Juan Pérez</td>
								<td>1111102</td>
								<td>Camila	Dorantes</td>
								<td>2222202</td>
							</tr>

							<tr>
								<td>
									<button class="btn btn-warning" data-toggle="modal" data-target="#modalDos">Eliminar</button>
								</td>
								<td>3</td>
								<td>Sistema binario</td>
								<td>25/10/2019</td>
								<td>8:50-9:44</td>
								<td>América	Barrón</td>
								<td>1111103</td>
								<td>Emilio	Fernández</td>
								<td>2222203</td>
							</tr>

							<tr>
								<td>
									<button class="btn btn-warning" data-toggle="modal" data-target="#modalDos">Eliminar</button>
								</td>
								<td>4</td>
								<td>Modelo de Bohr</td>
								<td>25/10/2019</td>
								<td>9:45-10:39</td>
								<td>Carlos	Domínguez</td>
								<td>1111104</td>
								<td>Gerardo	Herrera</td>
								<td>2222204</td>
							</tr>

							<tr>
								<td>
									<button class="btn btn-warning" data-toggle="modal" data-target="#modalDos">Eliminar</button>
								</td>
								<td>5</td>
								<td>Reglas de acentuación</td>
								<td>25/10/2019</td>
								<td>11:10-12:04</td>
								<td>Esteban	Fuentes</td>
								<td>1111105</td>
								<td>Imelda	Jimenez</td>
								<td>2222205</td>
							</tr>

							<tr>
								<td>
									<button class="btn btn-warning" data-toggle="modal" data-target="#modalDos">Eliminar</button>
								</td>
								<td>6</td>
								<td>Vectores</td>
								<td>25/10/2019</td>
								<td>12:05-12:59</td>
								<td>Gabriela Higuera</td>
								<td>1111106</td>
								<td>Kennia	Linares</td>
								<td>2222206</td>
							</tr>

							<tr>
								<td>
									<button class="btn btn-warning" data-toggle="modal" data-target="#modalDos">Eliminar</button>
								</td>
								<td>7</td>
								<td>Productos notables</td>
								<td>25/10/2019</td>
								<td>13:00-13:59</td>
								<td>Ignacio	Juárezs</td>
								<td>1111107</td>
								<td>Omar Perales</td>
								<td>2222208</td>
							</tr>

							<tr>
								<td>
									<button class="btn btn-warning" data-toggle="modal" data-target="#modalDos">Eliminar</button>
								</td>
								<td>8</td>
								<td>Configuración electrónica</td>
								<td>25/10/2019</td>
								<td>14:00-14:59</td>
								<td>Kevin López</td>
								<td>1111108</td>
								<td>Rosa Sánchez</td>
								<td>2222209</td>
							</tr>

							<tr>
								<td>
									<button class="btn btn-warning" data-toggle="modal" data-target="#modalDos">Eliminar</button>
								</td>
								<td>9</td>
								<td>Uso de word</td>
								<td>25/10/2019</td>
								<td>15:00-15:59</td>
								<td>Esteban Fuentes</td>
								<td>1111105</td>
								<td>Marco Nágera</td>
								<td>2222207</td>
							</tr>

							<tr>
								<td>
									<button class="btn btn-warning" data-toggle="modal" data-target="#modalDos">Eliminar</button>
								</td>
								<td>10</td>
								<td>Tipos de red</td>
								<td>25/10/2019</td>
								<td>15:00-15:59</td>
								<td>Gabriela Higuera</td>
								<td>1111106</td>
								<td>Tomás Velázquez</td>
								<td>2222210</td>
							</tr>								

						</tbody>
					</table>
				</div>
				<!-- /basic datatable -->

					
			</div>
			<!-- /content area -->


			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</span>

					<ul class="navbar-nav ml-lg-auto">
						<li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
						<li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
						<li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
					</ul>
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
