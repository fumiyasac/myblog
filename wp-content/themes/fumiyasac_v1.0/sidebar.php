<?php
/*
Template:
Theme Name: fumiyasac_v1.0
Theme URI: http://blog.just1factory.net
Description: fumiyasac create blog template
Author: Fumiya Sakai (just1factory)
Author URI: http://blog.just1factory.net
Template: sidebar.php
Version: 1.0
*/
?>
<aside class="searchArea">
<header>
<h3><img src="<?php bloginfo('template_url'); ?>/common/images/common/header_search.gif" height="20" width="204" alt=""></h3>
</header>
<div class="sideContent clearfix">
<form id="searchForm" method="get" action="<?php echo home_url('/'); ?>">
<input id="searchText" title="Please input keyword here!" class="autoClear" type="text" name="s">
<input id="searchSubmit" type="submit" value="">
</form>
</div>
</aside>

<aside class="categoryArea">
<header>
<h3><img src="<?php bloginfo('template_url'); ?>/common/images/common/header_category.gif" height="20" width="204" alt=""></h3>
</header>
<div class="sideNavContent">
<ul>
<?php
$terms = get_all_category_all();
foreach($terms as $term){
if($term->name != '未分類'){
echo '<li><a href="'.get_category_link($term->term_id).'">';
echo $term->name.'&nbsp;('.$term->count.')';
echo '</a></li>';
}
}
?>
</ul>
</div>
</aside>

<aside class="backnumberArea">
<header>
<h3><img src="<?php bloginfo('template_url'); ?>/common/images/common/header_backnumber.gif" height="20" width="204" alt=""></h3>
</header>
<div class="sideNavContent">
<ul>
<?php wp_get_archives('show_post_count=false'); ?>
</ul>
</div>
</aside>

<aside class="twitterArea">
<header>
<h3><img src="<?php bloginfo('template_url'); ?>/common/images/common/header_twitter.gif" height="20" width="204" alt=""></h3>
</header>
<div class="twitterTLContent">
<ul id="twitList1" class="twitBody">
<!--/* contents insert by jQuery */-->
</ul>
<div class="sideNavContent">
<ul>
<li><a href="http://twitter.com/fumiyasac" target="_blank">Show whole timeline</a></li>
</ul>
</div>
</div>
</aside>
