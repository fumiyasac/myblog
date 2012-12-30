<?php
/*
Theme Name: fumiyasac-v1.0
Theme URI: http://blog.just1factory.com
Description: fumiyasac create blog template
Author: Fumiya Sakai (just1factory)
Author URI: http://blog.just1factory.com
Template: functions.php
Version: 1.0
*/ 

//wp_generatorの削除
remove_action('wp_head', 'wp_generator');

//winmanifest_linkの削除
remove_action('wp_head', 'wlwmanifest_link');

//rsd_linkの削除
remove_action('wp_head', 'rsd_link');

//アイキャッチ画像の設定（投稿用）
add_theme_support('post-thumbnails');
set_post_thumbnail_size(300,200,true);

//@todo: 出力したいサイズのバリエーションを増やす
/*
 * Example:
 * add_image_size( $name, $width, $height, $crop );
 * add_image_size( 'mini', 45, 45, true );
 * 
 */
?>