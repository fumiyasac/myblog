<?php
/*
Theme Name: fumiyasac-v1.0
Theme URI: http://blog.just1factory.com
Description: fumiyasac create blog template
Author: Fumiya Sakai (just1factory)
Author URI: http://blog.just1factory.com
Template: home.php
Version: 1.0
*/ 
?>
<?php
/* いらないCSSを削除 */
if(has_action('wp_head','_admin_bar_bump_cb')){
remove_action('wp_head','_admin_bar_bump_cb');
}
get_header();
?>

<!-- topGalley Start -->
<aside class="topGalley">

<div id="slider">
<!--slider picture here.-->
<?php
$sliderList = json_decode(file_get_contents(home_url('/')."/json/sliders/slide.json"),true);
foreach ($sliderList as $slider):
?>
<div class="sliderContents">
<a href="<?php echo $slider['link']; ?>">
<img src="<?php echo home_url('/'); ?><?php echo $slider['path']; ?>" width="980" height="380" alt="" title="#caption1">
</a>
<div class="caption">
<h3><?php echo $slider['date']; ?>　<?php echo $slider['title']; ?></h3>
<p><?php echo $slider['description']; ?></p>
</div>
</div>
<?php endforeach; ?>
<!--slider picture here.-->
</div>

<div id="navPicsBase">
<div id="navPics" class="clearfix"></div>
</div>
</aside>
<!-- topGalley End -->
    
<!-- leftColumn Start -->
<div id="leftColumn">
<?php get_sidebar(); ?>
</div>
<!-- leftColumn End -->

<!-- rightColumn Start -->
<div id="rightColumn">

<article class="topArticle">

<header class="topTitleArticle">
<h2><img src="<?php bloginfo('template_url'); ?>/common/images/common/header_top_latest.gif" height="24" width="740" alt=""></h2>
</header>

<?php query_posts('showposts=5'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article class="articleList">
<header>
<h3><?php the_title(); ?></h3>
<p class="date"><time><?php the_time('Y.n.j'); ?></time>&nbsp;Author：<?php the_author(); ?></p>
</header>
<section>
<div class="entries">
<?php if(has_post_thumbnail($post->ID)): ?>
<?php echo get_the_post_thumbnail($post->ID); ?>
<?php else: ?>
<img src="<?php bloginfo('template_url'); ?>/common/images/sample/post_no_thumbnail.jpg" height="200" width="300" alt="" class="image padr20">
<?php endif; ?>
<p class="category">
<?php if(in_category('information')): ?>
<img src="<?php bloginfo('template_url'); ?>/common/images/common/icon_information.gif" height="15" width="69" alt="">
<?php elseif(in_category('programming')): ?>
<img src="<?php bloginfo('template_url'); ?>/common/images/common/icon_programming.gif" height="15" width="70" alt="">
<?php elseif(in_category('design')): ?>
<img src="<?php bloginfo('template_url'); ?>/common/images/common/icon_design.gif" height="15" width="40" alt="">
<?php elseif(in_category('reports')): ?>
<img src="<?php bloginfo('template_url'); ?>/common/images/common/icon_reports.gif" height="15" width="41" alt="">
<?php elseif(in_category('activeties')): ?>
<img src="<?php bloginfo('template_url'); ?>/common/images/common/icon_activities.gif" height="15" width="62" alt="">
<?php endif; ?>    
</p>
<?php the_content('',false,''); ?>
<p class="readMore"><a href="<?php the_permalink(); ?>">Read More</a></p>
</div>
</section>
</article>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>

</article>

<article class="topAbout">
<header class="topTitleAbout">
<h2><img src="<?php bloginfo('template_url'); ?>/common/images/common/header_top_myservices.gif" height="24" width="740" alt=""></h2>
</header>
<div class="aboutGallery" id="aboutGallery">
<?php
$args_service_img = array(
    'post_type' => 'services'
);
query_posts($args_service_img);
?>
<?php if(have_posts()): ?>
<?php while (have_posts()): the_post(); ?>
<?php if(has_post_thumbnail($post->ID)): ?>
<?php echo get_the_post_thumbnail($post->ID, 'service_article'); ?>
<?php else: ?>
<img src="<?php bloginfo('template_url'); ?>/common/images/sample/thumb_top_sample_about1.jpg" height="350" width="700" class="image" alt="">
<img src="<?php bloginfo('template_url'); ?>/common/images/sample/thumb_top_sample_about2.jpg" height="350" width="700" class="image" alt="">
<img src="<?php bloginfo('template_url'); ?>/common/images/sample/thumb_top_sample_about3.jpg" height="350" width="700" class="image" alt="">
<img src="<?php bloginfo('template_url'); ?>/common/images/sample/thumb_top_sample_about4.jpg" height="350" width="700" class="image" alt="">
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
</div>
<section>
<header>
<h3>I think that an "Example" is more important than a "Track Record".</h3>
</header>
<div class="aboutContent">
<p class="smallCaption">自分で開発したもの／制作事例の紹介</p>
<p>私自身は都内でプログラマをしています。業務後の時間を使いWebサービスやアプリの開発を現在も行っています。コンセプトや実際の導入事例などを紹介していますので、実際のプロダクトと併せてご覧頂ければ幸いです。</p>
</div>
</section>
</article>

</div>
<!-- rightColumn End -->

</div>
<!-- mainContainer End -->

<?php get_footer(); ?>