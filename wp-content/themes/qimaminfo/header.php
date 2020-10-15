<?php global $redux_demo; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <!-- "H5": The HTML-5 WordPress Template Theme -->
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">


    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/media.css">
    <link rel="alternate" type="text/xml" title="<?php bloginfo('name'); ?> RSS 0.92 Feed"
          href="<?php bloginfo('rss_url'); ?>">
    <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed"
          href="<?php bloginfo('atom_url'); ?>">
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS 2.0 Feed"
          href="<?php bloginfo('rss2_url'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="shortcut icon" href="favicon.ico"/>
    <!-- <script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script> -->
    <script src="<?php bloginfo('template_directory'); ?>/javascript/jquery.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/javascript/bootstrap.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/javascript/h5.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/javascript/owl.carousel.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/jquery.tools.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/javascript/main.js"></script>

    
    <?php wp_enqueue_script('jquery'); ?>
    <?php wp_head(); ?>

    


    

    <style type="text/css">
        /* the overlayed element */
        .simple_overlay {

            /* must be initially hidden */
            display: none;

            /* place overlay on top of other elements */
            z-index: 10000;

            /* styling */
            background-color: #333;

            width: 450px;
            min-height: 200px;
            border: 1px solid #666;
            text-align: right;

            color: #fff;

            padding: 15px 83px;

            /* CSS3 styling for latest browsers */
            -moz-box-shadow: 0 0 90px 5px #000;
            -webkit-box-shadow: 0 0 90px #000;
        }

        /* close button positioned on upper right corner */
        .simple_overlay .close {
            background-image: url(http://qimam.net/qimaminfo/wp-content/uploads/close.png);
            position: absolute;
            right: -15px;
            top: -15px;
            cursor: pointer;
            height: 35px;
            width: 35px;
        }
    </style>

    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery("#artists-cats-scroll").hide();
            jQuery("#artists-cats-list-button").click(function () {
                jQuery("#artists-cats-scroll").toggle();
            });
            jQuery(".scrollable").scrollable();
            jQuery("p[rel]").overlay({
                top: 200
            });
        });


    </script>
    
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/scrollable-horizontal.css">

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/scrollable-buttons.css">

    <script src="<?php bloginfo('template_directory'); ?>/audiojs/audio.min.js"></script>
    

    <script>
        audiojs.events.ready(function () {
            var as = audiojs.createAll();
        });
    </script>

</head>
<body <?php body_class(); ?>>

<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12">
                <div class="logo">
                <a href="<?php echo home_url(); ?>">
                            <img src="<?php echo $redux_demo['logo_image']['url']; ?>" class="img-responsive">
                        </a>
                </div>
            </div>

            <div class="col-md-9 col-xs-12">
            <nav class="navbar navbar-default">
                   

                        <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>

                        </div>


                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <?php
                                            $menu = array(
                                                                    'menu' => 'header',
                                                                    'menu_class'=> 'nav navbar-nav navbar-left',
                                                                    
                                                                    );
                                                wp_nav_menu($menu);
                                        ?>
                        </div>

                   

                </nav>
            </div>
        </div>
    </div>
</div>


<div class="captionImage">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12 col-md-pull-2">
            <div class="search">
                <h4>اكتب كلمات البحث هنا ...</h4>
                        <form action="<?php bloginfo('url'); ?>/" >
                            <input type="text" placeholder="ابحث بالموقع." class="form-control"  name="s" <?php the_search_query(); ?>>
                            <button type="submit" class="btn btn-primary">
                 ابحث
                            </button>
                           
                        </form>

                    </div>
            </div>
        </div>
    </div>
                                                               
</div>




