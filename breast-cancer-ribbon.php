<?php
/*
Plugin Name: Breast Cancer Awareness Ribbon
Plugin URI: http://scottkappler.com/wp-plugins-and-more
Description: When activated, this plugin will put a Breast Cancer Awareness Ribbon on the top right corner of your website that links to http://www.facebook.com/BreastCancerAwareness.
Author: Scott Kappler
Version: 1.0
License: GPLv2
Author URI: http://scottkappler.com/wp-plugins-and-more
*/

function render_breast_cancer_ribbon() {
	$ribbon_url = plugins_url( 'breast-cancer-ribbon.png', __FILE__ );
	echo "<a target='_blank' class='breast_cancer_ribbon' http://www.facebook.com/BreastCancerAwareness'><img src='{$ribbon_url}' alt='Breast Cancer Awareness' style='position: fixed; top: 0; right: 0; z-index: 100000; cursor: pointer;' /></a>";
}
add_action( 'wp_footer', 'render_breast_cancer_ribbon' );