<header class="banner m-t-3 m-b-0">
  <div class="container">
    <a class="navbar-brand" href="<?= esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
    <nav class="navbar navbar-light bg-faded pull-xs-right">
      <?php
      if ( has_nav_menu( 'primary_navigation' ) ) :
        wp_nav_menu( [
          'theme_location' => 'primary_navigation',
          'menu_class'     => 'nav navbar-nav',
          'container'      => false
        ] );
      endif;
      ?>
    </nav>
  </div>
</header>
