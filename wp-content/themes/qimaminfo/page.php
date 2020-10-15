<?php get_header('inside'); ?>
<div id="insidepage">
<div class="bread text-center">
   <div class="container">
	   <h1><?php the_title(); ?></h1>
   </div>
</div>

  <div class="container">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<section>
			<article id="post-<?php the_ID(); ?>">
				<!-- <header>
					<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				</header> -->
				<div class="title">
					<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				</div>
				<section>
					<?php the_content('Read more on "'.the_title('', '', false).'" &raquo;'); ?>

				</section>
				<footer>
					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				</footer>
			</article>
		</section>

	<?php endwhile; else: ?>

		<section>
			<article>
				<p>Sorry, no posts matched your criteria.</p>
			</article>
		</section>

	<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>