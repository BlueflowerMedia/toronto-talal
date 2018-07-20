<?php get_header(); ?>
<h3>MUSIC</h3>
<div class="music-container">
  <div>.</div>
    <div class="moving-arrow">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">&#8592;</a>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.js"></script>
    </div>
    <a id="text" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Home</a>
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
