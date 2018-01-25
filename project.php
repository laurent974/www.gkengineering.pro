<?php /* Template Name: Project */ ?>
<?php
  $id = $_GET['id'];
  $repeater = get_field('projects', 29);

  $name = $repeater[$id]['project_name'];
  $background = $repeater[$id]['background_image'];
  $country = $repeater[$id]['country'];
  $city = $repeater[$id]['city'];
  $budget = $repeater[$id]['budget'];
  $description = $repeater[$id]['description'];
  $gallery = $repeater[$id]['gallery'];
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <base href="<?php bloginfo('url')?>">
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <!--[if lt IE 9]>
  	  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  	<![endif]-->

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/x-icon">

  	<?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <script type="text/javascript">
      var templateUrl = '<?php echo get_template_directory_uri(); ?>';
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107316274-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments)};
      gtag('js', new Date());

      gtag('config', 'UA-107316274-1');
    </script>

    <!-- Facebook OpenGraph -->
    <meta property="og:url"           content="<?php echo get_permalink( apply_filters( 'wpml_object_id', 558, 'page' ) ); ?>?id=<?php echo $id; ?>" />
    <meta property="og:type"          content="Project" />
    <meta property="og:title"         content="<?php echo $name; ?>" />
    <meta property="og:description"   content="<?php echo  strip_tags($description); ?>" />
    <meta property="og:image"         content="<?php echo $background['url']; ?>" />
    <!-- /Facebook OpenGraph -->
  </head>
  <body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.11';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <script type="text/javascript" src="https://apis.google.com/js/plusone.js">
      {lang: 'en'}
    </script>

    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>

    <div class="Global"><!-- .Global -->
      <!-- Animation Div -->
      <div id="bmIn"></div>
      <div id="bmOut"></div>

      <div class="LoaderTransition"><!-- /.LoaderTransition -->
        <div class="LoaderTransition-Inner"><!-- /.LoaderTransition-Inner -->
          <div class="spinner"><!-- .spinner -->
            <div class="dot1"></div>
            <div class="dot2"></div>
          </div><!-- /.spinner -->
        </div><!-- /!.LoaderTransition-Inner -->
      </div><!-- /!.LoaderTransition -->

      <a href="<?php echo get_permalink( apply_filters( 'wpml_object_id', 46, 'page' ) ); ?>" class="StartAProject-StickyBar Font-Upper">
        <i class="material-icons">&#xE254;</i> <?php _e("Start a project", "Home-Page") ?>
      </a>

      <nav class="navbar navbar-default navbar-fixed-top" role="navigation"><!-- .navbar -->
        <div class="navbar-inner container-fluid"><!-- .container-fluid -->

          <div class="navbar-header"><!-- .navbar-header -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-menu-1"><!-- .navbar-toggle -->
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button><!-- /.navbar-toggle -->

            <div class="navbar-Lang-Mobile hidden-md"><!-- .navbar-Lang -->
              <?php do_action('wpml_add_language_selector'); ?>
            </div><!-- /.navbar-Lang -->

            <a class="navbar-brand" href="<?php bloginfo('url')?>">
              <img class="Logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="GK Engineering" width="187" height="95">
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

            <a href="<?php echo get_permalink( apply_filters( 'wpml_object_id', 46, 'page' ) ); ?>" class="Button Button-Rounded Button-Red Font-Upper Font-Red navbar-StartAProject <?php if (is_page(icl_object_id(46, 'page'))) echo 'active'; ?>"><?php _e("Start a project", "Home-Page") ?></a>

            <div class="navbar-Lang pull-right hidden-xs"><!-- .navbar-Lang -->
              <?php do_action('wpml_add_language_selector'); ?>
            </div><!-- /.navbar-Lang -->
          </div><!-- /!.container-fluid -->
      </nav><!-- /!.navbar -->
      <main id="barba-wrapper"><!-- .barba-wrapper -->
        <div class="barba-container Global-WithMargin" data-namespace="projectspage"><!-- .barba-container -->
          <div class="breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/"><!-- .breadcrumb -->
          	<?php if(function_exists('bcn_display')) {
          		bcn_display();
          	} ?>
          </div><!-- /.breadcrumb -->

           <article class="ProjectsBox ProjectsBox-item <?php echo $filterWithoutSepar; ?>" style="background-image: url('<?php echo $background['url']; ?>')"><!-- .ProjectBox -->
               <div class="Projects-Description Projects-Description<?php echo $place; ?>"><!-- .Projects-Description -->
                 <h2 class="Title Title-Space Font-White Font-Upper Font-Black"><?php echo $name; ?> - <?php echo $country; ?></h2>

                 <p class="Projects-Type Font-Light Font-PaleSky">
                   <?php echo $filter; ?>
                 </p>

                 <p class="Projects-Country Font-Light Font-PaleSky Font-Capitalize"><?php echo $city; ?>, <?php echo $country; ?></p>
                 <?php if ( $budget ): ?>
                   <p class="Projects-Budget Font-Light Font-PaleSky"><?php _e('Budget', 'Page: Projects'); ?>: <?php echo $budget; ?> $</p>
                 <?php endif; ?>
                 <div class="Projects-DescriptionSepar"></div>
                 <div class="Projects-DescriptionContent"><!-- .Projects-DescriptionContent -->
                   <?php echo $description; ?>
                 </div><!-- /.Projects-DescriptionContent -->

                 <?php if ($gallery): ?>
                   <button class="Button Font-White Font-Light Projects-GalleryButton swipebox" rel="gallery-<?php echo $inc; ?>" href="<?php echo $gallery[0][url]; ?>" title="<?php echo $gallery[0][title] . ' - ' . $gallery[0][description]; ?>"><i class="material-icons">&#xE8A7;</i> <?php _e('Images Gallery', 'Page: Projects'); ?></button>
                 <?php endif; ?>
               </div><!-- /.Projects-Description -->

                 <?php if( $gallery ): ?><!-- Start Gallery loop -->
                   <div class="Projects-Gallery"><!-- .Projects-Gallery -->
                   <div class="Projects-GallerySlides">
                     <?php $galleryLoop = 0; ?>
                     <?php foreach( $gallery as $image ): ?>
                       <?php if ($galleryLoop > 0) { ?>
                         <a rel="gallery-<?php echo $inc; ?>" href="<?php echo $gallery[$galleryLoop][url]; ?>" class="swipebox hide" title="<?php echo $gallery[$galleryLoop][title] . ' - ' . $gallery[$galleryLoop][description]; ?>"></a>
                       <?php } ?>
                       <?php $galleryLoop++; ?>
                     <?php endforeach; ?>
                   </div>
                 </div><!-- /.Projects-Gallery -->
                 <?php endif; ?><!-- END Gallery loop -->
           </article><!-- /.ProjectBox -->

           <article class="ProjectsShare">
             <div class="fb-share-button" data-href="<?php echo get_permalink( apply_filters( 'wpml_object_id', 558, 'page' ) ); ?>?id=<?php echo $id; ?>" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink( apply_filters( 'wpml_object_id', 558, 'page' ) ); ?>?id=<?php echo $id; ?>%2F&amp;src=sdkpreparse">Share</a></div>

             <g:plusone size="tall"></g:plusone>

             <a href="http://twitter.com/share" class="twitter-share-button" data-count="vertical" data-via="InfoWebMaster">Tweet</a>

             <script type="IN/Share"></script>
           </article>

          <section class="Box--mediumMargin ProjectStartBox container-fluid"><!-- .ProjectStartBox -->
            <div class="ProjectStartBox-Inner">
              <h3 class="Title Font-Upper Font-White Font-Bold"><?php _e("Ready to start a project with us ?", "Home-Page") ?></h3>
              <a href="<?php echo get_permalink( apply_filters( 'wpml_object_id', 46, 'page' ) ); ?>" class="Button Button-Rounded Button-White Font-Upper Font-White"><?php _e("Start a project", "Home-Page") ?></a>
            </div>
          </section><!-- /.ProjectStartBox -->
<?php get_footer(); ?>
