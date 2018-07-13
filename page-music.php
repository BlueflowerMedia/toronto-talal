<?php get_header(); ?>
<div class="bac-pic">
  <img id="pic-logo" src="<?php echo get_template_directory_uri(); ?>/Images/talal-tiled-background.svg" alt="">
</div>
<div class="backpage">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">&#8592;</a>
  <p>Home</p>
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
<?php get_footer(); ?>
