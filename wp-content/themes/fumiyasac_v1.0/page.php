<?php
/*
Template:
Theme Name: fumiyasac_v1.0
Theme URI: http://blog.just1factory.net
Description: fumiyasac create blog template
Author: Fumiya Sakai (just1factory)
Author URI: http://blog.just1factory.net
Template: page.php
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

<!-- breadcramb Start -->
<aside class="breadcramb">
<ul>
<li><a href="<?php echo home_url('/'); ?>">TOP</a></li>
<?php if(is_page('about')): ?>
<li class="last">About</li>
<?php elseif(is_page('contact')): ?>
<li class="last">Contact</li>
<?php endif; ?>
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
<?php if(is_page('about')): ?>
<h2 class="aboutMidashi">About</h2>
<?php elseif(is_page('contact')): ?>
<h2 class="contactMidashi">Contact</h2>
<?php endif; ?>
</header>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<article class="articleList">
<header>
<h3>
<?php if(is_page('about')): ?>
TO CREATE A STIRについて
<?php elseif(is_page('contact')): ?>
当ブログに関するお問い合わせはこちら
<?php endif; ?>
</h3>
<p class="date">
<?php if(is_page('about')): ?>
The meaning of "TO CREATE A STIR" .
<?php elseif(is_page('contact')): ?>
Question or suggestion about blog and services to me.
<?php endif; ?>
</p>
</header>

<aside class="socialButton">
<ul>
<li class="padr10"><a href="http://mixi.jp/share.pl" class="mixi-check-button"　data-key="mixi チェックキー">Check</a>
<script type="text/javascript" src="http://static.mixi.jp/js/share.js"></script></li>
<li><a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-lang="ja">ツイート</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script></li>
<li><iframe src="http://www.facebook.com/plugins/like.php?locale=ja_JP&amp;href=http%3A%2F%2Fcreo153%2Ecom%2F&amp;send=false&amp;layout=button_count&amp;width=90&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font=&amp;height=21" scrolling="no" frameborder="0" style="border:none;overflow:hidden;width:103px;height:21px;" allowtransparency="true"></iframe></li>
<li><g:plusone size="medium"></g:plusone></li>
</ul>
</aside>

<section>
<div class="entry">
<?php the_content(); ?>
</div>
</section>

</article>
</article>
<?php endwhile; endif; ?>
    
</div>
<!-- rightColumn End -->

</div>
<!-- mainContainer End -->

<?php get_footer(); ?>