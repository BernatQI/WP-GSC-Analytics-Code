<?php
/*
 * Plugin Name:       WP Analytics Code
 * Description:       Handle analytics code in <head> (GSC, GA4, etc).
 * Version:           1.0.0
 * Author:            BernatQi
 * Author URI:        https://bernatqi.dev/
 * License:           GPL v2 or later
 * Text Domain:       mwp-analytics-code
 */


function wp_analytics_code() {
  // Here the HTML code to <head>
  ?>


<?php
}

add_action( 'wp_head', 'wp_analytics_code' );