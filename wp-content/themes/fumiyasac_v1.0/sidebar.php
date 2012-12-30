<?php
/*
Theme Name: fumiyasac-v1.0
Theme URI: http://blog.just1factory.com
Description: fumiyasac create blog template
Author: Fumiya Sakai (just1factory)
Author URI: http://blog.just1factory.com
Template: sidebar.php
Version: 1.0
*/
?>
<aside class="searchArea">
<header>
<h3><img src="<?php bloginfo('template_url'); ?>/common/images/common/header_search.gif" height="20" width="204" alt=""></h3>
</header>
<div class="sideContent clearfix">
<form id="searchForm" method="get">
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
<li><a href="#">Reports</a></li>
<li><a href="#">Programming</a></li>
<li><a href="#">Design</a></li>
</ul>
</div>
</aside>

<aside class="backnumberArea">
<header>
<h3><img src="<?php bloginfo('template_url'); ?>/common/images/common/header_backnumber.gif" height="20" width="204" alt=""></h3>
</header>
<div class="sideNavContent">
<ul>
<li><a href="#">2011.11</a></li>
<li><a href="#">2011.10</a></li>
<li><a href="#">2011.09</a></li>
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
<li><a href="http://twitter.com/fumiyasac" target="_blank">公式アカウントはこちら</a></li>
</ul>
</div>
</div>
</aside>
