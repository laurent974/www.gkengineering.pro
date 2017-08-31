<?php /* Template Name: Legal Policies */ ?>

<?php get_header(); ?>
  <div class="barba-container Global-WithMargin" data-namespace="teampage"><!-- .barba-container -->
    <div class="breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/"><!-- .breadcrumb -->
    	<?php if(function_exists('bcn_display')) {
    		bcn_display();
    	} ?>
    </div><!-- /.breadcrumb -->

    <section class="Box Box--noMargin Legal container-fluid row"><!-- .Legal -->
      <div class="Box-TitleBackground-Gothic"><!-- .Box-TitleBackground-Gothic -->
        <div class="container"><!-- .container -->
          <h2 class="Title Font-Black Font-White Font-Upper Title-Space"><?php _e("Legal Policies", "Page: Legal Policies") ?></h2>
        </div><!-- /.container -->
      </div><!-- /.Box-TitleBackground-Gothic -->

      <div class="container Legal-Content"><!-- .Legal-Content -->
        <?php echo the_content(); ?>
      </div><!-- /.Legal-Content -->
    </section><!-- /.Legal -->

<?php get_footer(); ?>
