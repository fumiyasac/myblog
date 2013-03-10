<?php
/*
Template:
Theme Name: fumiyasac_v1.0
Theme URI: http://blog.just1factory.net
Description: fumiyasac create blog template
Author: Fumiya Sakai (just1factory)
Author URI: http://blog.just1factory.net
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
/* コメントの注釈部分を削除する */
function my_special_comment_after($args){
    $args['comment_notes_after'] = '';
    $args['label_submit'] = 'コメントを投稿する';
    $args['comment_field'] = '<p><textarea id="comment" name="comment" title="コメントを入力して下さい" class="autoClear" aria-required="true"></textarea></p>';
    return $args;
}
add_filter("comment_form_defaults","my_special_comment_after");

//@todo: 出力したいサイズのバリエーションを増やす
/*
 * Example:
 * add_image_size( $name, $width, $height, $crop );
 * add_image_size( 'mini', 45, 45, true );
 * 
 */
add_image_size('blog_article', 700, 464, true);
add_image_size('service_article', 700, 350, true);

//ビジュアルリッチエディターにボタンを追加
function ilc_mce_buttons($buttons){
    array_push($buttons, "backcolor", "copy", "cut", "paste", "fontsizeselect", "cleanup");
    return $buttons;
}
add_filter("mce_buttons", "ilc_mce_buttons");

//カスタム投稿タイプを作成（services）
//開発サービス投稿タイプ
function services_custom_post_type(){
    $labels = array(
        'name' => _x('開発サービス事例', 'post type general name'),
        'singular_name' => _x('開発サービス事例', 'post type singular name'),
        'add_new' => _x('開発サービス事例を追加', 'jobinfo'),
        'add_new_item' => __('新しい開発サービス事例を追加'),
        'edit_item' => __('開発サービス事例を編集'),
        'new_item' => __('新しい開発サービス事例'),
        'view_item' => __('開発サービス事例を編集'),
        'search_items' => __('開発サービス事例を探す'),
        'not_found' => __('開発サービス事例はありません'),
        'not_found_in_trash' => __('ゴミ箱に開発サービス事例はありません'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
/*        'rewrite' => true, */
        'rewrite' => array('slug' => 'services'),
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'has_archive' => true,
        'supports' => array('title','editor','author','excerpt','comments','custom-fields','thumbnail'),
        'taxonomies' => array('services_category','services_tag')
    );
    register_post_type('services',$args);

    //カスタムタクソノミーを作成
    //カテゴリータイプ
    $args = array(
        'label' => '開発サービス事例カテゴリー',
        'public' => true,
        'show_ui' => true,
        'hierarchical' => true
    );
    register_taxonomy('services_category','services',$args);
   
    //タグタイプ
    $args = array(
        'label' => '開発サービス事例タグ',
        'public' => true,
        'show_ui' => true,
        'hierarchical' => false
    );
    register_taxonomy('services_tag','services',$args);
}
add_action('init', 'services_custom_post_type');

//カスタム投稿タイプのスラッグをページIDにするためのリライト設定
function myposttype_rewrite() {
    global $wp_rewrite;
    $queryarg = 'post_type=services&p=';
    $wp_rewrite->add_rewrite_tag('%services_id%', '([^/]+)',$queryarg);
    $wp_rewrite->add_permastruct('services', '/services/%services_id%', false);
}
add_action('init', 'myposttype_rewrite');

function myposttype_permalink($post_link, $id = 0, $leavename) {
    global $wp_rewrite;
    $post = &get_post($id);
    if ( is_wp_error( $post ) )
        return $post;
    $newlink = $wp_rewrite->get_extra_permastruct($post->post_type);
    $newlink = str_replace('%'.$post->post_type.'_id%', $post->ID, $newlink);
    $newlink = home_url(user_trailingslashit($newlink));
    return $newlink;
}
add_filter('post_type_link', 'myposttype_permalink', 1, 3);

//wordpressのバージョンアップ通知を消去する
add_filter( 'pre_site_transient_update_core', '__return_zero' );
remove_action( 'wp_version_check', 'wp_version_check' );
remove_action( 'admin_init', '_maybe_update_core' );


//検索結果は投稿記事のみとする
function SearchFilter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}
add_filter('pre_get_posts','SearchFilter');

//contact form 7のCSSを削除
add_action( 'wp_print_styles', 'my_deregister_styles', 100 );
function my_deregister_styles() {
        wp_deregister_style( 'contact-form-7' );
}

//contact form 7のJSを削除
add_action( 'wp_print_scripts', 'my_deregister_script', 100 );
function my_deregister_script() {
	wp_deregister_script( 'contact-form-7' );
}

//スマートフォンの条件分岐
function isSmartPhone(){
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if( (strpos($ua,'iPhone') !== false) || (strpos($ua,'iPod') !== false) || (strpos($ua,'Android') !== false) ){
      $uaVal = "sp";  
    }else{
      /*$uaVal = "web";*/ $uaVal = "sp";  
    }
    return $uaVal;
}

//定数値の条件分岐（指定したキーに該当する値を取得）
function getArrayConfig($key){
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if( isSmartPhone() === "sp" ){
        
        //配列定数値の設定（スマートフォン）
        $templateConfig = array(
            'sliderTopImgSizeWidth' => '320',
            'sliderTopImgSizeHeight' => '120',
        );
        
    }else{
        
        //配列定数値の設定（Web画面）
        $templateConfig = array(
            'sliderTopImgSizeWidth' => '980',
            'sliderTopImgSizeHeight' => '380',
        );
        
    }
    
    //該当キーの値を取得
    $value = $templateConfig[$key];
    return $value;
}

?>