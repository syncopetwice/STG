<?php
global $smof_data, $us_shortcodes;
define('IS_BLOG', TRUE);
if ($smof_data['blog_sidebar_pos'] == 'No Sidebar') {
	define('IS_FULLWIDTH', TRUE);
}
get_header();

// Disabling Section shortcode
global $disable_section_shortcode;
$disable_section_shortcode = TRUE;
?>
	<div class="l-submain for_pagehead">
		<div class="l-submain-h g-html i-cf">
			<div class="w-pagehead">
				<?php /* If this is a category archive */ if (is_category()) { ?>
				<h1><?php _e('Category Archive for', 'us') ?> &quot;<?php single_cat_title(); ?>&quot; </h1>

				<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h1><?php _e('Posts Tagged', 'us') ?> &quot;<?php single_tag_title(); ?>&quot;</h1>

				<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h1><?php _e('Archive for', 'us') ?> <?php the_time('F jS, Y'); ?></h1>

				<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h1><?php _e('Archive for', 'us') ?> <?php the_time('F, Y'); ?></h1>

				<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h1><?php _e('Archive for', 'us') ?> <?php the_time('Y'); ?></h1>

				<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h1><?php _e('Author Archive', 'us') ?></h1>

				<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h1><?php _e('Blog Archives', 'us') ?></h1>
				<?php } ?>
				<p></p>
				<?php if (rwmb_meta('us_breadcrumbs')) { ?>
					<!-- breadcrums -->
					<div class="g-breadcrumbs">
						
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="l-submain">
		<div class="l-submain-h g-html i-cf">
			<div class="l-content">
				<div class="l-content-h i-widgets">
					<?php
					switch (@$smof_data['archive_layout'])
					{
						case 'Small Image' :
							get_template_part( 'templates/archive_small' );
							break;
						case 'Large Image' :
							get_template_part( 'templates/archive_big' );
							break;
						default : get_template_part( 'templates/archive_small' );
						break;
					}

					?>

				</div>
			</div>
			<div class="l-sidebar at_left">
				<div class="l-sidebar-h i-widgets">
					<?php if ($smof_data['blog_sidebar_pos'] != 'Right') dynamic_sidebar('default_sidebar'); ?>
				</div>
			</div>

			<div class="l-sidebar at_right">
				<div class="l-sidebar-h i-widgets">
					<?php if ($smof_data['blog_sidebar_pos'] == 'Right') dynamic_sidebar('default_sidebar'); ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>