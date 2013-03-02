<?php
/*
Template:
Theme Name: fumiyasac_v1.0
Theme URI: http://blog.just1factory.net
Description: fumiyasac create blog template
Author: Fumiya Sakai (just1factory)
Author URI: http://blog.just1factory.net
Template: index.php
Version: 1.0
*/ 

/* いらないCSSを削除 */
if(has_action('wp_head','_admin_bar_bump_cb')){
remove_action('wp_head','_admin_bar_bump_cb');
}
get_header();
?>

<!-- breadcramb Start -->
<aside class="breadcramb">
<ul>
<li><a href="#">TOP</a></li>
<li class="last">Programming</li>
</ul>
</aside>
<!-- breadcramb End -->
    
<!-- leftColumn Start -->
<div id="leftColumn">
<?php get_sidebar(); ?>
</div>
<!-- leftColumn End -->

<!-- rightColumn Start -->
<div id="rightColumn">

<article class="listArticle">

<header class="listTitleArticle">
<h2><img src="<?php bloginfo('template_url'); ?>/common/images/common/header_detail_programming.gif" height="24" width="740" alt=""></h2>
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

<aside class="pager">
<div class="pagerBlock">
<a class='prev page-numbers' href='#'>&laquo; Prev</a>
<a class='page-numbers' href='#'>1</a>
<span class='page-numbers current'>2</span>
<a class='page-numbers' href='#'>3</a>
<a class='next page-numbers' href='#'>Next &raquo;</a>
</div>
</aside>

</article>

</div>
<!-- rightColumn End -->

</div>
<!-- mainContainer End -->

<?php get_footer(); ?>