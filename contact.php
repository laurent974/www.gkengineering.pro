<?php /* Template Name: Contact Us */ ?>

<?php get_header(); ?>
  <div class="barba-container" data-namespace="contactpage"><!-- .barba-container -->
    <h1>hello from Contact page</h1>

    <div class="breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/">
    	<?php if(function_exists('bcn_display')) {
    		bcn_display();
    	} ?>
    </div>

    <?php if(ICL_LANGUAGE_CODE=='en'): ?>
      <?php echo do_shortcode('[contact-form-7 id="164" title="English - Contact form"]'); ?>
    <?php elseif(ICL_LANGUAGE_CODE=='fr'): ?>
    ---do something else--
  <?php elseif(ICL_LANGUAGE_CODE=='kh'): ?>
  ---do something else--
    <?php endif; ?>
<?php get_footer(); ?>
