<?php
/*
Theme Name: fumiyasac-v1.0
Theme URI: http://blog.just1factory.com
Description: fumiyasac create blog template
Author: Fumiya Sakai (just1factory)
Author URI: http://blog.just1factory.com
Template: header.php
Version: 1.0
*/ 
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>
<?php wp_title( '|', true, 'right' ); bloginfo('name'); ?>
</title>
<!-- meta and other definition -->
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta name="keywords" content="">
<link rel="start" href="/">
<link rel="index" href="/index.php" title="<?php bloginfo('name'); ?>">
<meta http-equiv="imagetoolbar" content="no">
<meta name="viewport" content="width=1020px,user-scalable=yes">
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- CSS definition -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<?php if(is_single() || is_page()): ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/common/css/shadowbox.css">
<?php endif ?>
<!-- jQuery definition -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/common/js/html5media.js"></script>
<script src="<?php bloginfo('template_url'); ?>/common/js/jquery.easing.1.3.js"></script>
<script src="<?php bloginfo('template_url'); ?>/common/js/jquery.color.js"></script>
<script src="<?php bloginfo('template_url'); ?>/common/js/pagescroller.js"></script>
<script src="<?php bloginfo('template_url'); ?>/common/js/jquery.cycle.all.pack.js"></script>
<script src="<?php bloginfo('template_url'); ?>/common/js/jquery.opacity.rollover.js"></script>
<script src="<?php bloginfo('template_url'); ?>/common/js/jscrollpane.js"></script>
<script src="<?php bloginfo('template_url'); ?>/common/js/vtip.js"></script>
<script src="<?php bloginfo('template_url'); ?>/common/js/lazyload.js"></script>
<script src="<?php bloginfo('template_url'); ?>/common/js/jquery.autoclear.js"></script>
<?php if(is_home()): ?>
<script src="<?php bloginfo('template_url'); ?>/common/js/top.js"></script>
<?php elseif(is_single() || is_404() || is_page()): ?>
<?php if(!is_404()): ?>
<script src="<?php bloginfo('template_url'); ?>/common/js/shadowbox.js"></script>
<script src="<?php bloginfo('template_url'); ?>/common/js/googleplus1.js"></script>
<?php if(is_single()): ?>
<script src="<?php bloginfo('template_url'); ?>/common/js/validator.js"></script>
<?php endif ?>
<?php endif ?>
<script src="<?php bloginfo('template_url'); ?>/common/js/detail.js"></script>
<?php else: ?>
<script src="<?php bloginfo('template_url'); ?>/common/js/list.js"></script>
<?php endif ?>
<script src="<?php bloginfo('template_url'); ?>/common/js/definition.js"></script>
<!--[if IE 6]>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/common/js/DD_belatedPNG.js"></script>
<script type="text/javascript">
DD_belatedPNG.fix('#slider .sliderContents .caption,.png');
</script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body>

<div id="nowLoading">
<p><img src="<?php bloginfo('template_url'); ?>/common/images/common/ajax-loader.gif" height="18" width="18" alt=""></p>
</div>

<!-- wrapper Start -->
<div id="wrapper">

<!-- mainContainer Start -->
<div id="mainContainer">
  
<!-- header Start -->
<header id="globalHeader">
    <h1><a href="<?php echo home_url('/'); ?>">TO CREATE A STIR</a></h1>
<nav>
<ul>
<li class="gNav01"><a href="/about" class="vtip" title="<strong class='vTitle'>About</strong>：TO CREATE A STIRについて">About</a></li>
<li class="gNav02"><a href="/reports" class="vtip" title="<strong class='vTitle'>Report</strong>：勉強会レポートなど">Reports</a></li>
<li class="gNav03"><a href="/programming" class="vtip" title="<strong class='vTitle'>Programming</strong>：プログラミングに関する事">Programming</a></li>
<li class="gNav04"><a href="/design" class="vtip" title="<strong class='vTitle'>Design</strong>：デザインに関する事">Design</a></li>
<li class="gNav05"><a href="/services" class="vtip" title="<strong class='vTitle'>My Services</strong>：自分で開発したものなど">My Services</a></li>
<li class="gNav06"><a href="/contact" class="vtip" title="<strong class='vTitle'>Contact</strong>：お問い合わせ">Contact</a></li>
</ul>
</nav>
</header>
<!-- header End -->
