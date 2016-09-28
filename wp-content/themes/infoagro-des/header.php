<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<!-- Charset -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!-- Responsive viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Style.css from theme -->
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/fonts.css">

	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->

	<!-- Title of wp blog -->
	<title><?php bloginfo( 'name' ); ?> <?php wp_title(); ?></title>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper">
		<header>
			<div id="header">
				<nav class="nav-bar">
					<ul class="user-cmds responsive res480 res640 res768">
						<li>
							<a href="#">Registrarme</a>
						</li>
						<li>
							<a href="#">Iniciar Sesión</a>
						</li>
					</ul>
					<ul class="pages float-left">
						<li>
							<a href="#">Empresa</a>
						</li>
						<li>
							<a href="#">Servicio</a>
						</li>
						<li>
							<a href="#">Revista Verde</a>
						</li>
						<li>
							<a href="#">Revista ANPL</a>
						</li>
						<li>
							<a href="#">Contacto</a>
						</li>
					</ul>
					<ul class="user-cmds float-right responsive res1024 res1280 res1280-more">
						<li>
							<a href="#">Registrarme</a>
						</li>
						<li>
							<a href="#">Iniciar Sesión</a>
						</li>
					</ul>
				</nav>
				<div class="site-title padding-sides padding-up-down">
					<div id="logo" class="float-left">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="INFO AGRO">
					</div>
					<div id="header-banner" class="float-right responsive res1280 res1280-more">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/header-banner.jpg" alt="Lea la revista verde online">
					</div>
				</div>
				<nav class="categories-nav padding-sides">
					<ul class="categories">
						<li><a href="#">Inicio</a></li>
						<li><a href="#">Agricultura</a></li>
						<li><a href="#">Ganadería</a></li>
						<li><a href="#">Lechería</a></li>
						<li><a href="#">Forestación</a></li>
						<li><a href="#">Internacionales</a></li>
						<li><a href="#">Empresariales</a></li>
					</ul>
				</nav>
			</div> <!-- #header ends -->
		</header>