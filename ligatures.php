<?php

/*
Plugin Name: Ligatures.js
Description: Loads Chip Cullen's Ligatures.js library and provides an interface for applying to a specific set of CSS selectors.
Version: 1.0
Author: Dave Ross
Author URI: http://davidmichaelross.com/
*/

include "ligatures-admin.php";

/**
 * @return void
 */
function ligatures_init() {
  wp_enqueue_script('jquery');
  wp_enqueue_script('ligatures-js', plugin_dir_url(__FILE__).'ligatures.js', 'jquery');
}

function ligatures_head() {
  $options = get_option('ligatures_options');
  $selectors = explode("\n", $options['selectors']);
  
  echo '<script type="text/javascript"> jQuery(function() {'."\n";
  foreach($selectors as $selector) {
  	$selector = trim($selector);
    echo <<<LIG
      jQuery("{$selector}").ligature("fi", "&#xFB01;").ligature("fl", "&#xFB02;").ligature('AE','&AElig;').ligature('ae','&aelig;');\n
LIG;
  }
  echo '});</script>'."\n";
	
}

add_action('init', 'ligatures_init');
add_action('wp_head', 'ligatures_head');
