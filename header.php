<html <?php language_attributes(); ?>>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class = "no-js" lang = ""> <!--<![endif]-->
<!--[if lt IE 9]><script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script><![endif]-->
<head>
	<meta charset = "<?php bloginfo( 'charset' ); ?>">
	<meta name = "viewport" content = "width=device-width">
	<link rel = "pingback" href = "<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel = "icon" href = "<?php bloginfo('stylesheet_directory');?>/img/favicon.png">
	<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href = "<?php bloginfo('stylesheet_url'); ?>" rel = "stylesheet">
	<link href = "<?php bloginfo('stylesheet_directory');?>/css/menu.min.css" rel = "stylesheet" type = "text/css">
	<link href = "<?php bloginfo('stylesheet_directory');?>/css/menu-cardapio.css" rel = "stylesheet" type = "text/css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id = "stage">
	<header>
		<div class = "bg-menu">
		<a href = "<?php echo esc_url( home_url( '/' ) ); ?>"><img id = "logo" src = "<?php bloginfo('stylesheet_directory');?>/img/logo.png" alt = "ooops buffet"></a>
		<input	type = "checkbox" id = "sidebartoggler" name = "" value = "">
			<label class = "toggle" for = "sidebartoggler"><i class = "fa fa-bars"></i></label>
			<nav class = "sidebar">
				<div class = "menu-toogle">
					<?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
				</div>
			</nav>
		</div>
	</header>

	<h1 class = "namemenu hidden-xs">MENU</h1>