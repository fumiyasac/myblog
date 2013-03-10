<?php
/*
Template:
Theme Name: fumiyasac_v1.0
Theme URI: http://blog.just1factory.net
Description: fumiyasac create blog template
Author: Fumiya Sakai (just1factory)
Author URI: http://blog.just1factory.net
Template: include_css.php
Version: 1.0
*/
?>
<?php if(isSmartPhone() === "sp"): ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/common/sp/css/common.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/common/sp/css/detail.css">
<?php else: ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<?php if(is_single() || is_page()): ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/common/css/shadowbox.css">
<?php endif; ?>
<?php endif; ?>