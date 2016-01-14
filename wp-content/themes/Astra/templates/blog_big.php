<?php global $smof_data, $us_thumbnail_size; ?><div class="w-blog imgpos_attop meta_all">
	<div class="w-blog-h">
		<div class="w-blog-list">

			<?php
			$temp = $wp_query; $wp_query= null;
			$wp_query = new WP_Query(); $wp_query->query('paged='.$paged.'&post_type=post');
			while ($wp_query->have_posts())
			{
				$wp_query->the_post();
				$us_thumbnail_size = 'blog-large';
				get_template_part('templates/blog_single_post');
			}
			?>

		</div>
	</div>
</div>
<div class="w-blog-pagination">
	<?php
	the_posts_pagination( array(
		'prev_text' => '<',
		'next_text' => '>',
		'before_page_number' => '<span>',
		'after_page_number' => '</span>',
	) );
	?>
</div>
<?php
wp_reset_postdata();
$wp_query= $temp;