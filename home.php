<?php /* Template Name: Home */ ?>

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

      <button class="carousel-scrolldown Button"><div class="arrowScroll arrow-1"></div><div class="arrowScroll arrow-2"></div><span class="carousel-scrolldownContent Font-White Font-Light Font-Upper hidden-xs"><?php _e('scroll down', 'page: Home') ?></span></button>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox"><!-- .carousel-inner -->
        <div class="item"><!-- .item -->
            <img class="item-Hide" src="<?php echo get_template_directory_uri(); ?>/assets/img/slider-1.jpg" data-color="lightblue" alt="We are GK Engineering">

            <div class="carousel-caption carousel-caption--bottomRight">
              <h4 class="Font-Bold Font-White"><?php _e('Our CEO, Wilfrid Dutruel worked for French european space center.', 'Page: Home'); ?></h4>
            </div>
        </div><!-- /.item -->
        <div class="item"><!-- .item -->
            <img class="item-Hide" src="<?php echo get_template_directory_uri(); ?>/assets/img/slider-2.jpg" data-color="firebrick" alt="Second Image">
            <div class="carousel-caption"><!-- .carousel-caption -->
                <h3 class="Font-Light Font-Upper"><?php _e("We are", "page: Home") ?> <strong><?php _e('HVAC Engineer', 'Page: Home'); ?></strong></h3>
            </div><!-- /.carousel-caption -->
        </div><!-- /.item -->
        <div class="item"><!-- .item -->
            <img class="item-Hide" src="<?php echo get_template_directory_uri(); ?>/assets/img/slider-3.jpg" data-color="violet" alt="Third Image">
            <div class="carousel-caption"><!-- .carousel-caption -->
                <h3 class="Font-Light Font-Upper"><?php _e("We are", "page: Home") ?> <strong><?php _e('Electrical Engineer', 'Page: Home'); ?></strong></h3>
            </div><!-- /.carousel-caption -->
        </div><!-- /.item -->
        <div class="item">
            <img class="item-Hide" src="<?php echo get_template_directory_uri(); ?>/assets/img/slider-4.jpg" data-color="lightgreen" alt="Fourth Image">
            <div class="carousel-caption">
                <h3 class="Font-Light Font-Upper"><?php _e("We are", "page: Home") ?> <strong><?php _e('Plumbing Engineer', 'Page: Home'); ?></strong></h3>
            </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev"><!-- .carousel-control -->
        <img class="arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_arrow_left.png" alt="prev" aria-hidden="true">
        <span class="sr-only"><?php _e("Previous", "page: Home") ?></span>
      </a><!-- /.carousel-control -->
      <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next"><!-- .carousel-control -->
        <img class="arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_arrow_right.png" alt="next" aria-hidden="true">
        <span class="sr-only"><?php _e("Next", "page: Home") ?></span>
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
          <a class="ProjectBox-Link col-lg-6 col-sm-6" href="<?php echo get_permalink( apply_filters( 'wpml_object_id', 29, 'page' ) ); ?>">
            <article class="ProjectBox-Article"><!-- .ProjectBox-Article -->
              <span class="ProjectBox-LittleTitle Font-Thin"><?php _e("What we do", "page: Home") ?></span>
              <h2 class="Title Title-Blue Font-Bold"><?php echo get_field("what_we_do"); ?></h2>
              <?php
                $img = get_field("what_we_do_image");
                echo wp_get_attachment_image( $img, "full", false, array('class'=>'ProjectBox-Image', 'alt'=>get_field("what_we_do")) );
              ?>
            </article><!-- /.ProjectBoc-Article -->
          </a>

          <a class="ProjectBox-Link col-lg-6 col-sm-6" href="<?php echo get_permalink( apply_filters( 'wpml_object_id', 31, 'page' ) ); ?>">
            <article class="ProjectBox-Article"><!-- .ProjectBox-Article -->
              <span class="ProjectBox-LittleTitle Font-Thin"><?php _e("What we are", "page: Home") ?></span>
              <h2 class="Title Title-Blue Font-Bold"><?php echo get_field("what_we_are"); ?></h2>
              <?php
                $img = get_field("what_we_are_-_image");
                echo wp_get_attachment_image( $img, "full", false, array('class'=>'ProjectBox-Image', 'alt'=>get_field("what_we_are")) );
              ?>
            </article><!-- /.ProjectBox-Article -->
          </a>
        </div>
        <div class="row">
          <a class="ProjectBox-Link col-sm-12" href="<?php echo get_permalink( apply_filters( 'wpml_object_id', 4, 'page' ) ); ?>">
            <article class="ProjectBox-Article"><!-- .ProjectBox-Article -->
              <span class="ProjectBox-LittleTitle Font-Thin"><?php _e("What we promise", "page: Home") ?></span>
              <h2 class="Title Title-Blue Font-Bold"><?php echo get_field("what_we_promise"); ?></h2>
            </article><!-- /.ProjectBox-Article -->
          </a>
        </div>
      </div><!-- /.ProjectBox -->
      <div class="row">
        <a class="CompanyBox-Link col-lg-6 col-md-12" href="<?php echo get_permalink( apply_filters( 'wpml_object_id', 33, 'page' ) ); ?>">
          <div class="CompanyBox-Article"><!-- .CompanyBox-Article -->
            <span class="CompanyBox-LittleTitle Font-Thin"><?php _e("About us", "page: Home") ?></span>
            <h2 class="Title Title-Blue Font-Bold"><?php echo get_field("about_us"); ?></h2>
            <?php
              $img = get_field("about_us_-_image");
              echo wp_get_attachment_image( $img, "full", false, array('class'=>'CompanyBox-Image', 'alt'=>get_field("about_us")) );
            ?>
          </div><!-- /.CompanyBox-Article -->
        </a>
      </div>
    </section><!-- /.ArticleList -->

    <section class="Box Citation container"><!-- .Citation -->
      <?php echo get_field("citation"); ?>
    </section><!-- /.Citation -->

    <?php if( have_rows('clients') ): ?>
    <section class="Box ClientList container-fluid row"><!-- .ClientList -->
      <div class="Box-TitleBackground-Gothic">
        <div class="container">
          <h2 class="Title Font-Black Font-White Font-Upper Title-Space"><?php _e("Our clients", "page: Home") ?></h2>
        </div>
      </div>
      <div class="customer-logos slider">
        <?php
          while( have_rows('clients') ): the_row();
            // vars
            $inc++;
            $company = get_sub_field('company_name');
            $function = get_sub_field('company_function');
            $logo = get_sub_field('logo');
            $logo = wp_get_attachment_image_src( $logo, "full" )[0];
            $link = get_sub_field('link');
        ?>
          <div class="slide">
            <img src="<?php echo $logo; ?>" alt="<?php echo $company; ?>">
            <div class="customer-logosCaption">
              <?php
                if ($link) {
                  echo '<a target="_blank" href="' . $link . '">';
                }
              ?>
              <h4 class="Title Font-Upper Font-Black customer-logosCaptionText"><?php echo $company; ?></h4>
              <p class="Font-Light Font-PaleSky customer-logosCaptionText"><?php echo $function; ?></p>
              <?php
                if ($link) echo '</a>';
              ?>
            </div>
          </div>
        <?php
          endwhile;
        ?>
     </div>
    </section><!-- /.ClientList -->
    <?php endif; ?>

    <section class="Box Box--noMargin ProjectStartBox container-fluid"><!-- .ProjectStartBox -->
      <div class="ProjectStartBox-Inner">
        <h3 class="Title Font-Upper Font-White Font-Bold"><?php _e("Ready to start a project with us ?", "page: Home") ?></h3>
        <a href="<?php echo get_permalink( apply_filters( 'wpml_object_id', 46, 'page' ) ); ?>" class="Button Button-Rounded Button-White Font-Upper Font-White"><?php _e("Start a project", "page: Home") ?></a>
      </div>
    </section><!-- /.ProjectStartBox -->
<?php get_footer(); ?>
