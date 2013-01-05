<?php
/*
Theme Name: fumiyasac-v1.0
Theme URI: http://blog.just1factory.com
Description: fumiyasac create blog template
Author: Fumiya Sakai (just1factory)
Author URI: http://blog.just1factory.com
Template: single.php
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
<h2>
<?php if(in_category('information')): ?>
<img src="<?php bloginfo('template_url'); ?>/common/images/common/header_detail_information.gif" height="24" width="740" alt="">
<?php elseif(in_category('programming')): ?>
<img src="<?php bloginfo('template_url'); ?>/common/images/common/header_detail_programming.gif" height="24" width="740" alt="">
<?php elseif(in_category('design')): ?>
<img src="<?php bloginfo('template_url'); ?>/common/images/common/header_detail_design.gif" height="24" width="740" alt="">
<?php elseif(in_category('reports')): ?>
<img src="<?php bloginfo('template_url'); ?>/common/images/common/header_detail_reports.gif" height="24" width="740" alt="">
<?php elseif(in_category('activeties')): ?>
<img src="<?php bloginfo('template_url'); ?>/common/images/common/header_detail_activeties.gif" height="24" width="740" alt="">    
<?php endif; ?>
</h2>
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
<li class="padr10"><a href="http://mixi.jp/share.pl" class="mixi-check-button"　data-key="mixi チェックキー">Check</a>
<script type="text/javascript" src="http://static.mixi.jp/js/share.js"></script></li>
<li><a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-lang="ja">ツイート</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script></li>
<li><iframe src="http://www.facebook.com/plugins/like.php?locale=ja_JP&amp;href=http%3A%2F%2Fcreo153%2Ecom%2F&amp;send=false&amp;layout=button_count&amp;width=90&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font=&amp;height=21" scrolling="no" frameborder="0" style="border:none;overflow:hidden;width:103px;height:21px;" allowtransparency="true"></iframe></li>
<li><g:plusone size="medium"></g:plusone></li>
</ul>
</aside>

<section>
<div class="entry">

<!--fundamental set//-->
<p><a rel="shadowbox" href="<?php bloginfo('template_url'); ?>/upload/sample_large2.jpg" title="sample"><img src="<?php bloginfo('template_url'); ?>/common/images/sample/thumb_detail_sample.jpg" height="464" width="700" title="" class="image"></a></p>
<p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
<p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>

<!--header set//-->
<h4>強調タグとリンクタグ、改行タグの行間</h4>
<p><strong>ここだけ強調タグが入ります。</strong><br>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
<p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
<p><a href="#">リンクが入ります。</a></p>

<!--blockquote set//-->
<h4>引用・転載部分の行間</h4>
<blockquote>
<p>引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載</p>
</blockquote>

<!--list & table set//-->
<h4>リストタグの行間</h4>
<ul>
<li>リスト1</li>
<li>リスト2</li>
<li>リスト3</li>
</ul>

<ol>
<li>リスト1</li>
<li>リスト2</li>
<li>リスト3</li>
</ol>

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
<ul>
<li><a href="#">PHP</a></li>
<li><a href="#">CakePHP</a></li>
</ul>
</div>
</div>
</aside>

<aside class="linkButtons">
<div>
<p class="prevBtn"><?php previous_posts_link('&lt;&lt;&nbsp;Previous Entry'); ?></p>
<p class="nextBtn"><?php next_posts_link('Next Entry&nbsp;&gt;&gt;'); ?></p>
</div>
</aside>

<aside class="relatedEntry">
<header>
<h3><img src="<?php bloginfo('template_url'); ?>/common/images/common/header_related_entries.gif" height="19" width="700" alt=""></h3>
</header>
<div class="relatedContent">
<ul>
<li><a href="#">この記事と関連するエントリーが入ります</a></li>
<li><a href="#">この記事と関連するエントリーが入ります</a></li>
<li><a href="#">この記事と関連するエントリーが入ります</a></li>
<li><a href="#">この記事と関連するエントリーが入ります</a></li>
<li><a href="#">この記事と関連するエントリーが入ります</a></li>
</ul>
</div>
</aside>

<aside class="recentEntry">
<header>
<h3><img src="<?php bloginfo('template_url'); ?>/common/images/common/header_recent_entries.gif" height="19" width="700" alt=""></h3>
</header>
<div class="recentContent">
<ul>
<li><a href="#">最新のエントリーが入ります</a></li>
<li><a href="#">最新のエントリーが入ります</a></li>
<li><a href="#">最新のエントリーが入ります</a></li>
<li><a href="#">最新のエントリーが入ります</a></li>
<li><a href="#">最新のエントリーが入ります</a></li>
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