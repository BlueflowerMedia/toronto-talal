<?php get_header(); ?>
  <!-- Section - Main Container -->
  <div class="main-container">
    <!-- Section - Background Video -->
    <div id="myVideo">
      <video playsinline autoplay muted loop >
        <source src="<?php echo get_template_directory_uri(); ?>/videos/videos.mp4" type="video/mp4">
      </video>
    </div>

    <!-- Section - Content -->
    <div class="container-content">
      <div class="talal">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
          <img id="pic-logo" src="<?php echo get_template_directory_uri(); ?>/Images/talal-logo.svg" alt="">
        </a>
        <div class="para">
          <a href="<?php echo get_permalink(get_page_by_path( 'music' )); ?>">Music</a>
          <a href="<?php echo get_permalink(get_page_by_path( 'live' )); ?>">Live</a>
          <a href="<?php echo get_permalink(get_page_by_path( 'contact' )); ?>">Contact</a>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
