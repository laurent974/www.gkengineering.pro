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
                <h3 class="Font-Thin Font-Upper">We are <img class="Logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="GK Engineering" width="150" height="75"></h3>
            </div><!-- /.carousel-caption -->
        </div><!-- /.item -->
        <div class="item"><!-- .item -->
            <img class="item-Hide" src="<?php echo get_template_directory_uri(); ?>/assets/img/slider-2.jpg" data-color="firebrick" alt="Second Image">
            <div class="carousel-caption"><!-- .carousel-caption -->
                <h3 class="Font-Thin Font-Upper">We are <strong>HVAC Engineer</strong></h3>
            </div><!-- /.carousel-caption -->
        </div><!-- /.item -->
        <div class="item"><!-- .item -->
            <img class="item-Hide" src="<?php echo get_template_directory_uri(); ?>/assets/img/slider-3.jpg" data-color="violet" alt="Third Image">
            <div class="carousel-caption"><!-- .carousel-caption -->
                <h3 class="Font-Thin Font-Upper">We are <strong>Electrical Engineer</strong></h3>
            </div><!-- /.carousel-caption -->
        </div><!-- /.item -->
        <div class="item">
            <img class="item-Hide" src="<?php echo get_template_directory_uri(); ?>/assets/img/slider-4.jpg" data-color="lightgreen" alt="Fourth Image">
            <div class="carousel-caption">
                <h3 class="Font-Thin Font-Upper">We are <strong>Plumbing Engineer</strong></h3>
            </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev"><!-- .carousel-control -->
        <img class="arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_arrow_left.png" alt="prev" aria-hidden="true">
        <span class="sr-only">Previous</span>
      </a><!-- /.carousel-control -->
      <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next"><!-- .carousel-control -->
        <img class="arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/ico_arrow_right.png" alt="next" aria-hidden="true">
        <span class="sr-only">Next</span>
      </a><!-- /.carousel-control -->
    </div>

    <ol class="breadcrumb"><!-- .breadcrumb -->
      <li class="breadcrumb-item active">Home</li>
    </ol><!-- /.breadcrumb -->

    <section class="ArticleList"><!-- .ArticleList -->

    </section><!-- /.ArticleList -->

  </div><!-- /!.barba-container -->
<?php get_footer(); ?>
