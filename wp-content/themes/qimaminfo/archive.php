<?php get_header('inside'); ?>

		<section id="categ">
			
		<?php if (have_posts()) : ?>

			<?php $post = $posts[0]; // hack: set $post so that the_date() works ?>
			<?php if (is_category()) { ?>

				<div class="bread text-center">
					<div class="container">
					  <h1><?php printf( __( 'Category Archives: %s', 'lang' ), '<span>' . single_cat_title() . '</span>' ); ?></h1>
					</div>
				</div>
			
			<?php } elseif (isset($_GET['ringtonestypes'])) { ?>
				<div class="bread text-center">
					<div class="container">
					   <h1><?php echo str_replace("-"," ",$_GET['ringtonestypes']); ?></h1>
					</div>
				</div>

			<?php } elseif (isset($_GET['artists'])) { ?>

				<div class="bread text-center">
					<div class="container">
					   <h1><?php echo str_replace("-"," ",$_GET['artists']); ?></h1>
					</div>
				</div>

			<?php } elseif(is_tag()) { ?>

				<div class="bread text-center">
					<div class="container">
					<h1><?php printf( __( 'Tag Archives: %s', 'lang' ), '<span>' . single_tag_title() . '</span>' ); ?></h1>
					</div>
				</div>
			
			
			<?php } elseif (is_day()) { ?>

				<div class="bread text-center">
					<div class="container">
					  <h1><?php printf( __( 'Daily Archives: %s', 'lang' ), '<span>' . get_the_date() . '</span>' ); ?></h1>
					</div>
				</div>
			

			<?php } elseif (is_month()) { ?>

				<div class="bread text-center">
					<div class="container">
					  <h1><?php printf( __( 'Monthly Archives: %s', 'lang' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'lang' ) ) . '</span>' ); ?></h1>
					</div>
				</div>

			<?php } elseif (is_year()) { ?>

				<div class="bread text-center">
					<div class="container">
					<h1><?php printf( __( 'Yearly Archives: %s', 'lang' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'lang' ) ) . '</span>' ); ?></h1>
					</div>
				</div>

			<?php } elseif (is_author()) { ?>
			<?php $author = get_userdata( get_query_var('author') );?>

			    <div class="bread text-center">
					<div class="container">
					<h1><?php printf( __( 'Author Archives: %s', 'lang' ), '<span>' . $author->display_name . '</span>' ); ?></h1>
					</div>
				</div>

			<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<div class="bread text-center">
					<div class="container">
					<h1><?php _e( 'Blog Archives', 'lang' ); ?></h1>
					</div>
				</div>
			
		<?php } ?>
		<div class="container">

		<div class="contar">
		<?php while (have_posts()) : the_post(); ?>

	
		<div class="ring-item">
		
		<div class="row">
			<div class="col-xs-8">
				<div class="ring-title">
				   <h3>
					   <a href="<?php the_permalink() ?>">
					   <?php the_title(); ?>
						</a>
					</h3>
					<?php the_taxonomies(array('template' => '<span style="display:none;">%s: </span><div class="artistname">%l</div>')); ?>
				</div>
			</div>
			<div class="col-xs-4">
				<div class="ring-link text-left">
				  <a href="<?php the_permalink() ?>#listen" class="lin1">استماع <i class="fa fa-volume-up" aria-hidden="true"></i></a><br>
				  <a href="<?php the_permalink() ?>#make" class="lin2">فعل النغمه على جوالك <i class="fa fa-check-square-o" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
		</div>

			<?php endwhile; ?>

			<nav class="catnav">
				<p><?php posts_nav_link('&nbsp;&bull;&nbsp;'); ?></p>
			</nav>

			<?php else : ?>

			<article>
				<h1><?php _e( 'Nothing Found', 'lang' ); ?></h1>
				<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'lang' ); ?></p>
				<?php //get_search_form(); ?>
			</article>

			<?php endif; ?>
			</div>
			</div>
		</section>

<?php get_footer(); ?>