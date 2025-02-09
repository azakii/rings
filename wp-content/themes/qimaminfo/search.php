<?php get_header('inside'); ?>

		<section>
		<div class="bread text-center">
   <div class="container">
	   <h1>البحث</h1>
   </div>
</div>
<div class="container text-center" style="padding:40px 0;">
			<?php if (have_posts()) : ?>

			<article id="post-<?php the_ID(); ?>">
				<h1>Search Results for &ldquo;<?php the_search_query(); ?>&rdquo;</h1>
				<ol>

					<?php while (have_posts()) : the_post(); ?>

					<li>
						<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						<?php the_excerpt(); ?>
					</li>

					<?php endwhile; ?>

				</ol>
			</article>
			<nav>
				<p><?php posts_nav_link('&nbsp;&bull;&nbsp;'); ?></p>
			</nav>

			<?php else : ?>

			<article>
				<h1>Not Found</h1>
				<p>Sorry, but the requested resource was not found on this site.</p>
				<?php get_search_form(); ?>
			</article>

			<?php endif; ?>
</div>
		</section>

<?php get_footer(); ?>