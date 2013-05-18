<footer class="content-info" role="contentinfo" xmlns="http://www.w3.org/1999/html">
  <div class="container">
      <div class="footer">
        <div id="footerabout">
            <h1>About <span>Us</span></h1>
            <p><?php the_field('footer_about_us'); ?></p>
        </div>
        <div id="findus">
            <h1>Find <span>Us</span></h1>
            <a href="#"><img src="/dance/wp-content/themes/roots/assets/img/footer_fb.png" /></a>
            <a href="#"><img src="/dance/wp-content/themes/roots/assets/img/footer_tw.png" /></a>
            <a href="#"><img src="/dance/wp-content/themes/roots/assets/img/footer_youtube.png" /></a>
        </div>
          <div id="footermenu">
          <?php wp_nav_menu( array('menu' => 'Footer Nav' )); ?>
    <p id="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p></div>
  </div></div>
</footer>

<?php wp_footer(); ?>

