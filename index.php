<?php get_header(); ?>
  <div class="barba-container" data-namespace="homepage"><!-- .barba-container -->
    <!-- SLIDER -->
    <div id="mycarousel" class="carousel slide" data-ride="carousel"><!-- .carousel -->

      <ol class="carousel-indicators"><!-- .carousel-indicators -->
        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
        <li data-target="#mycarousel" data-slide-to="1"></li>
        <li data-target="#mycarousel" data-slide-to="2"></li>
        <li data-target="#mycarousel" data-slide-to="3"></li>
      </ol><!-- /.carousel-indicaors -->

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox"><!-- .carousel-inner -->
        <div class="item"><!-- .item -->
            <img class="item-Hide" src="<?php echo get_template_directory_uri(); ?>/assets/img/slider-1.jpg" data-color="lightblue" alt="We are GK Engineering">
            <div class="carousel-caption"><!-- .carousel-caption -->
                <h3 class="Font-Thin Font-Upper"><img class="Logo-Big" src="<?php echo get_template_directory_uri(); ?>/assets/img/slider-logo.png" alt="GK Engineering" width="474" height="240"></h3>
            </div><!-- /.carousel-caption -->
        </div><!-- /.item -->
        <div class="item"><!-- .item -->
            <img class="item-Hide" src="<?php echo get_template_directory_uri(); ?>/assets/img/slider-2.jpg" data-color="firebrick" alt="Second Image">
            <div class="carousel-caption"><!-- .carousel-caption -->
                <h3 class="Font-Thin Font-Upper"><?php _e("We are", "Home-Page") ?> <strong>HVAC Engineer</strong></h3>
            </div><!-- /.carousel-caption -->
        </div><!-- /.item -->
        <div class="item"><!-- .item -->
            <img class="item-Hide" src="<?php echo get_template_directory_uri(); ?>/assets/img/slider-3.jpg" data-color="violet" alt="Third Image">
            <div class="carousel-caption"><!-- .carousel-caption -->
                <h3 class="Font-Thin Font-Upper"><?php _e("We are", "Home-Page") ?> <strong>Electrical Engineer</strong></h3>
            </div><!-- /.carousel-caption -->
        </div><!-- /.item -->
        <div class="item">
            <img class="item-Hide" src="<?php echo get_template_directory_uri(); ?>/assets/img/slider-4.jpg" data-color="lightgreen" alt="Fourth Image">
            <div class="carousel-caption">
                <h3 class="Font-Thin Font-Upper"><?php _e("We are", "Home-Page") ?> <strong>Plumbing Engineer</strong></h3>
            </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev"><!-- .carousel-control -->
        <img class="arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_arrow_left.png" alt="prev" aria-hidden="true">
        <span class="sr-only"><?php _e("Previous", "Home-Page") ?></span>
      </a><!-- /.carousel-control -->
      <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next"><!-- .carousel-control -->
        <img class="arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_arrow_right.png" alt="next" aria-hidden="true">
        <span class="sr-only"><?php _e("Next", "Home-Page") ?></span>
      </a><!-- /.carousel-control -->
    </div>

    <div class="breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/">
    	<?php if(function_exists('bcn_display')) {
    		bcn_display();
    	} ?>
    </div>

    <section class="Box ArticleList container"><!-- .ArticleList -->
      <div class="ProjectBox col-lg-6 col-sm-12"><!-- .ProjectBox -->
        <div class="row">
          <a class="ProjectBox-Link col-lg-6 col-sm-6" href="#">
            <article class="ProjectBox-Article"><!-- .ProjectBox-Article -->
              <span class="ProjectBox-LittleTitle Font-Thin"><?php _e("What we do", "Home-Page") ?></span>
              <h2 class="Title Title-Blue Font-Bold">Full MEP Design at International Standards of the residential premise</h2>
              <img class="ProjectBox-Image" src="<?php echo get_template_directory_uri(); ?>/assets/img/project-preview1" alt="Full MEP Design at International Standards of the residential premise">
            </article><!-- /.ProjectBoc-Article -->
          </a>

          <a class="ProjectBox-Link col-lg-6 col-sm-6" href="#">
            <article class="ProjectBox-Article"><!-- .ProjectBox-Article -->
              <span class="ProjectBox-LittleTitle Font-Thin"><?php _e("What we are", "Home-Page") ?></span>
              <h2 class="Title Title-Blue Font-Bold">Full MEP Design at International Standards of the residential premise</h2>
              <img class="ProjectBox-Image" src="<?php echo get_template_directory_uri(); ?>/assets/img/project-preview1" alt="Full MEP Design at International Standards of the residential premise">
            </article><!-- /.ProjectBox-Article -->
          </a>
        </div>
        <div class="row">
          <a class="ProjectBox-Link col-sm-12" href="#">
            <article class="ProjectBox-Article"><!-- .ProjectBox-Article -->
              <span class="ProjectBox-LittleTitle Font-Thin"><?php _e("What we promise", "Home-Page") ?></span>
              <h2 class="Title Title-Blue Font-Bold">A quality work for a satisfied client</h2>
            </article><!-- /.ProjectBox-Article -->
          </a>
        </div>
      </div><!-- /.ProjectBox -->
      <div class="row">
        <a class="CompanyBox-Link col-lg-6 col-md-12" href="#">
          <div class="CompanyBox-Article"><!-- .CompanyBox-Article -->
            <span class="CompanyBox-LittleTitle Font-Thin"><?php _e("About us", "Home-Page") ?></span>
            <h2 class="Title Title-Blue Font-Bold">Full MEP Design at International Standards of the residential premise</h2>
            <img class="CompanyBox-Image" src="<?php echo get_template_directory_uri(); ?>/assets/img/project-preview2" alt="Full MEP Design at International Standards of the residential premise">
          </div><!-- /.CompanyBox-Article -->
        </a>
      </div>
    </section><!-- /.ArticleList -->

    <section class="Box Citation container"><!-- .Citation -->
      <h4 class="Title Title-PaleSky Font-Thin Font-Upper">We provide carefully <strong class="Font-Ita">engineered solutions</strong><br />that are cost <strong class="Font-Ita">effective</strong> and <strong class="Font-Ita">technically</strong> responsive<br />to client needs.</h4>
    </section><!-- /.Citation -->

    <section class="Box ClientList container-fluid row"><!-- .ClientList -->
      <div class="Box-TitleBackground-Gothic">
        <div class="container">
          <h2 class="Title Font-Black Font-White Font-Upper Title-Space"><?php _e("Our clients", "Home-Page") ?></h2>
        </div>
      </div>
      <div class="customer-logos slider">
        <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-acleda.jpg"></div>
        <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-acleda.jpg"></div>
        <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-acleda.jpg"></div>
        <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-acleda.jpg"></div>
        <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-acleda.jpg"></div>
        <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-acleda.jpg"></div>
        <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-acleda.jpg"></div>
     </div>
    </section><!-- /.ClientList -->

    <section class="Box Box--noMargin ProjectStartBox container-fluid"><!-- .ProjectStartBox -->
      <div class="ProjectStartBox-Inner">
        <h3 class="Title Font-Upper Font-White Font-Bold"><?php _e("Ready to start a project with us ?", "Home-Page") ?></h3>
        <a href="<?php echo get_permalink( apply_filters( 'wpml_object_id', 46, 'page' ) ); ?>" class="Button Button-Rounded Button-White Font-Upper Font-White"><?php _e("Start a project", "Home-Page") ?></a>
      </div>
    </section><!-- /.ProjectStartBox -->
<?php get_footer(); ?>
