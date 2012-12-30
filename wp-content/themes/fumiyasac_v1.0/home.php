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
<div class="sliderContents">
<a href="#">
<img src="<?php bloginfo('template_url'); ?>/common/images/sample/image_sample_top1.jpg" width="980" height="380" alt="" title="#caption1">
</a>
<div class="caption">
<h3>picture of caption1 here.</h3>
<p>picture of text here.</p>
</div>
</div>

<div class="sliderContents">
<a href="#">
<img src="<?php bloginfo('template_url'); ?>/common/images/sample/image_sample_top2.jpg" width="980" height="380" alt="" title="#caption2">
</a>
<div class="caption">
<h3>ああああああああああ</h3>
<p>picture of text here.</p>
</div>
</div>
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

<article class="articleList">
<header>
<h3>タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。</h3>
<p class="date"><time>2011.11.07</time>&nbsp;Author：Fumiya Sakai</p>
</header>
<section>
<div class="entries">
<img src="<?php bloginfo('template_url'); ?>/common/images/sample/thumb_top_sample1.jpg" height="200" width="300" alt="" class="image padr20">
<p class="category"><img src="<?php bloginfo('template_url'); ?>/common/images/common/icon_programming.gif" height="15" width="70" alt=""></p>
<p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります...</p>
<p class="readMore"><a href="#">Read More</a></p>
</div>
</section>
</article>

<article class="articleList">
<header>
<h3>タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。</h3>
<p class="date"><time>2011.11.07</time>&nbsp;Author：Fumiya Sakai</p>
</header>
<section>
<div class="entries">
<img src="<?php bloginfo('template_url'); ?>/common/images/sample/thumb_top_sample2.jpg" height="200" width="300" alt="" class="image padr20">
<p class="category"><img src="<?php bloginfo('template_url'); ?>/common/images/common/icon_programming.gif" height="15" width="70" alt=""></p>
<p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります...</p>
<p class="readMore"><a href="#">Read More</a></p>
</div>
</section>
</article>

</article>

<article class="topAbout">
<header class="topTitleAbout">
<h2><img src="<?php bloginfo('template_url'); ?>/common/images/common/header_top_myservices.gif" height="24" width="740" alt=""></h2>
</header>
<div class="aboutGallery" id="aboutGallery">
<img src="<?php bloginfo('template_url'); ?>/common/images/sample/thumb_top_sample_about1.jpg" height="350" width="700" class="image" alt="">
<img src="<?php bloginfo('template_url'); ?>/common/images/sample/thumb_top_sample_about2.jpg" height="350" width="700" class="image" alt="">
<img src="<?php bloginfo('template_url'); ?>/common/images/sample/thumb_top_sample_about3.jpg" height="350" width="700" class="image" alt="">
<img src="<?php bloginfo('template_url'); ?>/common/images/sample/thumb_top_sample_about4.jpg" height="350" width="700" class="image" alt="">
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