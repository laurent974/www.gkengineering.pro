<?php /* Template Name: Projects */ ?>

<?php get_header(); ?>
  <div class="barba-container Global-WithMargin" data-namespace="projectpage"><!-- .barba-container -->
    <div class="breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/"><!-- .breadcrumb -->
    	<?php if(function_exists('bcn_display')) {
    		bcn_display();
    	} ?>
    </div><!-- /.breadcrumb -->

    <section class="Box Box--noMargin Projects container-fluid row"><!-- .Projects -->

      <div class="container Projects-Content"><!-- .Projects-Content -->
        <?php if( have_rows('projects') ): ?>
        	<?php
            $inc = 0;

            while( have_rows('projects') ): the_row();
          		// vars
              $inc++;
              $name = get_sub_field('project_name');
          		$background = get_sub_field('background_image');
          		$country = get_sub_field('country');
              $city = get_sub_field('city');
              $budget = get_sub_field('budget');
              $description = get_sub_field('description');
              $gallery = get_sub_field('gallery');

              //Checkbox
              $types = get_sub_field('type');
              $field = get_sub_field_object('type');
              $choices = $field['choices'];
              $incField = 0;

          ?>
        		<div class="col-lg-12 Projects-Description"><!-- .Projects-Description -->
              <?php echo $name; ?> - <?php echo $country; ?>

              <?php foreach ($choices as $value => $label) {
                  if (in_array($value, $types)) {
                    if ($incField >= 1) {
                      echo ' / ';
                    }
                    $incField++;
                    echo $label;
                  }
              } ?>
              <?php echo $city; ?>, <?php echo $country; ?>
              <?php if ( $budget ): ?>
                Budget: <?php echo $budget; ?>
              <?php endif; ?>
              <?php echo $description; ?>
        			<img class="" src="<?php echo $background['url']; ?>" alt="<?php echo $name ?>" />

              <?php if( $gallery ): ?><!-- Start Gallery loop -->
                <ul>
                  <?php foreach( $gallery as $image ): ?>
                    <li>
                      <?php echo $image['title']; ?>
                    	<?php echo wp_get_attachment_image( $image['ID'], "full" ); ?>
                      <?php echo $image['description']; ?>
                    </li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?><!-- END Gallery loop -->
        		</div><!-- /.Projects-Description -->
        	<?php endwhile; ?>
        <?php endif; ?>

      </div><!-- /.Projects-Content -->
    </section><!-- /.Projects -->

    <section class="Box--mediumMargin ProjectStartBox container-fluid"><!-- .ProjectStartBox -->
      <div class="ProjectStartBox-Inner">
        <h3 class="Title Font-Upper Font-White Font-Bold"><?php _e("Ready to start a project with us ?", "Home-Page") ?></h3>
        <a href="<?php echo get_permalink( apply_filters( 'wpml_object_id', 46, 'page' ) ); ?>" class="Button Button-Rounded Button-White Font-Upper Font-White"><?php _e("Start a project", "Home-Page") ?></a>
      </div>
    </section><!-- /.ProjectStartBox -->
<?php get_footer(); ?>
