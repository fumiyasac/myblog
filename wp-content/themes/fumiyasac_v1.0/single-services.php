<?php
/*
Template:
Theme Name: fumiyasac_v1.0
Theme URI: http://blog.just1factory.net
Description: fumiyasac create blog template
Author: Fumiya Sakai (just1factory)
Author URI: http://blog.just1factory.net
Template: single-services.php
Version: 1.0
*/

/* いらないCSSを削除 */
if(has_action('wp_head','_admin_bar_bump_cb')){
remove_action('wp_head','_admin_bar_bump_cb');
}
get_header();
?>
<!--single-services.php-->
<!-- breadcramb Start -->
<aside class="breadcramb">
<ul>
<li><a href="<?php echo home_url('/'); ?>">TOP</a></li>
<li><a href="<?php echo home_url('/'); ?>services">Services</a></li>
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
<h2 class="servicesMidashi">My Services</h2>
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

<section id="serviceArticleSinglePage">
<div class="entry">
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<?php if(has_post_thumbnail($post->ID)): ?>
<p>
<?php
if( isSmartPhone() === "sp" ){
echo get_the_post_thumbnail($post->ID, 'service_article_sp');
}else{
echo get_the_post_thumbnail($post->ID, 'service_article');
}
?>
</p>
<?php else: ?>
<p><img src="<?php bloginfo('template_url'); ?>/common/images/sample/thumb_top_sample_about1.jpg" height="<?php echo getArrayConfig('sliderServiceImgSizeHeight'); ?>" width="<?php echo getArrayConfig('sliderServiceImgSizeWidth'); ?>" alt=""></p>
<?php endif; ?>
<h4>サービス概要</h4>
<?php the_excerpt(); ?>
<h4>サービス説明</h4>
<?php the_content(); ?>
<?php endwhile;endif; ?>
<table width="700" cellspacing="0" cellpadding="0">
<tr>
<th>公開ステータス</th>
<td><?php echo get_post_meta($post->ID,'公開ステータス',true); ?></td>
</tr>
<tr>
<th>使用技術・開発言語</th>
<td><?php echo get_post_meta($post->ID,'使用技術・開発言語',true); ?></td>
</tr>
<tr>
<th>リリース日</th>
<td><?php echo get_post_meta($post->ID,'リリース日',true); ?></td>
</tr>
<tr>
<th>サービスURL</th>
<td><a href="<?php echo get_post_meta($post->ID,'サービスURL',true); ?>" target="_blank"><?php echo get_post_meta($post->ID,'サービスURL',true); ?></a></td>
</tr>
</table>
<p>このブログではサービスに関するお問い合わせ／ご意見・感想等を受け付けております。
<br>お問い合わせ／ご意見・感想のある方は下記コメントフォームより必要事項を記入して下さい。<p>
<ul>
<li>サービスの不具合や機能改善の要望等でも受け付けております。</li>
<li>ブログ以外にもサービス内のお問い合わせフォームでも同様です。</li>
</ul>
</div>
</section>

<aside class="categoryInfo">
<div class="categoryInfoBox">
<?php
$category = array_shift(get_the_terms($post->ID,'services_category'));
if($category->slug === 'web'):
?>
<p><img src="<?php bloginfo('template_url'); ?>/common/images/common/icon_webservice.gif" height="15" width="68" alt=""></p>
<?php elseif($category->slug === 'app'): ?>
<p><img src="<?php bloginfo('template_url'); ?>/common/images/common/icon_smartphone.gif" height="15" width="86" alt=""></p>
<?php endif; ?>
<div>
<?php
//リンクなしのタグ表示（カスタム投稿タイプ）
if($tagsList = get_the_terms($post->ID,'services_tag')){
    echo '<ul class="services_tag">';
    foreach ($tagsList as $tag) {
        echo '<li>'.esc_html($tag->name).'</li>';
    }
    echo '</ul>';
}
?>
</div>
</div>
</aside>

<aside class="linkButtons">
<div>
<p class="prevBtn"><?php previous_post_link('%link','&laquo; Previous Service'); ?></p>
<p class="nextBtn"><?php next_post_link('%link','Next Service &raquo;') ?></p>
</div>
</aside>

<aside class="serviceMaintenance">
<header>
<h3>Maintenance about Services</h3>
</header>
<div class="serviceMaintenanceInfo">
<p><?php echo get_post_meta($post->ID,'メンテナンス情報',true); ?></p>
</div>
</aside>
    
<aside class="serviceInfoList">
<header>
<h3>New Information about Services</h3>
</header>
<div class="serviceContentList">
<?php
//@todo:サービスの更新情報（JSON形式）を読み込んでリスト表示をする
$infoJson = @file_get_contents(get_post_meta($post->ID,'更新情報JSONデータURL',true),true);
if($infoJson != false){
    $serviceNewInfoList = json_decode($infoJson, true);
    echo '<ul>';
    foreach($serviceNewInfoList as $newInfoList){
        echo '<li><a href="'.$newInfoList['url'].'" target="_blank">';
        echo '<span>'.$newInfoList['date'].'</span>　'.$newInfoList['title'];
        echo '</a></li>';
    }
    echo '</ul>';
}else{
    echo '<p>最新情報はありません。</p>';
}
?>
</div>
</aside>

<aside class="recentEntry">
<header>
<h3 class="serviceSmallMidashi">Recent Services</h3>
</header>
<div class="recentContent">
<ul>
<?php query_posts('showposts=5&post_type=services'); ?>
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