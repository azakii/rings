<?php get_header(); ?>



<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12 col-md-pull-2">
            <div class="about-box">
				<div class="title">
				<h3>عن قمم المعلومات</h3>
				</div>
				
				<p>
				مؤسسة قمم المعلومات هي إحدى مؤسسات مجموعة صدى القمم للإعلام والتقنية ، والتي تقدم خدمات المحتوى للهواتف المتنقلة مثل خدمة الرسائل التفاعلية وخدمة نغمة المتصل ورسائل المجموعات وتطبيقات الهواتف المتنقلة وهي مرخصة من هيئة الاتصالات وتقنية المعلومات  وتربطها عقود من شركات الاتصالات
				</p>
				<a href="#">المزيد</a>
			</div>
            </div>
        </div>
    </div>                                                            
</div>



<div class="interMessage">
    <div class="container">
        <div class="row">
				<div class="title">
				  <h3>خدمه الرسائل التفاعليه</h3>
				</div>

				<div class="owl-carousel owl-theme">


				
																			  
									
			 
														
		
						<div class="item">
					
							<img src="<?php bloginfo('url'); ?>/wp-content/uploads/أدعية-1.jpg" />
																										   
				
											 
							
							<div class="proj">
                                <div class="project-overlay">
								<h4>
								<a href="<?php bloginfo('url'); ?>/?ringtonestypes=%d8%af%d8%b9%d8%a7%d8%a1">أدعية بأصوات ندية</a>
							   </h4>

                                </div>
                            </div>
						</div>
					
					
					<div class="item">
					
							<img src="<?php bloginfo('url'); ?>/wp-content/uploads/موسى-العميرة-02.jpg" />
							
							<div class="proj">
                                <div class="project-overlay">
								<h4>
								<a href="<?php bloginfo('url'); ?>/?artists=%D9%85%D9%88%D8%B3%D9%89-%D8%A7%D9%84%D8%B9%D9%85%D9%8A%D8%B1%D8%A9-%D8%A3%D8%A8%D9%88-%D8%B9%D9%84%D9%8A">نغمات المنشد/ موسى العميرة</a>
							   </h4>

                                </div>
                            </div>
						</div><div class="item">
					
							<img src="<?php bloginfo('url'); ?>/wp-content/uploads/حمد-دغريري.jpg" />
							
							<div class="proj">
                                <div class="project-overlay">
								<h4>
								<a href="<?php bloginfo('url'); ?>/?artists=%D8%AD%D9%85%D8%AF-%D8%A7%D9%84%D8%AF%D8%BA%D8%B1%D9%8A%D8%B1%D9%8A">نغمات الشيخ/ حمد الدغريري</a>
							   </h4>

                                </div>
                            </div>
						</div><div class="item">
					
							<img src="<?php bloginfo('url'); ?>/wp-content/uploads/محمد-القحطاني-02.jpg" />
							
							<div class="proj">
                                <div class="project-overlay">
								<h4>
								<a href="<?php bloginfo('url'); ?>/?artists=%D9%85%D8%AD%D9%85%D8%AF-%D8%A7%D9%84%D9%82%D8%AD%D8%B7%D8%A7%D9%86%D9%8A">نغمات المنشد/ محمد القحطاني</a>
							   </h4>

                                </div>
                            </div>
						</div>
					

						
				</div>
        </div>
    </div>                                                            
</div>




				

<div class="tons">
    <div class="container">
        <div class="row">
			<div class="col-md-6 col-xs-12">
					<div class="title">
					<h3><i class="fa fa-volume-up fa-lg"></i> خدمه نغمات الاتصال</h3>
					<p>..مجموعه مختاره من افضل التصنيفات للاختيار بينها</p>
					</div>

					<div class="dropdown">
						<button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-volume-up fa-lg"></i> تصنيفات النغمات
							<span class="caret pull-left"></span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
						<?php wp_list_categories('taxonomy=ringtonestypes&hide_empty=0&title_li='); //◀ ?>
						</ul>
					</div>
					
			</div>
			<div class="col-md-6 col-xs-12">
					<div class="title">
					<h3><i class="fa fa-user fa-lg"></i> المؤدين</h3>
					<p>مجموعه مختاره من افضل المءدين للاختيار منها..</p>
					</div>
				 
				<div class="dropdown">
						<button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-user fa-lg"></i> المؤدين
							<span class="caret pull-left"></span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
						<?php wp_list_categories('taxonomy=artists&hide_empty=0&title_li='); ?>
						</ul>
					</div>
			</div>
        </div>
    </div>                                                            
</div>


<!-- tab -->

<div class="tapbanel">
	<div class="container">
		<div class="tapbanelbox">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">أحدث النغمات</a></li>
					<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">النغمات الاكثر استماعا</a></li>
					<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">نغمات عشوائيه</a></li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="home">


					<?php
						$args = array( 'post_type' => 'ringtones', 'posts_per_page' => 5 );
						$loop = new WP_Query( $args );
						$i = 0;
						while ( $loop->have_posts()) : $loop->the_post();
						?>
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
									  <a href="<?php the_permalink() ?>" class="lin1">استماع <i class="fa fa-volume-up" aria-hidden="true"></i></a><br>
									 <!-- <a href="<?php the_permalink() ?>#make" class="lin2">فعل النغمه على جوالك <i class="fa fa-check-square-o" aria-hidden="true"></i></a>-->
									</div>
							    </div>
							</div>
							</div>
							<?php endwhile; ?>


						
					</div>
					<div role="tabpanel" class="tab-pane fade" id="profile">
					
					<?php
global $wpdb;
		$views_options = get_option('views_options');
		$where = '';
		$temp = '';
		$output = '';
		$mode = 'ringtones';
		$limit = 5; $chars = 0; $display = true;
		if(!empty($mode) && $mode != 'both') {
			$where = "post_type = '$mode'";
		} else {
			$where = '1=1';
		}
		$most_viewed = $wpdb->get_results("SELECT DISTINCT $wpdb->posts.*, (meta_value+0) AS views FROM $wpdb->posts LEFT JOIN $wpdb->postmeta ON $wpdb->postmeta.post_id = $wpdb->posts.ID WHERE post_date < '".current_time('mysql')."' AND $where AND post_status = 'publish' AND meta_key = 'views' AND post_password = '' ORDER BY views DESC LIMIT $limit");
		if($most_viewed) {
			foreach ($most_viewed as $post) {
				$post_views = intval($post->views);
				$post_title = get_the_title($post);
				if($chars > 0) {
					$post_title = snippet_text($post_title, $chars);
				}
	      //	$post_excerpt = views_post_excerpt($post->post_excerpt, $post->post_content, $post->post_password, $chars);
				$temp .= number_format_i18n($post_views);
				$temp .= $post_title;
				$temp .= $post_excerpt;
				$temp .= $post->post_content;
				$temp .= get_permalink($post);
				
				$arrs = wp_get_post_terms($post->ID,'artists');
				/*
				foreach ( $arrs as $arr ) {
					echo 'Name==>'. $arr->name;
					echo '<br>slug==>'. $arr->slug;
				}
				*/
				$temp .= $arrs[0]->name;
				
				$arrs2 = wp_get_post_terms($post->ID,'ringtonestypes');
				/*
				foreach ( $arrs2 as $arr2 ) {
					echo 'Name==>'. $arr2->name;
					echo '<br>slug==>'. $arr2->slug;
				}
				*/
				$temp .= $arrs2[0]->name;
				
				$temp2 = '';
				

?>
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
									  <a href="<?php the_permalink() ?>" class="lin1">استماع <i class="fa fa-volume-up" aria-hidden="true"></i></a><br>
									  <a href="<?php the_permalink() ?>#make" class="lin2">فعل النغمه على جوالك <i class="fa fa-check-square-o" aria-hidden="true"></i></a>
									</div>
							    </div>
							</div>
							</div>
							<?php


				//$output .= $temp2;
			}
		} else {
			echo '<li>لا يوجد</li>'."\n";
		}
?>


					</div>
	
					<div role="tabpanel" class="tab-pane fade" id="messages">
					<?php
						$args = array( 'post_type' => 'ringtones', 'posts_per_page' => 5, 'orderby' => 'rand' );
						$loop = new WP_Query( $args );
						$i = 0;
						while ( $loop->have_posts()) : $loop->the_post();
						?>
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
									  <a href="<?php the_permalink() ?>" class="lin1">استماع <i class="fa fa-volume-up" aria-hidden="true"></i></a><br>
									  <a href="<?php the_permalink() ?>#make" class="lin2">فعل النغمه على جوالك <i class="fa fa-check-square-o" aria-hidden="true"></i></a>
									</div>
							    </div>
							</div>
							</div>
							<?php endwhile; ?>
					</div>
				</div>

	</div>
  </div>
</div>
<?php

wp_reset_query();
wp_reset_postdata();
?>
<!-- endTab -->
 

<!-- 
<div style="padding-top:15px;">

<div style="float:right; width:630px; padding-left:10px; padding-right: 5px;">
<h2 style="margin: 0px;padding: 0px 0px 10px;color: #195484;border-bottom: 1px solid #195484;">آخر الأخبار</h2>


<?php

wp_reset_query();
wp_reset_postdata();

$args = array( 'post_type' => 'post', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
$i = 0;
while ( $loop->have_posts() && $i < 5 ) : $loop->the_post();
?>

<div class="newsrow" style="padding: 5px 0px;border-bottom: 1px solid #B3C5D4;">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
<small style="float:left; color:#808080; font-weight:normal; font-family:Tahoma;"><?php the_category(', '); ?> <?php the_time('F jS, Y') ?></small>
<div class="clear"></div>
</div>

<?php $i++; endwhile; ?>

<p style="text-align:left;padding-top: 0px; margin-bottom: 2px;"><a href="http://qimam.net/qimaminfo/?page_id=391" style="padding:3px 7px; background:#406dc0; color:#ffffff;">المزيد ←</a></p>

</div>

<div style="float:left; width:316px;">
<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
<div id="nearnews">
<ul>
<?php dynamic_sidebar( 'right-sidebar' ); ?>
</ul>
</div>
<?php endif; ?>
</div>

<div class="clear"></div>

</div> -->

<?php get_footer(); ?>