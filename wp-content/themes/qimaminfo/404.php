<?php get_header('inside'); ?>

		<section>
			<article>
				<h1><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'lang' ); ?></h1>
				<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.', 'lang' ); ?></p>
				<?php get_search_form(); ?>
			</article>
		</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>