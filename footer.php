      <footer class="Footer"><!-- .Footer -->
        <div class="Footer-Inner container"><!-- .Footer-Inner -->
          <div class="row">
            <section class="col-xs-12 col-md-4 Footer-Box Footer-Info"><!-- .Footer-Box -->
              <address class="Address">
                <i class="material-icons">&#xE0C8;</i>
                <div class="Address-Adr">
                  <div class="street-address">8AE street 261, Saugkat</div>
                  <div class="locality">Boeung salang</div>
                  <div class="postal-code">Phnom Penh</div>
                  <div class="country-name">Cambodia</div>
                </div>
                <div class="tel"><i class="material-icons">&#xE0D4;</i> +855 (0) 23 987 770</div>
                <div class="email"><i class="material-icons">&#xE0E1;</i> contact@gkengineering.pro</div>
              </address>
            </section><!-- /.Footer-Box -->

            <section class="col-xs-12 col-md-4 Footer-Box Footer-Menu"><!-- .Footer-Box -->
              <?php wp_nav_menu( array(
                'menu' => 'menu-footer',
                'walker' => new Footer_Menu
              ) ); ?>
            </section><!-- /.Footer-Box -->

            <section class="col-xs-12 col-md-4 Footer-Box Footer-Social"><!-- .Footer-Box -->
              <h4 class="Title Font-White Font-Bold"><?php _e("Follow Us", "Page: All") ?></h4>
              <div class="Footer-SocialIcons"><!-- .Footer-SocialIcons -->
                <a target="_blank" href="https://fb.me/Gkengineering.pro" class="FooterSocial-Icon FooterSocial-Icon--fb no-barba"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/social-facebook.png" alt="Facebook"></a>
                <a target='_blank' href="https://www.linkedin.com/company/18241688/" class="FooterSocial-Icon FooterSocial-Icon--in no-barba"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/social-linkedin.png" alt="linkedin"></a>
              </div><!-- /.Footer-SocialIcons -->
            </section><!-- /.Footer-Box -->
          </div>
          <span class="col-md-12 Footer-Copyright Font-White Font-Light">
            Copyright © 2017 GKengineering.pro | <?php apply_filters( 'wpml_element_link', 272, 'page', '', '', 'legal-policies' ); ?>
          </span>
        </div><!-- /.Footer-Inner -->
      </footer><!-- /.Footer -->
    </div><!-- /!.barba-container -->
    </main><!-- /!.barba-wrapper -->
  </div><!-- /!.Global -->

  <?php wp_footer(); ?>

  <!-- gMap -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJzT1SMgW1oVenVOqjXm_xON3O7k8f9EE"></script>
  </body>
</html>
