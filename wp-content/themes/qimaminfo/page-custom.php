<?php
/*
Template Name: Custom Page
*/
?>
<?php get_header('inside'); ?>

<div class="bread text-center">
   <div class="container">
	   <h1><?php the_title(); ?></h1>
   </div>
</div>

<div id="categ">
<div class="container">
<?php

//The Query
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args=array(
   'posts_per_page'=>10,
   'paged'=>$paged,
   );
query_posts($args);

//The Loop ?>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<div class="newsrow" style="padding: 12px 0px;border-bottom: 1px solid #B3C5D4;">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
<small style="float:left; color:#808080; font-weight:normal; "><?php the_category(', '); ?> <?php the_time('F jS, Y') ?></small>
<div class="clear"></div>
</div>

		<?php endwhile; ?>

<div class="catnav">
<?php next_posts_link('الصفحة التالية &raquo;') ?>
<?php previous_posts_link('&laquo; الصفحة السابقة') ?>
</div>

	<?php else : ?>

	لا يوجد

	<?php endif; ?>

<?php
//Reset Query
wp_reset_query();
?>

</div>
</div>

<?php get_footer(); ?>