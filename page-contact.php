<?php get_header(); ?>
<h3>CONTACT</h3>
<div class="contactus-container">
  <div>.</div>
  <div class="moving-arrow">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">&#8592;</a>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.js"></script>
  </div>
  <a id="text" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Home</a>

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
