<?php get_header(); ?>
<div class="live-container">
  <div>.</div>
  <div class="moving-arrow">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">&#8592; Home</a>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.js"></script>
  </div>
  <div class="container-live">
    <?php
        $options = array('scope' => 'upcoming', 'limit' => 10);
        echo gigpress_shows($options);
    ?>
  </div>
</div>

<?php get_footer(); ?>
