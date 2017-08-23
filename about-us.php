<?php /* Template Name: About-Us */ ?>

<?php get_header(); ?>
  <div class="barba-container Global-WithMargin" data-namespace="aboutpage"><!-- .barba-container -->

    <div class="breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/">
    	<?php if(function_exists('bcn_display')) {
    		bcn_display();
    	} ?>
    </div>

    <section class="Box Box--noMargin AboutUsBox OurCompany container-fluid"><!-- .OurCompany -->
      <div class="Box-Split Box-Split--lightGray Box-Split--left"></div>
      <div class="container"><!-- .container -->
        <article class="AboutUsBox-Content col-md-6"><!-- .AboutUsBox-Content -->
          <h1 class="Title Title-Space Font-Black Font-Upper Font-LightBlue"><?php _e('Our Company','Page: About-Us'); ?></h1>
          <?php echo get_field( "our_company" ); ?>
        </article><!-- /.AboutUsBox-Content -->
      </div><!-- /.container -->
    </section><!-- /.OurCompany -->

    <section class="Box Box--littleMargin AboutUsBox OurMission container-fluid"><!-- .OurCompany -->
      <div class="Box-Split Box-Split--brown Box-Split--right"></div>
      <div class="container"><!-- .container -->
        <article class="AboutUsBox-Content col-md-push-6 col-md-6"><!-- .AboutUsBox-Content -->
          <h1 class="Title Title-Space Font-Black Font-Upper Font-DarkGray"><?php _e('Our Mission','Page: About-Us'); ?></h1>
          <?php echo get_field( "our_mission" ); ?>
        </article><!-- /.AboutUsBox-Content -->
      </div><!-- /.container -->
    </section><!-- /.OurCompany -->

    <section class="Box Box--littleMargin AboutUsBox OurServices container-fluid"><!-- .OurCompany -->
      <div class="Box-Split Box-Split--blue Box-Split--left"></div>
      <div class="container"><!-- .container -->
        <article class="AboutUsBox-Content col-md-6"><!-- .AboutUsBox-Content -->
          <h1 class="Title Title-Space Font-Black Font-Upper Font-White"><?php _e('Our Services','Page: About-Us'); ?></h1>
          <?php echo get_field( "our_services" ); ?>
        </article><!-- /.AboutUsBox-Content -->
      </div><!-- /.container -->
    </section><!-- /.OurCompany -->

    <section class="Box Box--noMargin ProjectStartBox container-fluid"><!-- .ProjectStartBox -->
      <div class="ProjectStartBox-Inner"><!-- .ProjectStartBox-Inner -->
        <h3 class="Title Font-Upper Font-White Font-Bold"><?php _e("Ready to start a project with us ?", "Home-Page") ?></h3>
        <a href="<?php echo get_permalink( apply_filters( 'wpml_object_id', 46, 'page' ) ); ?>" class="Button Button-Rounded Button-White Font-Upper Font-White"><?php _e("Start a project", "Home-Page") ?></a>
      </div><!-- /.ProjectStartBox-Inner -->
    </section><!-- /.ProjectStartBox -->
<?php get_footer(); ?>
