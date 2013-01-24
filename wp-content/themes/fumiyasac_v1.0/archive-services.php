<?php
/*
Theme Name: fumiyasac-v1.0
Theme URI: http://blog.just1factory.com
Description: fumiyasac create blog template
Author: Fumiya Sakai (just1factory)
Author URI: http://blog.just1factory.com
Template: archive-services.php
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
<li class="last">Services</li>
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
<h2>
<img src="<?php bloginfo('template_url'); ?>/common/images/common/header_top_myservices.gif" height="24" width="740" alt="">
</h2>
</header>

<?php if(have_posts()):while(have_posts()):the_post(); ?>
<article class="articleList">
<header>
<h3><?php the_title(); ?></h3>
<p class="date"><time><?php the_time('Y.n.j'); ?></time>&nbsp;Author：<?php the_author(); ?></p>
</header>
<section>
<div class="services">
<?php if(has_post_thumbnail($post->ID)): ?>
<?php echo get_the_post_thumbnail($post->ID, 'service_article'); ?>
<?php else: ?>
<img src="<?php bloginfo('template_url'); ?>/common/images/sample/thumb_top_sample_about1.jpg" height="350" width="700" alt="">
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
<p><?php echo get_post_meta($post->ID,'開発サービスのキャッチコピー',true); ?></p>
<p class="readMore"><a href="<?php the_permalink(); ?>">Show Details</a></p>
</div>
</section>
</article>
<?php endwhile;endif; ?>

<aside class="pager">
<div class="pagerBlock">
<?php 
global $wp_rewrite;
$paginate_base = get_pagenum_link(1);
if (strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()) {
    $paginate_format = '';
    $paginate_base = add_query_arg('paged', '%#%');
} else {
    $paginate_format = (substr($paginate_base, -1 ,1) == '/' ? '' : '/') .
    user_trailingslashit('page/%#%/', 'paged');;
    $paginate_base .= '%_%';
}
echo paginate_links(
    array(
        'base' => $paginate_base,
        'format' => $paginate_format,
        'total' => $wp_query->max_num_pages,
        'mid_size' => 5,
        'current' => ($paged ? $paged : 1),
        'prev_text' => '&laquo; Prev',
        'next_text' => 'Next &raquo;',
    )
); 
?>
</div>
</aside>

</article>

</div>
<!-- rightColumn End -->

</div>
<!-- mainContainer End -->

<?php get_footer(); ?>