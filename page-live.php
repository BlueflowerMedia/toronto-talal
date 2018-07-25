<?php get_header(); ?>
<h2 class="live">LIVE</h5>
<div class="live-container">
  <div>.</div>
  <div id="home-button">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="fas fa-arrow-left"></a>
    <a id="text" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Home</a>
  </div>
  <div class="container-live">
    <?php
        $options = array('scope' => 'upcoming', 'limit' => 10);
        echo gigpress_shows($options);
    ?>
  </div>
</div>

<?php get_footer(); ?>
