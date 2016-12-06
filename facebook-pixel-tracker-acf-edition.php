<?php
/**
/*
Plugin Name: Facebook pixel - ACF edition
Plugin URI: https://seedorff.me
Description: ...
Author: Kristian Seedorff
Version: 1.0
Author URI: https://seedorff.me
*/
require_once 'inc/acf_options_page.php';
require_once 'inc/acf_fields.php';

function facebook_pixel() {
	if (get_field( "enable_for_this_page") AND (get_global_option('facebook_pixel_tracking_code')==true)){
?>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '<?php echo get_global_option('facebook_pixel_tracking_code'); ?>');
fbq('track', 'PageView');
<?php 
if (is_page()){
	if(get_field('facebook_pixel_tracking_events')): ?>

	    <?php while(the_repeater_field('facebook_pixel_tracking_events')): ?>
	        fbq('track', '<?php the_sub_field('standard_event'); ?>');
	    <?php endwhile; ?>

	 <?php endif;
 }
?>
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=<?php echo get_global_option('facebook_pixel_tracking_code'); ?>&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
<?php
}
}
add_action( 'wp_head', 'facebook_pixel' );
?>