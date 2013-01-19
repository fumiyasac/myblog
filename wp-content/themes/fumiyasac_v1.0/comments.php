<?php
/*
Theme Name: fumiyasac-v1.0
Theme URI: http://blog.just1factory.com
Description: fumiyasac create blog template
Author: Fumiya Sakai (just1factory)
Author URI: http://blog.just1factory.com
Template: comments.php
Version: 1.0
*/

//パスワード保護記事か否かを判定する
if(post_password_required()){
    return;
}
?>

<?php 
//コメントフォーム
comment_form();
?>

<aside class="commentDetails">
<?php if(get_post_type() === 'post'): ?>
<div class="commentToggle">
<span>
<?php comments_number('皆様から頂いたコメント（0）', '皆様から頂いたコメント（1）', '皆様から頂いたコメント（%）'); ?>
</span>
</div>
<div class="commentArea">
<?php if(have_comments()): ?>
<?php
$args = array(
    'type' => 'comment',
    'style' => 'div',
    'callback' => 'mytheme_comment'
);
wp_list_comments($args);
?>
<?php endif; ?>
</div>
<?php else: ?>
<div class="commentServicesMessage">
<p>サービスに関するコメント及びご意見・ご要望は非公開となっております。</p>
</div>
<?php endif; ?>
</aside>
