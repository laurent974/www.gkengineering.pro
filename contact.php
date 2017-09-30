<?php /* Template Name: Contact Us */ ?>

<?php get_header(); ?>
  <div class="barba-container Global-WithMargin" data-namespace="contactpage"><!-- .barba-container -->
    <div class="breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/">
    	<?php if(function_exists('bcn_display')) {
    		bcn_display();
    	} ?>
    </div>

    <section class="Box Box--noMargin ContactUs container-fluid row"><!-- .ContactUs -->
      <div class="Box-TitleBackground-Gothic"><!-- .Box-TitleBackground-Gothic -->
        <div class="container"><!-- .container -->
          <h2 class="Title Font-Black Font-White Font-Upper Title-Space col-md-6"><?php _e("Find Us. Call Us. Meet Us.", "Page: Contact") ?></h2>
          <h2 class="hidden-xs hidden-sm Title Font-Black Font-White Font-Upper Title-Space col-md-6"><?php _e("We listen. Tell us.", "Page: Contact") ?></h2>
        </div><!-- /.container -->
      </div><!-- /.Box-TitleBackground-Gothic -->

      <div class="container ContactUs-FluidContainerSm"><!-- .container -->
        <div class="col-md-6 Box Box--littleMargin ContactUs-Coord"><!-- .Box -->
          <address class="Address">
            <i class="material-icons">&#xE0C8;</i>
            <div class="Address-Adr">
              <div class="street-address">8AE street 261, Saugkat</div>
              <div class="locality">Boeung salang</div >
              <div class="postal-code">Phnom Penh</div >
              <div class="country-name">Cambodia</div >
            </div>
            <div class="tel"><i class="material-icons">&#xE0D4;</i> +855 (0) 23 987 770</div>
            <div class="email"><i class="material-icons">&#xE0E1;</i> contact@gkengineering.pro</div>
          </address>
        </div><!-- /.Box -->
        <div class="col-md-6 Box Box--littleMargin ContactUs-Form"><!-- .Box -->
          <div class="Box-TitleBackground-Gothic hidden-md hidden-lg"><!-- .Box-TitleBackground-Gothic -->
            <div class="container">
              <h2 class="Title Font-Black Font-White Font-Upper Title-Space col-md-6"><?php _e("We listen. Tell us.", "Page: Contact") ?></h2>
            </div>
          </div><!-- /.Box-TitleBackground-Gothic -->
          <?php if(ICL_LANGUAGE_CODE=='en'): ?>
            <?php echo do_shortcode( '[contact-form-7 id="164" title="English - Contact form"]' ); ?>
          <?php elseif(ICL_LANGUAGE_CODE=='fr'): ?>
            <?php echo do_shortcode( '[contact-form-7 id="176" title="Français - Contact form"]' ) ?>
          <?php elseif(ICL_LANGUAGE_CODE=='kh'): ?>
            <?php echo do_shortcode( '[contact-form-7 id="177" title="Khmer - Contact form"]' ) ?>
          <?php endif; ?>
        </div><!-- /.Box -->
      </div><!-- /.container -->
    </section><!-- /.ContactUs -->

    <div class="Box GMap container-fluid row">
      <div id="map-canvas"></div>
    </div>

    <section class="Box Box--noMargin ProjectStartBox container-fluid"><!-- .ProjectStartBox -->
      <div class="ProjectStartBox-Inner">
        <h3 class="Title Font-Upper Font-White Font-Bold"><?php _e("Ready to start a project with us ?", "Home-Page") ?></h3>
        <a href="<?php echo get_permalink( apply_filters( 'wpml_object_id', 46, 'page' ) ); ?>" class="Button Button-Rounded Button-White Font-Upper Font-White"><?php _e("Start a project", "Home-Page") ?></a>
      </div>
    </section><!-- /.ProjectStartBox -->
<?php get_footer(); ?>
