<!DOCTYPE html>

<html itemscope="itemscope" itemtype="http://schema.org/WebPage">

<head>

<!--360站长认证--> 
	
	<meta name="360-site-verification" content="8132d2f770be34127c66999bc40631e3" />	
    <meta charset="UTF-8">
	<!--markdown css-->
	<link type="text/css" rel="styleSheet"  href="https://www.ohyhello.com/wp-content/themes/Gensokyo/src/css/markdown.css" />
    <meta name="theme-color" content="#595C5E">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes"">
    <title itemprop="name"><?php wp_title('-', true, 'right'); ?></title>
    <link rel="canonical" href="https://www.ohyhello.com/">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <link rel="apple-touch-icon" href="https://file.ohyhello.com//uploads/2018/05/cropped-timg.jpg">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <link rel="search" type="application/opensearchdescription+xml" href="<?php bloginfo('template_url'); ?>/search.xml" title="ohyhello">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/lib/nprogress/nprogress.min.css">
    <!--<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/lib/social-share.js/dist/css/share.min.css">-->
    <link rel="stylesheet" href="https://staticfile.qnssl.com/font-awesome/4.7.0/css/font-awesome.min.css">
																										  
	<!--share-->
	<link rel="stylesheet" href="https://www.ohyhello.com/wp-content/themes/Gensokyo/lib/social-share.js/dist/css/share.min.css">
	<style>
  .row{padding: 20px 0 0 20px}
  .row-pad{padding: 20px 0 0 60px}
  </style>
<!--    <script type="text/javascript" src="--><?php //bloginfo('template_url'); ?><!--/ajax-comment/app.js"></script>-->
    <script src="<?php echo get_template_directory_uri(); ?>/lib/nprogress/nprogress.min.js"></script>
	<!--aplayer-->
<link rel="stylesheet" href="/wp-content/themes/Gensokyo/lib/aplayer/dist/APlayer.min.css">
<script src="/wp-content/themes/Gensokyo/lib/aplayer/dist/APlayer.min.js"></script>
    
 
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--百度站长推送-->
<?php include_once("baidu_js_push.php") ?>

	<!--返回顶部-->
	<!--网站萌娘-->
	<!--<script type="text/javascript" src="https://www.ohyhello.com/spig.js"></script>
	<link rel="stylesheet" href="https://www.ohyhello.com/spigPet.css" type="text/css"/>
<script type="text/javascript">var isindex = true;var visitor = "游客";jQuery(document).ready(function($){$("#spig").mousedown(function(e){if(e.which==3){showMessage("秘密通道:<br /><a href=\"#\" title=\"返回顶部\">返回顶部</a>",10000);
}});$("#spig").bind("contextmenu", function(e){return false;});});</script>
<div id="spig" class="spig"><div id="message">正在加载中……</div><div id="mumu" class="mumu"></div>
</div>
	<script>
        NProgress.configure({
            showSpinner: false,
            easing: 'ease-out',
            speed: 1000
        });
        NProgress.set(0.7);
    </script>-->
		<canvas id="evanyou"></canvas>

    <div id="back-to-top" class="red" data-scroll="body">
    </div>
    <div class="navbar">
        <?php if (is_user_logged_in()) : ?>
            <a href="<?php bloginfo('url'); ?>/wp-admin/" title="博客后台" class="houtai fa fa-user">后台</a>
        <?php endif; ?>
        <div class="container">
            <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation" itemscope="" itemtype="https://schema.org/SiteNavigationElement">
                <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav-menu')); ?>
            </nav>
            <?php if (is_single()) : ?>
                <div class="edit-wz">
                    <?php edit_post_link("编辑文章"); ?>
                </div>
            <?php endif; ?>
            <?php if (is_page()) : ?>
                <div class="edit-wz">
                    <?php edit_post_link("<p class='fa fa-pencil'>编辑文章</p>"); ?>
                </div>
            <?php endif; ?>
            <div class="nav-right">
                <form class="search-form" method="post" action="<?php bloginfo('url'); ?>">
                    <input type="text" name="s" class="search-input" placeholder="站内搜索">
                    <button type="submit" class="search-submit sousuo">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <header class="header-description">
        <div id="site-header">
            <h1><a href="<?php echo esc_url(home_url('/')); ?>"
                   title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"
                   rel="home"><?php bloginfo('name'); ?></a></h1>
            <p class="typed"><a href="https://www.ohyhello.com/" title="ohyhello" rel="home"></a></p>
        </div>
    </header>
    <div id="information" class="info block">
        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php header_image(); ?>" class="avatar"
                                                             data-pinit="registered"
                                                             width="<?php echo get_custom_header()->width; ?>"
                                                             height="<?php echo get_custom_header()->height; ?>"
                                                             alt=""/></a>

        <h2 class="description"><a href="<?php echo esc_url(home_url('/')); ?>"
                                   title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><span
                    style="color: #2E9AFE;">喜欢的话就坚持吧</a></h2>
    </div>
    <!--页脚萌娘-->
	<!--<div class="xm">
        <img src="https://file.ohyhello.com/uploads/xm.png">
    </div>-->	
        
    
    <div class="container" id="content">
        <div class="article-list">
				<!--live2d-->
		<div class="waifu">
    <div class="waifu-tips"></div>
    <link rel="stylesheet" href="https://www.ohyhello.com/live2d/live2d.css" type="text/css"/>
	<canvas id="live2d" width="280" height="450" class="live2d"></canvas>
</div>