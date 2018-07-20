<?php get_header(); ?>
<h3>LIVE</h3>
<div class="live-container">
  <div>.</div>
  <div class="moving-arrow">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">&#8592;</a>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.js"></script>
  </div>
  <a id="text" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Home</a>
  <div class="container-live">
    <?php
        $options = array('scope' => 'upcoming', 'limit' => 10);
        echo gigpress_shows($options);
    ?>
  </div>
</div>

<?php get_footer(); ?>
