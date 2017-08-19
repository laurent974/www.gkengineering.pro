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
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <script type="text/javascript">
      var templateUrl = '<?php echo get_template_directory_uri(); ?>';
    </script>
  </head>
  <body>
    <div class="Global"><!-- .Global -->
      <!-- Animation Div -->
      <div id="bmIn"></div>
      <div id="bmOut"></div>

      <div class="LoaderTransition"><!-- /.LoaderTransition -->
        <div class="LoaderTransition-Inner"><!-- /.LoaderTransition-Inner -->
        </div><!-- /!.LoaderTransition-Inner -->
      </div><!-- /!.LoaderTransition -->

      <a href="<?php echo get_permalink( apply_filters( 'wpml_object_id', 46, 'page' ) ); ?>" class="StartAProject-StickyBar Font-Upper">
        <i class="material-icons">&#xE254;</i> <?php _e("Start a project", "Home-Page") ?>
      </a>

      <nav class="navbar navbar-default navbar-fixed-top" role="navigation"><!-- .navbar -->
        <div class="navbar-inner container-fluid"><!-- .container-fluid -->

          <div class="navbar-header"><!-- .navbar-header -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-menu-1"><!-- .navbar-toggle -->
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button><!-- /.navbar-toggle -->

            <div class="navbar-Lang-Mobile hidden-md"><!-- .navbar-Lang -->
              <?php do_action('wpml_add_language_selector'); ?>
            </div><!-- /.navbar-Lang -->

            <a class="navbar-brand" href="<?php bloginfo('url')?>">
              <img class="Logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="GK Engineering" width="150" height="75">
            </a>
          </div><!-- /!.navbar-header -->
            <?php
              wp_nav_menu( array(
                'menu'              => 'header-menu',
                'depth'             => 0,
                'container'         => false,
                'menu_class'        => 'nav navbar-nav collapse',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
              );
            ?>

            <a href="<?php echo get_permalink( apply_filters( 'wpml_object_id', 46, 'page' ) ); ?>" class="Button Button-Rounded Button-Red Font-Upper Font-Red navbar-StartAProject"><?php _e("Start a project", "Home-Page") ?></a>

            <div class="navbar-Lang pull-right hidden-xs"><!-- .navbar-Lang -->
              <?php do_action('wpml_add_language_selector'); ?>
            </div><!-- /.navbar-Lang -->
          </div><!-- /!.container-fluid -->
      </nav><!-- /!.navbar -->
      <main id="barba-wrapper"><!-- .barba-wrapper -->
