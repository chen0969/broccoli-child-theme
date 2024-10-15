<?php

/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

?>
<!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>

<head>
	<?php astra_head_top(); ?>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
	if (apply_filters('astra_header_profile_gmpg_link', true)) {
	?>
		<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php
	}
	?>
	<?php wp_head(); ?>
	<?php astra_head_bottom(); ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
	<?php astra_body_top(); ?>
	<?php wp_body_open(); ?>

	<a
		class="skip-link screen-reader-text"
		href="#content"
		role="link"
		title="<?php echo esc_attr(astra_default_strings('string-header-skip-link', false)); ?>">
		<?php echo esc_html(astra_default_strings('string-header-skip-link', false)); ?>
	</a>

	<div
		<?php
		echo astra_attr(
			'site',
			array(
				'id'    => 'page',
				'class' => 'hfeed site',
			)
		);
		?>>
		<?php
		astra_header_before();
		astra_header();
		astra_header_after();
		?>
		<?php
		astra_content_before();
		?>
		<!-- req 7 -->
		<?php if (!is_front_page() && !is_home()) : ?>
			<div class="container">
				<div class="row">
					<h3 class="col-md-6 col-12">Finds us on social media</h3>
					<button class="col-md-3 col-6"><a href="https://broccoli-design.great-site.net">Portfolio</a></button>
					<button class="col-md-3 col-6"><a href="https://www.algonquincollege.com/mediaanddesign/program/interactive-media-design">IMD page</a></button>
				</div>
			</div>
		<?php endif; ?>
		<!-- end of req 7 -->
		<div id="content" class="site-content">
			<div class="ast-container">
				<?php astra_content_top(); ?>