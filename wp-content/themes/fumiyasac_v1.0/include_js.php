<?php
/*
Template:
Theme Name: fumiyasac_v1.0
Theme URI: http://blog.just1factory.net
Description: fumiyasac create blog template
Author: Fumiya Sakai (just1factory)
Author URI: http://blog.just1factory.net
Template: include_js.php
Version: 1.0
*/
?>
<?php /* スマートフォンのとき */ if(isSmartPhone() === "sp"): ?>
<script src="<?php bloginfo('template_url'); ?>/common/js/jquery.easing.1.3.js"></script>
<script src="<?php bloginfo('template_url'); ?>/common/js/pagescroller.js"></script>
<script src="<?php bloginfo('template_url'); ?>/common/js/jquery.cycle.all.pack.js"></script>
<script src="<?php bloginfo('template_url'); ?>/common/sp/js/definition.js"></script>
<?php if(is_home()): ?>
<script src="<?php bloginfo('template_url'); ?>/common/sp/js/top.js"></script>
<?php endif; ?>
<?php if(is_single()): ?>
<script src="<?php bloginfo('template_url'); ?>/common/sp/js/detail.js"></script>
<script src="<?php bloginfo('template_url'); ?>/common/js/validator.js"></script>
<?php endif ?>
<?php /* Webのとき */ else: ?>
<script src="<?php bloginfo('template_url'); ?>/common/js/html5media.js"></script>
<script src="<?php bloginfo('template_url'); ?>/common/js/jquery.easing.1.3.js"></script>
<script src="<?php bloginfo('template_url'); ?>/common/js/jquery.color.js"></script>
<script src="<?php bloginfo('template_url'); ?>/common/js/pagescroller.js"></script>
<script src="<?php bloginfo('template_url'); ?>/common/js/jquery.cycle.all.pack.js"></script>
<script src="<?php bloginfo('template_url'); ?>/common/js/jquery.opacity.rollover.js"></script>
<script src="<?php bloginfo('template_url'); ?>/common/js/jscrollpane.js"></script>
<script src="<?php bloginfo('template_url'); ?>/common/js/vtip.js"></script>
<script src="<?php bloginfo('template_url'); ?>/common/js/lazyload.js"></script>
<script src="<?php bloginfo('template_url'); ?>/common/js/jquery.autoclear.js"></script>
<?php if(is_home()): ?>
<script src="<?php bloginfo('template_url'); ?>/common/js/top.js"></script>
<?php elseif(is_single() || is_404() || is_page()): ?>
<?php if(!is_404()): ?>
<script src="<?php bloginfo('template_url'); ?>/common/js/shadowbox.js"></script>
<script src="<?php bloginfo('template_url'); ?>/common/js/googleplus1.js"></script>
<?php if(is_single()): ?>
<script src="<?php bloginfo('template_url'); ?>/common/js/validator.js"></script>
<?php endif ?>
<?php endif ?>
<script src="<?php bloginfo('template_url'); ?>/common/js/detail.js"></script>
<?php else: ?>
<script src="<?php bloginfo('template_url'); ?>/common/js/list.js"></script>
<?php endif ?>
<script src="<?php bloginfo('template_url'); ?>/common/js/definition.js"></script>
<!--[if IE 6]>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/common/js/DD_belatedPNG.js"></script>
<script type="text/javascript">
DD_belatedPNG.fix('#slider .sliderContents .caption,.png');
</script>
<![endif]-->
<?php /* 振り分けおわり */ endif; ?>
