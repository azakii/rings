<?php
/*
Template Name: Archives
*/
?>
<?php get_header('inside'); ?>


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section>
			<article id="post-<?php the_ID(); ?>">
				<header>
					<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					<p><?php printf( __( '<span class="sep">Posted on </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a><span class="by-author"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'lang' ),
					esc_url( get_permalink() ),
					esc_attr( get_the_time() ),
					esc_attr( get_the_date( 'c' ) ),
					esc_html( get_the_date() ),
					esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
					esc_attr( sprintf( __( 'View all posts by %s', 'lang' ), get_the_author() ) ),
					get_the_author()
					); ?></p>
				</header>
				<section>
					<h2><?php _e( 'Archives by Month', 'lang' ); ?></h2>
					<ul>
						<?php wp_get_archives('type=monthly'); ?>
					</ul>
					<h2><?php _e( 'Archives by Subject', 'lang' ); ?></h2>
					<ul>
						<?php wp_list_categories(); ?>
					</ul>
					<h2><?php _e( 'Archives by Tag', 'lang' ); ?></h2>
					<?php wp_tag_cloud('format=list&smallest=12px&largest=12px'); ?>

				</section>
				<footer>
					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				</footer>
			</article>
		</section>

	<?php endwhile; else: ?>

		<section>
			<article>
				<p><?php _e( 'Nothing Found', 'lang' ); ?></p>
			</article>
		</section>

	<?php endif; ?>

<?php get_footer(); ?>