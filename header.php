<!DOCTYPE html><html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"><?php wp_head() ?>
</head><body class='<?php body_class(); ?>' id='stage'>
<?php include_once("analyticstracking.php") ?>
<header><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img id="logo" src="<?php bloginfo('stylesheet_directory');?>/img/logo.png" alt="ooops buffet"></a>
  <input type="checkbox" id="sidebartoggler">
  <label for="sidebartoggler" class="toggle"><i class="fa fa-bars"></i></label>
  <nav class="sidebar">
    <div class="menu-toogle"><?php wp_nav_menu(array('theme_location' => 'principal')) ?>
    </div>
  </nav>
  <h1 class="text-index namemenu">MENU</h1>
</header>