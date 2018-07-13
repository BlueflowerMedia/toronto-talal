<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blueflowedmedia
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!-- Section - Social Media Icons -->
	<div class="media-icons">
		<a href="https://www.instagram.com/torontotalal/" target="_blank" class="fab fa-instagram fa-animated"></a>
		<a href="https://www.youtube.com/channel/UCN0iDqoV0ySCk91Gm3ZP4lw" target="_blank" class="fab fa-youtube fa-animated"></a>
		<a href="https://open.spotify.com/artist/1XinmmcL7MASIzWiocQdRK" target="_blank" class="fab fa-spotify fa-animated"></a>
		<a href="https://soundcloud.com/torontotalal" target="_blank" class="fab fa-soundcloud fa-animated"></a>
	</div>
	<?php wp_head(); ?>
</head>
