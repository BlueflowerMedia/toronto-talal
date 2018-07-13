<?php get_header(); ?>
<div class="bak-pic">
  <img id="pic-logo" src="<?php echo get_template_directory_uri(); ?>/Images/talal-tiled-background.svg" alt="">
</div>
<div class="backpage">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">&#8592;</a>
  <p>Home</p>
</div>
<div class="container-live">
  <?php
      $options = array('scope' => 'upcoming', 'limit' => 10);
      echo gigpress_shows($options);
  ?>
</div>

<?php get_footer(); ?>
