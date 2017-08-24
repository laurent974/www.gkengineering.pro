      <footer class="Footer"><!-- .Footer -->
        <div class="Footer-Inner container"><!-- .Footer-Inner -->
          <div class="row">
            <section class="col-xs-12 col-md-4 Footer-Box Footer-Info"><!-- .Footer-Box -->
              <address class="Address">
                <i class="material-icons">&#xE0C8;</i>
                <div class="Address-Adr">
                  <div class="street-address">8AE street 261, Saugkat</div>
                  <div class="locality">Boeung salang</div >
                  <div class="postal-code">Phnom Penh</div >
                  <div class="country-name">Cambodia</div >
                </div>
                <div class="tel"><i class="material-icons">&#xE0D4;</i> 061 661 112</div>
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
              <h4 class="Title Font-White Font-Bold">Follow Us</h4>
              <div class="FooterSocial-Icon">F</div>
              <div class="FooterSocial-Icon">In</div>
            </section><!-- /.Footer-Box -->
          </div>
          <span class="col-md-12 Footer-Copyright Font-White Font-Light">
            Copyright © 2017 GKengineering.pro
          </span>
        </div><!-- /.Footer-Inner -->
      </footer><!-- /.Footer -->
    </div><!-- /!.barba-container -->
    </main><!-- /!.barba-wrapper -->
  </div><!-- /!.Global -->

  <?php wp_footer(); ?>

  <!-- gMap -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJzT1SMgW1oVenVOqjXm_xON3O7k8f9EE"></script>

  <!-- A supprimer en prod -->
  <script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.13'><\/script>".replace("HOST", location.hostname));
//]]></script>
  </body>
</html>
