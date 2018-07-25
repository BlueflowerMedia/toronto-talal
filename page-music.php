<?php get_header(); ?>
<h2 class="music">MUSIC</h4>
<div class="music-container">
  <div>.</div>
  <div id="home-button">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="fas fa-arrow-left"></a>
    <a id="text" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Home</a>
  </div>
  <div class="container-track">
    <?php
    if(have_posts()){
        while(have_posts()){
          the_post();
          the_content();
       }
    }
    ?>
  </div>
</div>
<?php get_footer(); ?>
