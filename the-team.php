<?php /* Template Name: The-Team */ ?>

<?php get_header(); ?>
  <div class="barba-container Global-WithMargin" data-namespace="teampage"><!-- .barba-container -->
    <div class="breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/"><!-- .breadcrumb -->
    	<?php if(function_exists('bcn_display')) {
    		bcn_display();
    	} ?>
    </div><!-- /.breadcrumb -->

    <section class="Box Box--noMargin Team container-fluid row"><!-- .Team -->
      <div class="Box-TitleBackground-Gothic"><!-- .Box-TitleBackground-Gothic -->
        <div class="container"><!-- .container -->
          <h2 class="Title Font-Black Font-White Font-Upper Title-Space"><?php _e("Meet the team...", "Page: Team") ?></h2>
        </div><!-- /.container -->
      </div><!-- /.Box-TitleBackground-Gothic -->

      <div class="container Team-Content"><!-- .Team-Content -->
        <article class="CitationBox Box Box--mediumMargin"><!-- .CitationBox -->
          <p class="CitationBox-Content Font-Upper Font-LightBlue Font-Bold Font-Ita"><?php _e("“Successful athletes know the power of having a strong core, no matter what the sport.”", "Page: Team") ?></p>
          <p class="Font-PaleSky Font-Light CitationBox-Author">― <?php _e("Verne Harnish, author of the bestseller Mastering the Rockefeller Habits", "Page: Team"); ?></p>
        </article><!-- /.CitationBox -->

        <?php if( have_rows('team_member') ): ?>
        <div class="container Team-HeadsBox Box--mediumMargin"><!-- .Team-HeadsBox -->
        	<?php
            $inc = 0;

            while( have_rows('team_member') ): the_row();
          		// vars
              $inc++;
              $name = get_sub_field('name');
          		$image = get_sub_field('photo');
              $funImage = get_sub_field('photo_fun');
          		$job = get_sub_field('status');
              $diplomas = get_sub_field('diplomas');
              $projects = get_sub_field('projects');
          ?>
        		<a class="col-lg-3 col-md-4 col-sm-6 col-xs-12 TeamHead" data-toggle="modal" data-target=".js-modal<?php echo $inc; ?>"><!-- .TeamHead -->
              <div class="TeamHead-ImageWrapper">
        				<img class="TeamHead-Image TeamHead-Image--show" src="<?php echo $image['url']; ?>" alt="<?php echo $name ?>" />
                <img class="TeamHead-Image TeamHead-Image--hide" src="<?php echo $funImage['url']; ?>" alt="<?php echo $name ?>" />
              </div>
              <div class="TeamHead-Caption"><!-- .TeamHead-Caption -->
                <h4 class="Title Font-Upper Font-PaleSky Font-Black"><i class="material-icons">&#xE250;</i> <?php echo $name; ?></h4>
                <span class="Font-PaleSky Font-Light Font-Ita"><?php echo $job; ?></span>
              </div><!-- /.TeamHead-Caption -->
        		</a><!-- /.TeamHead -->

            <div class="modal fade js-modal<?php echo $inc; ?>" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
              <div class="modal-dialog  modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title Font-Upper Font-Black Title-Space Font-PaleSky" id="gridSystemModalLabel"><?php echo $name; ?> - <span class="Font-Ita Font-Light"><?php echo $job; ?></span></h4>
                  </div>
                  <div class="modal-body">
                      <div class="row">
                        <div class="col-md-8 modal-col--noPadding">
                          <div class="Box-TitleBackground-Gothic"><!-- .Box-TitleBackground-Gothic -->
                            <div class="container"><!-- .container -->
                              <h2 class="Title Font-Black Font-White Font-Upper Title-Space"><?php _e("Diplomas", "Page: Team") ?></h2>
                            </div><!-- /.container -->
                          </div><!-- /.Box-TitleBackground-Gothic -->

                          <article class="modal-boxContent">
                            <?php echo $diplomas; ?>
                          </article>

                          <div class="Box-TitleBackground-Gothic"><!-- .Box-TitleBackground-Gothic -->
                            <div class="container"><!-- .container -->
                              <h2 class="Title Font-Black Font-White Font-Upper Title-Space"><?php _e("Projects", "Page: Team") ?></h2>
                            </div><!-- /.container -->
                          </div><!-- /.Box-TitleBackground-Gothic -->

                          <article class="modal-boxContent">
                            <?php echo $projects; ?>
                          </article>
                        </div>

                        <div class="col-md-4 modal-imageBox">
                          <div class="TeamHead-ImageWrapper">
                            <img class="TeamHead-Image TeamHead-Image--show" src="<?php echo $image['url']; ?>" alt="<?php echo $name ?>" />
                            <img class="TeamHead-Image TeamHead-Image--hide" src="<?php echo $funImage['url']; ?>" alt="<?php echo $name ?>" />
                          </div>
                        </div>

                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        	<?php endwhile; ?>
        </div><!-- /.Team-HeadsBox -->
        <?php endif; ?>

      </div><!-- /.Team-Content -->
    </section><!-- /.Team -->

    <section class="Box--mediumMargin ProjectStartBox container-fluid"><!-- .ProjectStartBox -->
      <div class="ProjectStartBox-Inner">
        <h3 class="Title Font-Upper Font-White Font-Bold"><?php _e("Ready to start a project with us ?", "Home-Page") ?></h3>
        <a href="<?php echo get_permalink( apply_filters( 'wpml_object_id', 46, 'page' ) ); ?>" class="Button Button-Rounded Button-White Font-Upper Font-White"><?php _e("Start a project", "Home-Page") ?></a>
      </div>
    </section><!-- /.ProjectStartBox -->
<?php get_footer(); ?>
