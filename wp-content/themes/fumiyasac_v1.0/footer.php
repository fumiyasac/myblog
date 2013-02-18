<?php
/*
Template:
Theme Name: fumiyasac_v1.0
Theme URI: http://blog.just1factory.net
Description: fumiyasac create blog template
Author: Fumiya Sakai (just1factory)
Author URI: http://blog.just1factory.net
Template: footer.php
Version: 1.0
*/ 
?>

<!-- subContainer Start -->
<div id="subContainer">
<div id="subContent">

<section class="navSub">
<header>
<h4><img src="<?php bloginfo('template_url'); ?>/common/images/common/midashi_footer_contents.gif" height="13" width="147" alt=""></h4>
</header>
<nav class="clearfix">
<ul class="navBlock1">
<li><a href="/">TOP</a></li>
<li><a href="/about">About</a></li>
<li><a href="/reports">Reports</a></li>
<li><a href="/programming">Programming</a></li>
<li><a href="/design">Design</a></li>
<li><a href="/information">Information</a></li>
</ul>
<ul class="navBlock2">
<li><a href="/activities">Activities</a></li>
<li><a href="/services">My Services</a></li>
<!--<li><a href="/advertisement">Advertisement</a></li>-->
<li><a href="/contact">Contact</a></li>
<li><a href="/feed">Feed</a></li>
</ul>
</nav>      
</section>

<section class="partnerSub">
<header>
<h4><img src="<?php bloginfo('template_url'); ?>/common/images/common/midashi_footer_partners.gif" height="13" width="164" alt=""></h4>
</header>
<div class="partnerContent">
<?php if($footerList = json_decode(file_get_contents(home_url('/')."/json/footerads/footer.json"),true)): ?>
<ul>
<?php foreach($footerList as $footer): ?>
<li <?php if($footer['id'] % 2 != 0) echo 'class="magr30"'; ?>>
<img src="<?php echo home_url('/'); ?><?php echo $footer['banner']; ?>" width="290" height="100" alt="">
<p><strong><?php echo $footer['title']; ?></strong><br><a href="<?php echo $footer['url']; ?>"><?php echo $footer['description']; ?></a></p>
</li>
<?php endforeach; ?>
</ul>
<?php else: ?>
<p>まだこのページは更新されていません。</p>
<?php endif; ?>
</div>
</section>

</div>
</div>
<!-- subContainer End -->

<!-- footer Start -->
<footer id="globalFooter">
<div class="footerContent">
<p class="copyright"><img src="<?php bloginfo('template_url'); ?>/common/images/common/footer_copyright.gif" height="12" width="235" alt=""></p>
<p class="topAnchor"><a href="#pageTop"><img src="<?php bloginfo('template_url'); ?>/common/images/common/footer_pagetop.gif" height="10" width="75" alt=""></a></p>
</div>
</footer>
<!-- footer End -->

</div>
<!-- wrapper End -->
</body>
</html>