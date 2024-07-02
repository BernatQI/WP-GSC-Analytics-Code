<?php
/*
 * Plugin Name:       WP Analytics Code
 * Description:       Handle analytics code in <head> (GSC, GA4, Bing Webmaster Tools, etc).
 * Version:           1.0.0
 * Author:            BernatQi
 * Author URI:        https://bernatqi.dev/
 * License:           GPL v2 or later
 * Text Domain:       wp-analytics-code
 */


function wp_analytics_code() {
  // Paste here the HTML code for <head>
  ?>


  <?php
}

add_action( 'wp_head', 'wp_analytics_code' );