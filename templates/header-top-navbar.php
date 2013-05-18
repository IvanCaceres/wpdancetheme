<header class="banner navbar navbar-static-top" role="banner">
  <div class="navbar-inner">

    <div class="container">

          <a href="<?php echo home_url(); ?>/"><img src="/dance/wp-content/themes/roots/assets/img/logo.png"/></a>
        <div class="logos">
          <a href="#"><img src="/dance/wp-content/themes/roots/assets/img/fb.png" /></a>
              <a href="#"><img src="/dance/wp-content/themes/roots/assets/img/twitter.png" /></a>
                  <a href="#"><img src="/dance/wp-content/themes/roots/assets/img/youtube.png" /></a>

                <img src="/dance/wp-content/themes/roots/assets/img/iphone.png" />
                <p id="telephone">Give Us A Call
                <span>1-123-456-7890</span>
                </p>


      </div>

      <nav class="nav-main nav-collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
          endif;
        ?>
          <?php get_search_form( $echo ); ?>
      </nav>
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
    </div>
  </div>
</header>
