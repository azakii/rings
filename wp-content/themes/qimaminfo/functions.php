<?php

// Run Redux framework
if (!class_exists('ReduxFramework') and file_exists(dirname(__FILE__) . '/admin/ReduxCore/framework.php')) {
    require_once(dirname(__FILE__) . '/admin/ReduxCore/framework.php');
}

// load the theme's options
if (!isset($redux_owd) and file_exists(dirname(__FILE__) . '/admin/sample/sample-config.php')) {
    require_once(dirname(__FILE__) . '/admin/sample/sample-config.php');
}
global $redux_demo;

add_theme_support( 'post-thumbnails' );
load_theme_textdomain( 'lang', get_template_directory() . '/languages' );




if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}




function register_my_menus() {
  register_nav_menus(
    array( 'header-menu' => __( 'القائمة الرئيسية العلوية' ) )
  );
}
add_action( 'init', 'register_my_menus' );


 //  bootstrap add


add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'interactivesms',
		array(
			'labels' => array(
				'name' => __( 'رسائل تفاعلية' ),
				'singular_name' => __( 'interactivesms' ),
				'all_items' => __( 'عرض الكل' ),
				'add_new' => __( 'أضف جديد' ),
				'add_new_item' => __( 'أضف جديد' ),
				'view_item' => __( 'مشاهدة' )
			),
			'public' => true,
			'menu_position' => 5,
			'supports' => array('title','editor','thumbnail','comments')
		)
	);
	register_post_type( 'ringtones',
		array(
			'labels' => array(
				'name' => __( 'نغمات' ),
				'singular_name' => __( 'ringtones' ),
				'all_items' => __( 'عرض الكل' ),
				'add_new' => __( 'أضف جديد' ),
				'add_new_item' => __( 'أضف جديد' ),
				'view_item' => __( 'مشاهدة' )
			),
			'public' => true,
			'menu_position' => 5,
			'supports' => array('title','editor','thumbnail','comments')
		)
	);
}
add_action('admin_head', 'custom_post_types_icons');
function custom_post_types_icons() {
	echo '<style type="text/css">
		#menu-posts-interactivesms .wp-menu-image { background:url(../wp-content/themes/qimaminfo/images/interactivesms.png) right top !important; }
		#menu-posts-interactivesms .wp-menu-image:hover { background-position:bottom !important; }

		#menu-posts-ringtones .wp-menu-image { background:url(../wp-content/themes/qimaminfo/images/ringtones.png) right top !important; }
		#menu-posts-ringtones .wp-menu-image:hover { background-position:bottom !important; }
	</style>';
}




function people_init() {
	register_taxonomy(
		'artists',
		'ringtones',
		array(
			'label' => __( 'المؤدين' ),
			'rewrite' => array( 'slug' => 'artists' )
		)
	);
}
add_action( 'init', 'people_init' );

function ringtonestypes_init() {
	register_taxonomy(
		'ringtonestypes',
		'ringtones',
		array(
			'label' => __( 'الأنواع' ),
			'rewrite' => array( 'slug' => 'ringtonestypes' )
		)
	);
}
add_action( 'init', 'ringtonestypes_init' );





register_sidebar(array(
  'name' => __( 'جمب الأخبار' ),
  'id' => 'right-sidebar',
  'description' => __( 'جمب الأخبار' ),
  'before_title' => '<h1>',
  'after_title' => '</h1>'
));

function pa_admin_area_favicon() {
$favicon_url = get_bloginfo('url') . '/favicon.ico';
echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
}
add_action('admin_head', 'pa_admin_area_favicon');

?>