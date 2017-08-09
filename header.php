<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <base href="http://localhost:3000/www.gk-engineering.com/">
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

    <!--[if lt IE 9]>
  	  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  	<![endif]-->
  	<?php wp_head(); ?>
  </head>
  <body>
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    <div id="barba-wrapper">
