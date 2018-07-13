<?php get_header(); ?>
<div class="contactus-container">
  <div class="previous-part">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">&#8592;</a>
    <p>Home</p>
  </div>

  <div class="contactForm">
    <div class="text">
      <p id="first">Feel free to contact us for any booking, presss, or other enquiries.</p>
      <p id="second">We will get back to you shortly.</p>
    </div>
    <div class="main-form">
      <div class="main-form-container">
          <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]') ?>
      </div>
    </div>
  </div>

</div>
<?php get_footer(); ?>
