<?php
define('IS_FULLWIDTH', TRUE);
get_header(); ?>
	<div class="l-submain">
		<div class="l-submain-h g-html i-cf">
			<div class="l-content">
				<div class="l-content-h i-widgets">
					<div class="page-404">
						<?php /*<i class="fa fa-compass"></i>
						<h1><?php echo __('Error 404 - page not found', 'us') ?></h1>
						<p><?php echo __('Ohh... You have requested the page that is no longer there', 'us') ?>.<p>*/ ?>
                                                <img src="<?php print get_template_directory_uri(); ?>/img/404.png" width="600"/><br/><br/>
                                                <a href="<?php print  get_home_url(); ?>" class="g-btn type_primary">Back to home page</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>