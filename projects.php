<?php /* Template Name: Projects */ ?>

<?php get_header(); ?>
  <div class="barba-container Global-WithMargin" data-namespace="projectspage"><!-- .barba-container -->
    <div class="breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/"><!-- .breadcrumb -->
    	<?php if(function_exists('bcn_display')) {
    		bcn_display();
    	} ?>
    </div><!-- /.breadcrumb -->

    <section class="Box--noMargin Projects-Filter container-fluid row"><!-- .Projects-Filter -->
      <span class=""><?php _e("Filter", "Page: Projects") ?> :</span>
      <ul class="Projects-FilterList"><!-- .Projects-FilterList -->
        <li class="active"><button class="Button js-buttonFilter" data-filter="*"><?php _e('All', "Page: Projects") ?></button></li><span class="Projects-FilterList-Separ">/</span>
        <li><button class="Button js-buttonFilter" data-filter=".energy"><?php _e('Energy Audit', "Page: Projects") ?></button></li><span class="Projects-FilterList-Separ">/</span>
        <li><button class="Button js-buttonFilter" data-filter=".safety"><?php _e('Safety Audit', "Page: Projects") ?></button></li><span class="Projects-FilterList-Separ">/</span>
        <li><button class="Button js-buttonFilter" data-filter=".technical"><?php _e('Technical Audit', "Page: Projects") ?></button></li><span class="Projects-FilterList-Separ">/</span>
        <li><button class="Button js-buttonFilter" data-filter=".mep"><?php _e('MEP Design', "Page: Projects") ?></button></li><span class="Projects-FilterList-Separ">/</span>
        <li><button class="Button js-buttonFilter" data-filter=".fit_out"><?php _e('Fit Out', "Page: Projects") ?></button></li>
      </ul><!-- /.Projects-FilterList -->
    </section><!-- /.Projects-Filter -->

    <section class="Projects-FilterMobile"><!-- .Projects-FilterMobile -->
      <span class="Projects-FilterMobile-Title"><?php _e("Filter", "Page: Projects") ?> :</span>
      <select name="Projects-FilterSelect" id="Projects-FilterSelect"><!-- #Projects-FilterSelect -->
        <option value="*"><?php _e('All', "Page: Projects") ?></option>
        <option value=".energy"><?php _e('Energy Audit', "Page: Projects") ?></option>
        <option value=".safety"><?php _e('Safety Audit', "Page: Projects") ?></option>
        <option value=".technical"><?php _e('Technical Audit', "Page: Projects") ?></option>
        <option value=".mep"><?php _e('MEP Design', "Page: Projects") ?></option>
        <option value=".fit_out"><?php _e('Fit Out', "Page: Projects") ?></option>
      </select><!-- #Projects-FilterSelect -->
    </section><!-- /.Projects-FilterMobile -->

    <section class="Box--noMargin Projects container-fluid row"><!-- .Projects -->
      <?php if( have_rows('projects') ): ?>
        <?php
        $inc = 0;

        while( have_rows('projects') ): the_row();
          // vars
          if($inc % 2 == 0) {
            $place = "--right";
          } else {
            $place = "";
          }

          $inc++;
          $name = get_sub_field('project_name');
          $background = get_sub_field('background_image');
          $country = get_sub_field('country');
          $city = get_sub_field('city');
          $budget = get_sub_field('budget');
          $description = get_sub_field('description');
          $gallery = get_sub_field('gallery');

          //Format money
          $budget = number_format($budget, 2, ',', ' ');

          //Checkbox
          $types = get_sub_field('type');
          $field = get_sub_field_object('type');
          $filter = "";
          $filterWithoutSepar = "";
          $incField = 0;

          foreach ($types as $choice) {
            if ($incField >= 1) {
              $filter = $filter . ' / ';
              $filterWithoutSepar = $filterWithoutSepar . ' ';
            }
            $filter = $filter . $field["choices"][$choice];
            $filterWithoutSepar = $filterWithoutSepar . str_replace(' ', '_', $choice);
            $incField++;
          }

          //Fix bug ACF WPML -> ne traduit pas les labels de checkbox
          if (ICL_LANGUAGE_CODE == 'fr' || ICL_LANGUAGE_CODE == 'kh') {
            $engWords = array('Energy Audit', 'MEP Design', 'Safety Audit', 'Fit Out', 'Technical Audit');
            $frenchWords   = array(__('Energy Audit', "Page: Projects"), __('MEP Design', "Page: Projects"), __('Safety Audit', "Page: Projects"), __('Fit Out', "Page: Projects"), __('Technical Audit', "Page: Projects"));
            $filter = str_replace($engWords, $frenchWords, $filter);
          }
        ?>
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
                    <?php print_r($gallery[$galleryLoop]) ?>
                    <a rel="gallery-<?php echo $inc; ?>" href="<?php echo $gallery[$galleryLoop][url]; ?>" class="swipebox hide" title="<?php echo $gallery[$galleryLoop][title] . ' - ' . $gallery[$galleryLoop][description]; ?>"></a>
                  <?php } ?>
                  <?php $galleryLoop++; ?>
                <?php endforeach; ?>
              </div>
            </div><!-- /.Projects-Gallery -->
            <?php endif; ?><!-- END Gallery loop -->
      </article><!-- /.ProjectBox -->
      <?php endwhile; ?>
    <?php endif; ?>
    </section><!-- /.Projects -->

    <section class="Box--mediumMargin ProjectStartBox container-fluid"><!-- .ProjectStartBox -->
      <div class="ProjectStartBox-Inner">
        <h3 class="Title Font-Upper Font-White Font-Bold"><?php _e("Ready to start a project with us ?", "Home-Page") ?></h3>
        <a href="<?php echo get_permalink( apply_filters( 'wpml_object_id', 46, 'page' ) ); ?>" class="Button Button-Rounded Button-White Font-Upper Font-White"><?php _e("Start a project", "Home-Page") ?></a>
      </div>
    </section><!-- /.ProjectStartBox -->
<?php get_footer(); ?>
