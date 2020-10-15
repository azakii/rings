<?php get_header('inside'); ?>
<div id="insidepage">
<div class="bread text-center">
   <div class="container">
	   <h1><?php the_title(); ?></h1>
   </div>
</div>
<div class="container">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section id="typeshow">
			<article id="post-<?php the_ID(); ?>">
				<header id="makeit">
					<h1 style="float:right;"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> &nbsp;<?php the_taxonomies(array('template' => '<span style="display:none;">%s: </span><span class="ringin">%l</span>')); ?></h1>

						<?php if (!$_GET['ringtones'] == "") { ?>
							<div class="dropdown">
							<button id="dLabel" type="button" data-toggle="dropdown" class="form-control" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-user fa-lg"></i> المؤدين
								<span class="caret pull-left"></span>
							</button>
							<ul class="dropdown-menu" aria-labelledby="dLabel">
							<?php wp_list_categories('taxonomy=artists&hide_empty=0&title_li='); ?>
							</ul>
						</div>
						<?php } ?>
					<div class="clear"></div>
				</header>
				<section class="sin-cla">
					<div class="row">
					<div class="col-md-3">
						<?php
						if (has_post_thumbnail( $post->ID ) ):

						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
						echo '<img style="float:left; margin-right:15px; margin-bottom:15px; border:1px solid #e3e3e3;" src="' . $image[0] . '" alt="" />';
						endif; ?>
					</div>
					<div class="col-md-9">
					<?php the_content('Read more on "'.the_title('', '', false).'" &raquo;'); ?>
					</div>

					

<?php if (!$_GET['ringtones'] == "") { ?>
<h1 style="text-align: center; margin-bottom: 20px;">أجعل <?php the_title(); ?> نغمة المتصل</h1>

<div>
<!-- <panel -->
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  
<?php if (!get_field('stc') == "") { ?>
<div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		<?php the_field('stc'); ?>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
	  <h3>صدى STC</h3>
		<ol>
			<li>لتفعيل الخدمة - إذا كانت غير مفعلة - ارسل رسالة تحتوي على الرقم 1616 الى 902</li>
			<li>أرسل 127724 إلى الرقم 1616</li>
			<li>أو اتصل على الرقم 1616</li>
		</ol>
      </div>
    </div>
  </div>
  <?php } ?>


  <?php if (!get_field('mobily') == "") { ?>
  <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		<?php the_field('mobily'); ?>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
	  <h3>رنان موبايلي</h3>
		<ol>
			<li>لتفعيل خدمة رنان أرسل رنان على 1100</li>
			<li> أرسل شراء <?php the_field('mobily'); ?> إلى 1404 </li>
			<li> أرسل عين <?php the_field('mobily'); ?> إلى 1404 </li>
			<li>* او اتصل برقم : 1404</li>
		</ol>
      </div>
    </div>
  </div>
  <?php } ?>


  <?php if (!get_field('zain') == "") { ?>
  <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		<?php the_field('zain'); ?>
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
	  <p>سمعني زين</p>
	  <ol>
			<li> لتفعيل الخدمة أتصل بالرقم 1718</li>
			<li> أرسل <?php the_field('zain'); ?> إلى الرقم 700707</li>
			<li> اتصل بالرقم 1718 لضبط النغمة </li>
      </ol>
      </div>
    </div>
  </div>
  <?php } ?>


</div>

<!-- endpane; -->

<?php if (!get_field('provider1') == "") { ?>
		<div class="col-md-12 col-xs-12">
	<div class="provider">
	<img src="http://qimam.net/qimaminfo/wp-content/uploads/provider1.png" alt="" />
	<h2 style="text-align: center;"><?php the_field('provider1'); ?></h2>
	<p class="howsub" rel="#mies4">طريقة الإشتراك</p>
	<div id="mies4" class="simple_overlay">
	هنا يتم كتابة طريقة الاشتراك
	</div>
	</div>
	</div>
<?php } ?>

<?php if (!get_field('provider2') == "") { ?>
	<div class="col-md-12 col-xs-12">
<div class="provider">
<img src="http://qimam.net/qimaminfo/wp-content/uploads/provider2.png" alt="" />
<h2 style="text-align: center;"><?php the_field('provider2'); ?></h2>
<p class="howsub" rel="#mies5">طريقة الإشتراك</p>
<div id="mies5" class="simple_overlay">
هنا يتم كتابة طريقة الاشتراك
</div>
</div>
</div>
<?php } ?>

<?php if (!get_field('provider3') == "") { ?>
	<div class="col-md-12 col-xs-12">
<div class="provider">
<img src="http://qimam.net/qimaminfo/wp-content/uploads/provider3.png" alt="" />
<h2 style="text-align: center;"><?php the_field('provider3'); ?></h2>
<p class="howsub" rel="#mies6">طريقة الإشتراك</p>
<div id="mies6" class="simple_overlay">
هنا يتم كتابة طريقة الاشتراك
</div>
</div>
</div>
<?php } ?>

<?php if (!get_field('provider4') == "") { ?>
	<div class="col-md-12 col-xs-12">
<div class="provider">
<img src="http://qimam.net/qimaminfo/wp-content/uploads/provider4.png" alt="" />
<h2 style="text-align: center;"><?php the_field('provider4'); ?></h2>
<p class="howsub" rel="#mies7">طريقة الإشتراك</p>
<div id="mies7" class="simple_overlay">
هنا يتم كتابة طريقة الاشتراك
</div>
</div>
</div>
<?php } ?>

<?php if (!get_field('provider5') == "") { ?>
	<div class="col-md-12 col-xs-12">
<div class="provider">
<img src="http://qimam.net/qimaminfo/wp-content/uploads/provider5.png" alt="" />
<h2 style="text-align: center;"><?php the_field('provider5'); ?></h2>
<p class="howsub" rel="#mies8">طريقة الإشتراك</p>
<div id="mies8" class="simple_overlay">
هنا يتم كتابة طريقة الاشتراك
</div>
</div>
</div>
<?php } ?>

<?php if (!get_field('provider6') == "") { ?>
	<div class="col-md-12 col-xs-12">
<div class="provider">
<img src="http://qimam.net/qimaminfo/wp-content/uploads/provider6.png" alt="" />
<h2 style="text-align: center;"><?php the_field('provider6'); ?></h2>
<p class="howsub" rel="#mies9">طريقة الإشتراك</p>
<div id="mies9" class="simple_overlay">
هنا يتم كتابة طريقة الاشتراك
</div>
</div>
</div>
<?php } ?>

<div style="clear:both;"></div>

</div>

<?php } ?>

<?php
if (!get_field('url_ringtone') == "") {
?>
<p style="color:#9c9c9c; text-align:center; margin-top:0px; padding-top:30px;" id="listen">استمع إلى نغمة <?php the_title(); ?></p>
<audio src="<?php the_field('url_ringtone'); ?>" preload="auto" />
<?php
}
?>

<div class="clear"></div>
</div>
				</section>
				<footer>
<p style="color:#9c9c9c; text-align:center; margin-top:0px; padding-top:30px;">الزيارات <?php if(function_exists('the_views')) { the_views(); } ?></p>
					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				</footer>
			</article>

			<?php comments_template(); ?>

			<!--<nav>
				<p><?php previous_post_link(); ?> &bull; <?php next_post_link(); ?></p>
			</nav>-->
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