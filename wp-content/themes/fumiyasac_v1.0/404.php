<?php
/*
Theme Name: fumiyasac-v1.0
Theme URI: http://blog.just1factory.com
Description: fumiyasac create blog template
Author: Fumiya Sakai (just1factory)
Author URI: http://blog.just1factory.com
Template: 404.php
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
<li><a href="./">TOP</a></li>
<li class="last">404：ページが見つかりません</li>
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
<h2><img src="<?php bloginfo('template_url'); ?>/common/images/common/header_detail_404.gif" height="24" width="740" alt=""></h2>
</header>

<article class="articleList">
<header>
<h3>お探しのページが見つかりませんでした</h3>
</header>

<section>
<div class="entry">
<p class="padt10">お探しのページは存在しないか、既に削除されている可能性があります。<br>以下の項目で心当たりはありませんか？</p>
<h4>考えられる原因</h4>
<ul>
<li>URLに間違いはありませんか？</li>
<li>古いリンクをクリックした可能性はありませんか？</li>
</ul>
<h4>対処方法</h4>
<ul>
<li>アドレスをもう一度入力する。</li>
<li>ブラウザで前のページへ戻る。</li>
<li>サイトTOPへ戻り、必要な情報を探す。</li>
</ul>
<p>お手数をおかけしますが、宜しくお願いします。</p>

</div>
</section>

</article>
</article>

</div>
<!-- rightColumn End -->

</div>
<!-- mainContainer End -->

<?php get_footer(); ?>