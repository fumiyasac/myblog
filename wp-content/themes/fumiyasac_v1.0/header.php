<?php
/*
Template:
Theme Name: fumiyasac_v1.0
Theme URI: http://blog.just1factory.net
Description: fumiyasac create blog template
Author: Fumiya Sakai (just1factory)
Author URI: http://blog.just1factory.net
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
<meta name="keywords" content="Webサービス制作,スマートフォンアプリ,PHP,Ruby on Rails,Android,プログラミング,デザイン">
<link rel="start" href="/">
<link rel="index" href="/index.php" title="<?php bloginfo('name'); ?>">
<meta http-equiv="imagetoolbar" content="no">
<?php include(TEMPLATEPATH.'/include_config.php'); ?>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- CSS definition -->
<?php include(TEMPLATEPATH.'/include_css.php'); ?>
<!-- jQuery definition -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<?php include(TEMPLATEPATH.'/include_js.php'); ?>
<?php wp_head(); ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39217386-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
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
