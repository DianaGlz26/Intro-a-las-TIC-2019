<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Mostrar materias</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="../../../../global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="../../../../global_assets/js/main/jquery.min.js"></script>
	<script src="../../../../global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="../../../../global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/form_layouts.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="index.html" class="d-inline-block">
				<img src="../../../../global_assets/images/logo_light.png" alt="">
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
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
										<span class="d-block text-muted font-size-sm">Lead web developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Will Brason</a>
										<span class="d-block text-muted font-size-sm">Marketing manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-danger"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Hanna Walden</a>
										<span class="d-block text-muted font-size-sm">Project manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Dori Laperriere</a>
										<span class="d-block text-muted font-size-sm">Business developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-warning-300"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
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
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
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
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
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
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
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
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
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
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
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
						<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
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
								<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
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
							<a href="http://localhost/Bootstrap%204/Template/layout_1/LTR/default/full/index2.php" class="nav-link">
								<i class="icon-home4"></i>
								<span>
									Inicio
									<span class="d-block font-weight-normal opacity-50">No active orders</span>
								</span>
							</a>
						</li>

					<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Alumnos</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Alumnos">
								<li class="nav-item"><a href="http://localhost/Bootstrap%204/Template/layout_1/LTR/default/full/FormularioAlumnos.php" class="nav-link active">Agregar alumno</a></li>
								<li class="nav-item"><a href="http://localhost/Bootstrap%204/Template/layout_1/LTR/default/full/EditarAlumnos.php" class="nav-link">Editar alumno</a></li>

								<li class="nav-item"><a href="http://localhost/Bootstrap%204/Template/layout_1/LTR/default/full/MostrarAlumnos.php" class="nav-link active">Mostrar alumnos</a></li>
							</ul>
						</li>

						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Maestros</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Maestros">
								<li class="nav-item"><a href="http://localhost/Bootstrap%204/Template/layout_1/LTR/default/full/FormularioMaestros.php" class="nav-link active">Agregar maestro</a></li>
								
								<li class="nav-item"><a href="http://localhost/Bootstrap%204/Template/layout_1/LTR/default/full/EditarMaestros.php" class="nav-link active">Editar maestro</a></li>

								<li class="nav-item"><a href="http://localhost/Bootstrap%204/Template/layout_1/LTR/default/full/MostrarMaestros.php" class="nav-link active">Mostrar maestros</a></li>
							</ul>
						</li>

						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Grupos</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Grupos">
								<li class="nav-item"><a href="http://localhost/Bootstrap%204/Template/layout_1/LTR/default/full/FormularioGrupos.php" class="nav-link">Añadir grupo</a></li>
								<li class="nav-item"><a href="http://localhost/Bootstrap%204/Template/layout_1/LTR/default/full/EditarGrupo.php" class="nav-link">Editar grupo</a></li>
								<li class="nav-item"><a href="http://localhost/Bootstrap%204/Template/layout_1/LTR/default/full/MostrarGrupos.php" class="nav-link">Mostrar grupos</a></li>
							</ul>
						</li>

						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Materias</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Materias">
								<li class="nav-item"><a href="http://localhost/Bootstrap%204/Template/layout_1/LTR/default/full/FormularioMaterias.php" class="nav-link">Añadir materia</a></li>
								<li class="nav-item"><a href="http://localhost/Bootstrap%204/Template/layout_1/LTR/default/full/EditarMateria.php" class="nav-link">Editar materia</a></li>
								<li class="nav-item"><a href="http://localhost/Bootstrap%204/Template/layout_1/LTR/default/full/MostrarMaterias.php" class="nav-link">Mostrar materias</a></li>
							
							</ul>
						</li>

						
						<!-- /main -->					
						
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
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Materias</span> - Mostrar materias</h4>
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
							<a href="form_layout_horizontal.html" class="breadcrumb-item">Materias</a>
							<span class="breadcrumb-item active">Mostrar materias</span>
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

				<button class="btn btn-success" data-toggle="modal" data-target="#modalDos">Editar materia</button>

							<!--Creando modal -->
							<div class="modal fade" id="modalDos" tabindex="-1" role="dialog" aria-labelledby="tituloVentana" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 id="tituloVentana">Editar materia</h5>
											<button class="close" data-dismiss="modal" aria-label="Cerrar">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">

											<div class="alert alert-success">
												<div class="form-group row">
										           <label class="col-lg-3 col-form-label">Buscar:</label>
										            <div class="col-lg-9">
											            <input type="text" class="form-control" required pattern="[A-Za-z0-9]+" placeholder="Folio, nombre o clave del maestro impartidor" maxlength="30">
											            <br>
											            <button class="btn btn-success" type="button">Aceptar</button>

											            <br>

											            <form action="#">
											            	<div class="form-group row">
											            		<label class="col-lg-3 col-form-label">Folio:</label>
											            		<div class="col-lg-9">
											            			<input type="text" class="form-control" required pattern="[A-Z0-9]+" placeholder="192A421" minlength="7" maxlength="7"> 
											            		</div>
											            	</div>

											            	<div class="form-group row">
											            		<label class="col-lg-3 col-form-label">Nombre:</label>
											            		<div class="col-lg-9">
											            			<input type="text" class="form-control" required pattern="[A-Z]+" placeholder="Álgebra lineal" maxlength="30">
											            		</div>
											            	</div>

											            	<div class="form-group row">
											            		<label class="col-lg-3 col-form-label">Carrera:</label>
											            		<div class="col-lg-9">
											            			<select class="form-control form-control-select2" data-fouc>

											            				<option value="ITI">Ingeniería en Tecnologías de la Información</option>
											            				<option value="ISA">Ingeniería en Sistemas Automotrices</option>
											            				<option value="PYMES">Licenciatura en Administración y Gestión de Pequeñas y Medianas Empresas</option>
											            				<option value="MECA">Ingeniería en Mecatrónica</option>
											            				<option value="MANU">Ingeniería en Tecnologías de Manufactura</option>
											            			</select>
											            		</div>
											            	</div>

											            	<div class="form-group row">
											            		<label class="col-lg-3 col-form-label">Cuatrimestre:</label>
											            		<div class="col-lg-9">
											            			<select class="form-control form-control-select2" data-fouc>

											            				<option value="1">1°</option>
											            				<option value="2">2°</option>
											            				<option value="3">3°</option>
											            				<option value="4">4°</option>
											            				<option value="5">5°</option>
											            				<option value="6">6°</option>
											            				<option value="7">7°</option>
											            				<option value="8">8°</option>
											            				<option value="9">9°</option>
											            				<option value="10">10°</option>
											            			</select>
											            		</div>
											            	</div>

											            	<div class="form-group row">
											            		<label class="col-lg-3 col-form-label">Maestro (clave):</label>
											            		<div class="col-lg-9">
											            			<input type="text" class="form-control" minlength="7" maxlength="7" required pattern="[0-9]+" placeholder="1927421">
											            		</div>
											            	</div>

											            	<div class="form-group row">
											            		<label class="col-lg-3 col-form-label">Horas (semana):</label>
											            		<div class="col-lg-9">
											            			<input type="text" class="form-control" minlength="1" maxlength="2" required pattern="[0-9]+" placeholder="5">
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

				<!-- Basic datatable -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Listado de materias</h5>
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
								<th>Folio</th>
								<th>Nombre</th>
								<th>Carrera</th>
								<th>Cuatrimestre</th>
								<th>Clave del maestro</th>
								<th>Horas semanales</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><button class="btn btn-warning" type="button">Eliminar</button></td>
								<td>192A422</td>
								<td>Introducción a la programación</td>
								<td>Ingeniería en Tecnologías de la Información</td>
								<td>1</td>
								<td>2222201</td>
								<td>6</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td><button class="btn btn-warning" type="button">Eliminar</button></td>
								<td>192B422</td>
								<td>Herramientas ofimáticas</td>
								<td>Ingeniería en Tecnologías de la Información</td>
								<td>1</td>
								<td>2222202</td>
								<td>4</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td><button class="btn btn-warning" type="button">Eliminar</button></td>
								<td>192C422</td>
								<td>Álgebra lineal</td>
								<td>Ingeniería en Mecatrónica</td>
								<td>1</td>
								<td>2222203</td>
								<td>6</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td><button class="btn btn-warning" type="button">Eliminar</button></td>
								<td>192D422</td>
								<td>Química básica</td>
								<td>Ingeniería en Tecnologías de Manufactura</td>
								<td>1</td>
								<td>2222204</td>
								<td>5</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td><button class="btn btn-warning" type="button">Eliminar</button></td>
								<td>192E422</td>
								<td>Expresión oral y escrita</td>
								<td>Ingeniería en Sistemas Automotrices</td>
								<td>1</td>
								<td>2222205</td>
								<td>5</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td><button class="btn btn-warning" type="button">Eliminar</button></td>
								<td>192F422</td>
								<td>Introducción a las TIC'S</td>
								<td>Ingeniería en Tecnologías de la Información</td>
								<td>1</td>
								<td>2222210</td>
								<td>4</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td><button class="btn btn-warning" type="button">Eliminar</button></td>
								<td>192G422</td>
								<td>Inglés I</td>
								<td>Ingeniería en Tecnologías de la Información</td>
								<td>1</td>
								<td>2222211</td>
								<td>5</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td><button class="btn btn-warning" type="button">Eliminar</button></td>
								<td>192H422</td>
								<td>Inglés II</td>
								<td>Ingeniería en Sistemas Automotrices</td>
								<td>2</td>
								<td>2222212</td>
								<td>5</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td><button class="btn btn-warning" type="button">Eliminar</button></td>
								<td>192I422</td>
								<td>Inglés III</td>
								<td>Ingeniería en Tecnologías de Manufactura</td>
								<td>3</td>
								<td>2222213</td>
								<td>5</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							
							<tr>
								<td><button class="btn btn-warning" type="button">Eliminar</button></td>
								<td>192J422</td>
								<td>Inglés IV</td>
								<td>Ingeniería en Mecatrónica</td>
								<td>4</td>
								<td>2222211</td>
								<td>5</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>

						</tbody>
					</table>
				</div>
				<!-- /basic datatable -->

				<!-- Current server load -->
								<div class="card bg-pink-300">
									<div class="card-body">
										<div class="d-flex">
											<h3 class="font-weight-semibold mb-0">5</h3>
											<div class="list-icons ml-auto">
						                		<div class="list-icons-item dropdown">
						                			<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-sync"></i> Actualizar información</a>
														<a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detalles</a>
														<a href="#" class="dropdown-item"><i class="icon-pie5"></i> Estadísticas</a>
													</div>
						                		</div>
					                		</div>
					                	</div>
					                	
					                	<div>
											Moda de las horas de las materias
											<div class="font-size-sm opacity-75">10% del total de horas</div>
										</div>
									</div>

									<div id="server-load"></div>
								</div>
								<!-- /current server load -->

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
