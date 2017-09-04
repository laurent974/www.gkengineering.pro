<?php /* Template Name: Jobs*/ ?>

<?php get_header(); ?>
  <div class="barba-container Global-WithMargin" data-namespace="jobspage"><!-- .barba-container -->
    <div class="breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/">
    	<?php if(function_exists('bcn_display')) {
    		bcn_display();
    	} ?>
    </div>

    <section class="Box Box--noMargin Jobs container-fluid row"><!-- .Jobs -->
      <div class="Box-TitleBackground-Gothic"><!-- .Box-TitleBackground-Gothic -->
        <div class="container"><!-- .container -->
          <h2 class="Title Font-Black Font-White Font-Upper Title-Space"><?php _e("We recrut...", "Page: Jobs") ?></h2>
        </div><!-- /.container -->
      </div><!-- /.Box-TitleBackground-Gothic -->

      <div class="container Jobs-Content"><!-- .container -->

        <?php if( have_rows('job') ): ?>
          <h3 class="Title Title-PaleSky Font-Upper Font-Black Jobs-Title"><?php _e("Jobs open :", "Page: Jobs") ?></h3>
          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false"><!-- .panel-group -->
            <?php
              $inc = 0;

              while( have_rows('job') ): the_row();
                // vars
                $inc++;
                $title = get_sub_field('job_title');
                $job_description = get_sub_field('job_description');
            ?>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading<?php echo $inc ?>">
                  <h4 class="panel-title">
                    <a class="panel-collapseBar" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $inc ?>" aria-expanded="false" aria-controls="collapse<?php echo $inc ?>">
                      <?php echo $title; ?> <i class="material-icons">&#xE145;</i><i class="material-icons" style="display:none;">&#xE15B;</i>
                    </a>
                  </h4>
                </div>
                <div id="collapse<?php echo $inc ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $inc ?>">
                  <div class="panel-body">
                    <?php echo $job_description; ?>

                    <a href="#" class="Button Button-Rounded Button-BlueLight Button-Apply Font-Upper Font-LightBlue no-barba"><?php _e("Apply", "Page: Jobs"); ?></a>
                  </div>
                </div>
              </div>
            <?php
            endwhile;
            // Reset Query
            wp_reset_query();
            ?>
          <?php else: ?>
            <h3 class="Title Title-PaleSky Font-Upper Font-Black Jobs-Title"><?php _e("Recruitment is close :", "Page: Jobs") ?></h3>
            <p class="Jobs-NoOffer Font-Light Font-LightBlue"><?php _e("
Sorry recruitment is currently closed. You can make a spontaneous application, we will study it. Thank you.", "Page: Jobs") ?></p>
          <?php endif; ?>
        </div><!-- /.panel-group -->
      </div><!-- /.container -->
    </section><!-- /.Jobs -->

    <section class="Box Box--noMargin JobsForm container-fluid row"><!-- .JobsForm -->
      <div class="Box-TitleBackground-Gothic"><!-- .Box-TitleBackground-Gothic -->
        <div class="container"><!-- .container -->
          <h2 class="Title Font-Black Font-White Font-Upper Title-Space"><?php _e("Join Us!", "Page: Jobs") ?></h2>
        </div><!-- /.container -->
      </div><!-- /.Box-TitleBackground-Gothic -->

      <div class="container JobsForm-Content"><!-- .container -->
        <?php echo do_shortcode( '[contact-form-7 id="184" title="English - Jobs Form"]' ); ?>
      </div><!-- /.container -->
    </section><!-- /.JobsForm -->

    <section class="Box Box--littleMargin ProjectStartBox container-fluid"><!-- .ProjectStartBox -->
      <div class="ProjectStartBox-Inner"><!-- .ProjectStartBox-Inner -->
        <h3 class="Title Font-Upper Font-White Font-Bold"><?php _e("Ready to start a project with us ?", "Home-Page") ?></h3>
        <a href="<?php echo get_permalink( apply_filters( 'wpml_object_id', 46, 'page' ) ); ?>" class="Button Button-Rounded Button-White Font-Upper Font-White"><?php _e("Start a project", "Home-Page") ?></a>
      </div><!-- /.ProjectStartBox-Inner -->
    </section><!-- /.ProjectStartBox -->
<?php get_footer(); ?>
