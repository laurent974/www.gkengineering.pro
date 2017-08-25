<?php /* Template Name: Start a Project*/ ?>

<?php get_header(); ?>
  <div class="barba-container Global-WithMargin" data-namespace="startprojectpage"><!-- .barba-container -->

    <div class="breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/">
    	<?php if(function_exists('bcn_display')) {
    		bcn_display();
    	} ?>
    </div>

    <section class="Box Box--noMargin StartAProjectBox container-fluid row"><!-- .StartAProjectBox -->
      <div class="Box-TitleBackground-Gothic"><!-- .Box-TitleBackground-Gothic -->
        <div class="container"><!-- .container -->
          <h2 class="Title Font-Black Font-White Font-Upper Title-Space col-md-6"><?php _e("Start a Project", "Page: Start a Project") ?></h2>
        </div><!-- /.container -->
      </div><!-- /.Box-TitleBackground-Gothic -->

      <div class="container"><!-- .container -->
        <article class="Box--mediumMargin StartAProjectBox-Introduction"><!-- .StartAProjectBox-Introduction -->
          <?php echo get_field( "introduction" ); ?>
        </article><!-- /.StartAProjectBox-Introduction -->

        <div class="Box--mediumMargin StartAProjectBox-Form"><!-- .StartAProjectBox-Form -->
          <?php if(ICL_LANGUAGE_CODE=='en'): ?>
            <?php echo do_shortcode( '[contact-form-7 id="171" title="English - Start a Project"]' ); ?>
          <?php elseif(ICL_LANGUAGE_CODE=='fr'): ?>
            <?php echo do_shortcode( '[contact-form-7 id="172" title="Français - Start a Project"]' ); ?>
          <?php elseif(ICL_LANGUAGE_CODE=='kh'): ?>
            <?php echo do_shortcode( '[contact-form-7 id="173" title="Khmer - Start a Project"]' ); ?>
          <?php endif; ?>
        </div><!-- /.StartBoxAProject-Form -->
      </div><!-- /.container -->
    </section><!-- /.StartAProjectBox -->
<?php get_footer(); ?>
