<?php /* Template Name: Sitemap */ ?>

<?php get_header(); ?>
  <div class="barba-container Global-WithMargin" data-namespace="teampage"><!-- .barba-container -->
    <div class="breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/"><!-- .breadcrumb -->
    	<?php if(function_exists('bcn_display')) {
    		bcn_display();
    	} ?>
    </div><!-- /.breadcrumb -->

    <section class="Box Box--noMargin Sitemap container-fluid row"><!-- .Sitemap -->
      <div class="Box-TitleBackground-Gothic"><!-- .Box-TitleBackground-Gothic -->
        <div class="container"><!-- .container -->
          <h2 class="Title Font-Black Font-White Font-Upper Title-Space"><?php _e("Sitemap", "Page: Sitemap") ?></h2>
        </div><!-- /.container -->
      </div><!-- /.Box-TitleBackground-Gothic -->

      <div class="container Sitemap-Content"><!-- .Sitemap-Content -->
        <ul><?php wp_list_pages("title_li=" ); ?></ul>        
      </div><!-- /.Sitemap-Content -->
    </section><!-- /.Sitemap -->

<?php get_footer(); ?>
