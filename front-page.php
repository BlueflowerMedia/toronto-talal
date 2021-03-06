<?php get_header(); ?>

  <!-- Section - Main Container -->
  <div class="main-container">

    <!-- Section - Background Video -->
    <div id="myVideo">
      <video autoplay muted loop >
        <source src="<?php echo get_template_directory_uri(); ?>/videos.mp4" type="video/mp4">
      </video>
    </div>

    <!-- Section - Content -->
    <div class="container-content">
      <div class="talal">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
          <?php echo file_get_contents(get_template_directory_uri()."/talal-logo.svg") ?>

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
