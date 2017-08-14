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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.min.css">

    <script type="text/javascript">
      var templateUrl = '<?php echo get_template_directory_uri(); ?>';
    </script>
  </head>
  <body>
    <!-- Animation Div -->
    <div id="bmIn"></div>
    <div id="bmOut"></div>

    <div class="LoaderTransition"><!-- /.LoaderTransition -->
      <div class="LoaderTransition-Inner"><!-- /.LoaderTransition-Inner -->
        Loading ...
      </div><!-- /!.LoaderTransition-Inner -->
    </div><!-- /!.LoaderTransition -->

    <nav class="navbar navbar-default" role="navigation"><!-- .navbar -->
      <div class="container-fluid"><!-- .container-fluid -->
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header"><!-- .navbar-header -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><!-- .navbar-toggle -->
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button><!-- /.navbar-toggle -->
          <a class="navbar-brand" href="<?php bloginfo('url')?>">
            <?php bloginfo('name'); ?>
          </a>
        </div><!-- /!.navbar-header -->
          <?php
            wp_nav_menu( array(
              'menu'              => 'header-menu',
              'depth'             => 2,
              'container'         => false,
              'menu_class'        => 'nav navbar-nav',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker())
            );
          ?>
        </div><!-- /!.container-fluid -->
    </nav><!-- /!.navbar -->
    <main id="barba-wrapper"><!-- .barba-wrapper -->
