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

/*wp_generatorの削除*/
remove_action('wp_head', 'wp_generator');

/*winmanifest_linkの削除*/
remove_action('wp_head', 'wlwmanifest_link');

/*rsd_linkの削除*/
remove_action('wp_head', 'rsd_link');

/*アイキャッチ画像の設定（投稿用）*/
add_theme_support('post-thumbnails');
set_post_thumbnail_size(300,200,true);

/* セルフピンバックを無効にする */
function no_self_ping( &$links ) {
    $home = get_option( 'home' );
    foreach ( $links as $l => $link ){
        if ( 0 === strpos( $link, $home ) ){
            unset($links[$l]);
	}
    }
}
add_action('pre_ping', 'no_self_ping' );

/* カテゴリーを数の多い順に抜き出す */
function get_all_category_all(){
    if (!$cat_all = wp_cache_get('all_category_all', 'category')){
        $cat_all = get_terms('category', 'fields=all&get=all&orderby=count&order=DESC');
        wp_cache_add('all_category_all', $cat_all, 'category');
    }
    return $cat_all;
}

/* 月別アーカイブのHTMLを変更する */
function my_archives_link($output) {
    $output = preg_replace('/<\/a>\s*(&nbsp;)\((\d+)\)/',' ($2)</a>',$output);
    return $output;
}
add_filter('get_archives_link', 'my_archives_link');
?>

<?php
/* コメントのHTMLをカスタマイズする(divの数が合っていないので空のdivを一つ加えてあげる) */
function mytheme_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
?>
<div>
<div class="commentScntence">
<p class="commentHeader"><?php comment_author_link(); ?><br><time><?php comment_date(); ?></time></p>
<?php comment_text(); ?>
</div>
<?php } ?>

<?php
//@todo: 出力したいサイズのバリエーションを増やす
/*
 * Example:
 * add_image_size( $name, $width, $height, $crop );
 * add_image_size( 'mini', 45, 45, true );
 * 
 */
?>