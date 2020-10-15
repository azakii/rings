<?php
/**
 * Template name: تواصل معنا
 */
get_header('inside');

global $redux_demo;
?>

<div class="bread text-center">
   <div class="container">
	   <h1><?php the_title(); ?></h1>
   </div>
</div>

<div class="contact">
   <div class="container">
      <div class="row">
            <div class="col-md-6 col-xs-12 col-md-pull-3" >
                <div class="cont-form">
                <div class="title">
			  <h3>راسلنا</h3>
			</div>
                   <?php echo do_shortcode('[contact-form-7 id="374" title="اتصل بنا"]'); ?>
                 </div>  
            </div>
      </div>
   </div>
</div>



<?php get_footer(); ?>