<?php /* Template Name: Services */ ?>

<?php get_header(); ?>
  <div class="barba-container Global-WithMargin" data-namespace="servicepage"><!-- .barba-container -->
    <div class="breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/">
    	<?php if(function_exists('bcn_display')) {
    		bcn_display();
    	} ?>
    </div>

    <section class="WhatWeDo-Menu"><!-- .WhatWeDo-Menu -->
      <h3 class="Title Font-Blue Font-Upper"><?php _e("What we do", "Page: Services"); ?></h3>
      <ul class="WhatWeDo-MenuList"><!-- .WhatWeDo-MenuList -->
        <li><button class="Button" data-anchor=".Services-ExpertiseBox--mechanical"><?php _e("Mechanical Engineering", "Page: Services"); ?></button></li>
        <li><button class="Button" data-anchor=".Services-ExpertiseBox--electrical"><?php _e("Electrical Engineering", "Page: Services"); ?></button></li>
        <li><button class="Button" data-anchor=".Services-ExpertiseBox--plumbing"><?php _e("Plumbing Engineering", "Page: Services"); ?></button></li>
        <li><button class="Button" data-anchor=".Services-ExpertiseBox--technical"><?php _e("Technical Audits", "Page: Services"); ?></button></li>
      </ul><!-- /.WhatWeDo-MenuList -->
    </section><!-- /.WhatWeDo-Menu -->

    <section class="WhatWeDo-MenuMobile"><!-- .WhatWeDo-MenuMobile -->
      <span class="WhatWeDo-MenuMobile-Title"><?php _e("What we do", "Page: Services"); ?> :</span>
      <select name="WhatWeDo-MenuMobileSelect" id="WhatWeDo-MenuMobileSelect"><!-- #WhatWeDo-MenuMobile -->
        <option value=".Services-ExpertiseBox--mechanical"><?php _e("Mechanical Engineering", "Page: Services"); ?></option>
        <option value=".Services-ExpertiseBox--electrical"><?php _e("Electrical Engineering", "Page: Services"); ?></option>
        <option value=".Services-ExpertiseBox--plumbing"><?php _e("Plumbing Engineering", "Page: Services"); ?></option>
        <option value=".Services-ExpertiseBox--technical"><?php _e("Technical Audits", "Page: Services"); ?></option>
      </select><!-- #WhatWeDo-MenuMobileSelect -->
    </section><!-- /.WhatWeDo-MenuMobile -->

    <section class="Box Box--noMargin Services-WhatWeAre container-fluid row"><!-- .Services-WhatWeAre -->
      <div class="Box-TitleBackground-Gothic"><!-- .Box-TitleBackground-Gothic -->
        <div class="container"><!-- .container -->
          <h2 class="Title Font-Black Font-White Font-Upper Title-Space"><?php _e("What we are", "Page: Services") ?></h2>
        </div><!-- /.container -->
      </div><!-- /.Box-TitleBackground-Gothic -->

      <div class="Services-WhatWeAreImage hidden-xs col-md-6"></div>
      <div class="Services-WhatWeAreContent col-xs-12 col-md-6"><!-- .container -->
        <?php echo get_field( "what_we_are" ); ?>
      </div><!-- /.container -->
    </section><!-- /.Services-WhatWeAre -->

    <section class="Box Box--noMargin Services-Expertise container-fluid row"><!-- .Services-Expertise -->
      <div class="Box-TitleBackground-Gothic"><!-- .Box-TitleBackground-Gothic -->
        <div class="container"><!-- .container -->
          <h2 class="Title Font-Black Font-White Font-Upper Title-Space"><?php _e("Our expertise range", "Page: Services") ?></h2>
        </div><!-- /.container -->
      </div><!-- /.Box-TitleBackground-Gothic -->

      <div class="Services-ExpertiseList"><!-- . Services-ExpertiseList -->

        <article class="Services-ExpertiseBox Services-ExpertiseBox--mechanical"><!-- .Services-ExpertiseBox -->
          <div class="container"><!-- .container -->
            <h2 class="Title Title-Services Title-Space Font-Upper Font-Black Font-White Title--bgRed"><?php _e('Mechanical Engineering', 'Page: Services'); ?></h2>
            <div class="Services-ExpertiseBoxMobileImage"></div>
            <div class="Services-ExpertiseBox-Content"><!-- .Services-ExpertiseBox-Content -->
              <p class="Title Title-Blue Font-Upper Font-Black"><?php _e('Expertise', 'Page: Services'); ?> :</p>
              <?php echo get_field( "mechanical_engineering" ); ?>
            </div><!-- /.Services-ExpertiseBox-Content -->
          </div><!-- /.container -->
        </article><!-- /.Services-ExpertiseBox -->

        <article class="Services-ExpertiseBox Services-ExpertiseBox--electrical"><!-- .Services-ExpertiseBox -->
          <div class="container"><!-- .container -->
            <h2 class="Title Title-Services Title-Space Font-Upper Font-Black Font-White Title--bgRed"><?php _e('Electrical Engineering', 'Page: Services'); ?></h2>
            <div class="Services-ExpertiseBoxMobileImage"></div>
            <div class="Services-ExpertiseBox-Content"><!-- .Services-ExpertiseBox-Content -->
              <p class="Title Title-Blue Font-Upper Font-Black"><?php _e('Expertise', 'Page: Services'); ?> :</p>
              <?php echo get_field( "electrical_engineering" ); ?>
            </div><!-- /.Services-ExpertiseBox-Content -->
          </div><!-- /.container -->
        </article><!-- /.Services-ExpertiseBox -->

        <article class="Services-ExpertiseBox Services-ExpertiseBox--plumbing"><!-- .Services-ExpertiseBox -->
          <div class="container"><!-- .container -->
            <h2 class="Title Title-Services Title-Space Font-Upper Font-Black Font-White Title--bgRed"><?php _e('Plumbing Engineering', 'Page: Services'); ?></h2>
            <div class="Services-ExpertiseBoxMobileImage"></div>
            <div class="Services-ExpertiseBox-Content"><!-- .Services-ExpertiseBox-Content -->
              <p class="Title Title-Blue Font-Upper Font-Black"><?php _e('Expertise', 'Page: Services'); ?> :</p>
              <?php echo get_field( "plumbing_engineering" ); ?>
            </div><!-- /.Services-ExpertiseBox-Content -->
          </div><!-- /.container -->
        </article><!-- /.Services-ExpertiseBox -->

        <article class="Services-ExpertiseBox Services-ExpertiseBox--technical"><!-- .Services-ExpertiseBox -->
          <div class="container"><!-- .container -->
            <h2 class="Title Title-Services Title-Space Font-Upper Font-Black Font-White Title--bgRed"><?php _e('Technical Audits', 'Page: Services'); ?></h2>
            <div class="Services-ExpertiseBoxMobileImage"></div>
            <div class="Services-ExpertiseBox-Content"><!-- .Services-ExpertiseBox-Content -->
              <p class="Title Title-Blue Font-Upper Font-Black"><?php _e('Expertise', 'Page: Services'); ?> :</p>
              <?php echo get_field( "technical_audits" ); ?>
            </div><!-- /.Services-ExpertiseBox-Content -->
          </div><!-- /.container -->
        </article><!-- /.Services-ExpertiseBox -->

      </div><!-- /. Services-ExpertiseList -->
    </section><!-- /.Services-Expertise -->

    <section class="Box Box--littleMargin ProjectStartBox container-fluid"><!-- .ProjectStartBox -->
      <div class="ProjectStartBox-Inner"><!-- .ProjectStartBox-Inner -->
        <h3 class="Title Font-Upper Font-White Font-Bold"><?php _e("Ready to start a project with us ?", "Home-Page") ?></h3>
        <a href="<?php echo get_permalink( apply_filters( 'wpml_object_id', 46, 'page' ) ); ?>" class="Button Button-Rounded Button-White Font-Upper Font-White"><?php _e("Start a project", "Home-Page") ?></a>
      </div><!-- /.ProjectStartBox-Inner -->
    </section><!-- /.ProjectStartBox -->
<?php get_footer(); ?>
