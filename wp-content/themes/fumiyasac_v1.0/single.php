<?php
/*
Template:
Theme Name: fumiyasac_v1.0
Theme URI: http://blog.just1factory.net
Description: fumiyasac create blog template
Author: Fumiya Sakai (just1factory)
Author URI: http://blog.just1factory.net
Template: single.php
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
<li><a href="<?php echo home_url('/'); ?>">TOP</a></li>
<?php if(in_category('information')): ?>
<li><a href="<?php echo get_category_link('3'); ?>"><?php echo get_catname('3'); ?></a></li>
<?php elseif(in_category('programming')): ?>
<li><a href="<?php echo get_category_link('5'); ?>"><?php echo get_catname('5'); ?></a></li>
<?php elseif(in_category('design')): ?>
<li><a href="<?php echo get_category_link('6'); ?>"><?php echo get_catname('6'); ?></a></li>
<?php elseif(in_category('reports')): ?>
<li><a href="<?php echo get_category_link('4'); ?>"><?php echo get_catname('4'); ?></a></li>
<?php elseif(in_category('activeties')): ?>
<li><a href="<?php echo get_category_link('7'); ?>"><?php echo get_catname('7'); ?></a></li>
<?php endif; ?>
<li class="last"><?php the_title(); ?></li>
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

<article class="detailArticle">
    
<header class="detailTitleArticle">
<?php if(in_category('information')): ?>
<h2 class="informationMidashi">Information</h2>
<?php elseif(in_category('programming')): ?>
<h2 class="programmingMidashi">Programming</h2>
<?php elseif(in_category('design')): ?>
<h2 class="designMidashi">Design</h2>
<?php elseif(in_category('reports')): ?>
<h2 class="reportsMidashi">Reports</h2>
<?php elseif(in_category('activeties')): ?>
<h2 class="activitiesMidashi">Activities</h2>
<?php endif; ?>
</header>

<?php if(have_posts()):while(have_posts()):the_post(); ?>
<article class="articleList">
<header>
<h3><?php the_title(); ?></h3>
<p class="date"><time><?php the_time('Y.n.j'); ?></time>&nbsp;Author：<?php the_author(); ?></p>
</header>
<?php endwhile;endif; ?>

<aside class="socialButton">
<ul>
<li class="padr10"><a href="http://mixi.jp/share.pl" class="mixi-check-button"　data-key="715b696096a8f1a9b37411885a31fb9e1be3820b">Check</a>
<script type="text/javascript" src="http://static.mixi.jp/js/share.js"></script></li>
<li><a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-lang="ja">ツイート</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script></li>
<li>
<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fblog.just1factory.net%2F&amp;send=false&amp;layout=standard&amp;width=78&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=23&amp;appId=391485624283987" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:78px; height:24px;" allowTransparency="true"></iframe>
<!--iframe src="http://www.facebook.com/plugins/like.php?locale=ja_JP&amp;href=http%3A%2F%2Fblog%2Ejust1factory%2Enet%2F&amp;send=false&amp;layout=button_count&amp;width=90&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font=&amp;height=21" scrolling="no" frameborder="0" style="border:none;overflow:hidden;width:103px;height:21px;" allowtransparency="true"></iframe-->
</li>
<li><g:plusone size="medium"></g:plusone></li>
</ul>
</aside>

<section id="blogArticleSinglePage">
<div class="entry">
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<?php /* which is better? exec get_the_post_thumbnail() or edit form blog ? */ ?>
<p>
<?php
$attr = array('class' => 'blog_single_midashi');
if( isSmartPhone() === "sp" ){
echo get_the_post_thumbnail($post->ID, 'post-thumbnail'); 
}else{
echo get_the_post_thumbnail($post->ID, "blog_article", $attr);
}
?>
</p>
<?php the_content(); ?>    
<?php endwhile;endif; ?>
</div>
</section>

<aside class="categoryInfo">
<div class="categoryInfoBox">
<?php if(in_category('information')): ?>
<p><img src="<?php bloginfo('template_url'); ?>/common/images/common/icon_information.gif" height="15" width="69" alt=""></p>
<?php elseif(in_category('programming')): ?>
<p><img src="<?php bloginfo('template_url'); ?>/common/images/common/icon_programming.gif" height="15" width="70" alt=""></p>
<?php elseif(in_category('design')): ?>
<p><img src="<?php bloginfo('template_url'); ?>/common/images/common/icon_design.gif" height="15" width="40" alt=""></p>
<?php elseif(in_category('reports')): ?>
<p><img src="<?php bloginfo('template_url'); ?>/common/images/common/icon_reports.gif" height="15" width="41" alt=""></p>
<?php elseif(in_category('activeties')): ?>
<p><img src="<?php bloginfo('template_url'); ?>/common/images/common/icon_activities.gif" height="15" width="62" alt=""></p>
<?php endif; ?>
<div>
<?php the_tags('<ul><li>','</li><li>','</li></ul>');?>
</div>
</div>
</aside>

<aside class="linkButtons">
<div>
<p class="prevBtn"><?php previous_post_link('%link','&laquo; Previous Entry'); ?></p>
<p class="nextBtn"><?php next_post_link('%link','Next Entry &raquo;') ?></p>
</div>
</aside>

<aside class="relatedEntry">
<header>
<h3>Related Entries</h3>
</header>
<div class="relatedContent">
<?php similar_posts(); ?>
</div>
</aside>

<aside class="recentEntry">
<header>
<h3>Recent Entries</h3>
</header>
<div class="recentContent">
<ul>
<?php query_posts('showposts=5'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
</ul>
</div>
</aside>

<?php comments_template(); ?>    

</article>

</article>

</div>
<!-- rightColumn End -->

</div>
<!-- mainContainer End -->

<?php get_footer(); ?>