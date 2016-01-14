<?php global $smof_data, $us_thumbnail_size;
if (have_posts()) : ?>
	<div class="w-blog imgpos_atleft meta_tagscomments">
		<div class="w-blog-h">
			<div class="w-blog-list">
				<?php
				global $us_thumbnail_size; $us_thumbnail_size = 'portfolio-list';
				while (have_posts())
				{
					the_post();
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
<?php else : ?>
	<?php _e('No posts were found.', 'us'); ?>
<?php endif; ?>