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
<div class="commentToggle">
<span>
<?php comments_number('皆様から頂いたコメント（0）', '皆様から頂いたコメント（1）', '皆様から頂いたコメント（%）'); ?>
<?php /*echo '皆様から頂いたコメント（'.get_comments_number().'）';*/ ?>
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
</aside>
