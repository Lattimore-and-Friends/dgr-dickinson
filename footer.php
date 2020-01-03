<?php
/**
 * The template for displaying the footer
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ben_Theme
 */

?>


  <?php wp_footer(); ?>

  <?php if ( !is_page_template( 'login-template.php' )  && !is_page('account')  && !is_page('members')  && !is_page('password-reset') && !is_page('user')){ ?>
   <footer class="rooms-footer">
    <div class="rooms-container-footer">
      <p class="rooms-footer__contact-us">for any further assistance please contact us</p>
      <div class="rooms-locations">
        <div class="rooms-footer-location">
          <h4 class="rooms-footer-location__city">London</h4>
          <p class="rooms-footer-location__address">Simon C. Dickinson Ltd
            <br> 58 Jermyn Street, London SW1Y 6LX
            <br> Tel: +44 20 7493-0340</p>
        </div>
        <div class="rooms-footer-location">
          <h4 class="rooms-footer-location__city">New York</h4>
          <p class="rooms-footer-location__address">Dickinson Roundell Inc.
            <br> 980 Madison Avenue, New York NY 10075
            <br> Tel: +1 212 772-8083</p>
        </div>
      </div>
      <div class="rooms-footer-links">
        <a class="rooms-footer-links__email" href="mailto:eduardo@simondickinson.com">eduardo@simondickinson.com</a>
        <a class="rooms-footer-links__site" href="http://www.simondickinson.com">www.simondickinson.com</a>
      </div>
    </div>
  </footer>
  </body>
</html>
<?php } ?>  