<?php

/**
 * Broccoli-test Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Broccoli-test
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define('CHILD_THEME_BROCCOLI_TEST_VERSION', '1.0.0');

/**
 * Enqueue styles
 */
function child_enqueue_styles()
{
	wp_enqueue_style('broccoli-test-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_BROCCOLI_TEST_VERSION, 'all');
}

add_action('wp_enqueue_scripts', 'child_enqueue_styles', 15);


// /* footer settings */

// links array
$webFreinds = [
	['IMD_web', 'https://www.algonquincollege.com/mediaanddesign/program/interactive-media-design/'],
	['Broccoli-web', 'https://broccoli-design.great-site.net'],
	['KCSSC', 'https://www.kcssc.org/'],
	['Broccoli-linkedIn', 'https://www.linkedin.com/in/broccolidesign/'],
	['Dialogue', 'https://connectiondialogue.000.pe/'],
	['JFS_Ottawa', 'https://www.jfsottawa.com/']
];

function web_friends(){
	global $webFreinds;
	$i=0;
	while ($i < count($webFreinds)){
		$nord = $webFreinds[$i][0];
		$link = $webFreinds[$i][1];
		echo "<a href='$link'>$nord</a><br>";
		$i++;
	};
};