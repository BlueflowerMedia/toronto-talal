<?php get_header(); ?>
<div class="music-container">
  <div>.</div>
    <div class="moving-arrow">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">&#8592; Home</a>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.js"></script>
    </div>
  <div class="container-track">
    <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/441489744&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
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
