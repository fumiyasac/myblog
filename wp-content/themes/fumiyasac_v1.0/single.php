<?php
/*
Theme Name: fumiyasac-v1.0
Theme URI: http://blog.just1factory.com
Description: fumiyasac create blog template
Author: Fumiya Sakai (just1factory)
Author URI: http://blog.just1factory.com
Template: single.php
Version: 1.0
*/
?>
<?php
/* いらないCSSを削除 */
if(has_action('wp_head','_admin_bar_bump_cb')){
remove_action('wp_head','_admin_bar_bump_cb');
}
get_header();
?>

<!-- breadcramb Start -->
<aside class="breadcramb">
<ul>
<li><a href="#">TOP</a></li>
<li><a href="#">Programming</a></li>
<li class="last">タイトルが入ります</li>
</ul>
</aside>
<!-- breadcramb End -->
    
<!-- leftColumn Start -->
<div id="leftColumn">
<?php get_sidebar(); ?>
</div>
<!-- leftColumn End -->

<!-- rightColumn Start -->
<div id="rightColumn">

<article class="detailArticle">

<header class="detailTitleArticle">
<h2><img src="<?php bloginfo('template_url'); ?>/common/images/common/header_detail_programming.gif" height="24" width="740" alt=""></h2>
</header>

<article class="articleList">
<header>
<h3>タイトルが入ります</h3>
<p class="date"><time>2011.11.07</time>&nbsp;Author：Fumiya Sakai</p>
</header>

<aside class="socialButton">
<ul>
<li class="padr10"><a href="http://mixi.jp/share.pl" class="mixi-check-button"　data-key="mixi チェックキー">Check</a>
<script type="text/javascript" src="http://static.mixi.jp/js/share.js"></script></li>
<li><a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-lang="ja">ツイート</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script></li>
<li><iframe src="http://www.facebook.com/plugins/like.php?locale=ja_JP&amp;href=http%3A%2F%2Fcreo153%2Ecom%2F&amp;send=false&amp;layout=button_count&amp;width=90&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font=&amp;height=21" scrolling="no" frameborder="0" style="border:none;overflow:hidden;width:103px;height:21px;" allowtransparency="true"></iframe></li>
<li><g:plusone size="medium"></g:plusone></li>
</ul>
</aside>

<section>
<div class="entry">

<!--fundamental set//-->
<p><a rel="shadowbox" href="<?php bloginfo('template_url'); ?>/upload/sample_large2.jpg" title="sample"><img src="<?php bloginfo('template_url'); ?>/common/images/sample/thumb_detail_sample.jpg" height="464" width="700" title="" class="image"></a></p>
<p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
<p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>

<!--header set//-->
<h4>強調タグとリンクタグ、改行タグの行間</h4>
<p><strong>ここだけ強調タグが入ります。</strong><br>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
<p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
<p><a href="#">リンクが入ります。</a></p>

<!--blockquote set//-->
<h4>引用・転載部分の行間</h4>
<blockquote>
<p>引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載引用・転載</p>
</blockquote>

<!--list & table set//-->
<h4>リストタグの行間</h4>
<ul>
<li>リスト1</li>
<li>リスト2</li>
<li>リスト3</li>
</ul>

<ol>
<li>リスト1</li>
<li>リスト2</li>
<li>リスト3</li>
</ol>

</div>
</section>

<aside class="categoryInfo">
<div class="categoryInfoBox">
<p><img src="<?php bloginfo('template_url'); ?>/common/images/common/icon_programming.gif" height="15" width="70" alt=""></p>
<div>
<ul>
<li><a href="#">PHP</a></li>
<li><a href="#">CakePHP</a></li>
</ul>
</div>
</div>
</aside>

<aside class="relatedEntry">
<header>
<h3><img src="<?php bloginfo('template_url'); ?>/common/images/common/header_related_entries.gif" height="19" width="700" alt=""></h3>
</header>
<div class="relatedContent">
<ul>
<li><a href="#">この記事と関連するエントリーが入ります</a></li>
<li><a href="#">この記事と関連するエントリーが入ります</a></li>
<li><a href="#">この記事と関連するエントリーが入ります</a></li>
<li><a href="#">この記事と関連するエントリーが入ります</a></li>
<li><a href="#">この記事と関連するエントリーが入ります</a></li>
</ul>
</div>
</aside>

<aside class="commentForm">
<header>
<h3><img src="<?php bloginfo('template_url'); ?>/common/images/common/header_comment_form.gif" height="19" width="700" alt=""></h3>
</header>
<div class="commentFormArea">
<form action="/wp-comments-post.php" method="post" id="commentform">
<p class="remarkText">メールアドレスは公開されません。&nbsp;<span class="commentRed">*</span>がついている項目は必須になります。</p>
<p><input type="text" name="author" id="author" class="autoClear" title="お名前を入力してください（必須）" tabindex="1"><label>お名前<span class="commentRed">*</span></label></p>
<p><input type="text" name="email" id="email" class="autoClear" title="メールアドレスを入力してください（必須）" tabindex="2"><label>E-Mail<span class="commentRed">*</span></label></p>
<p><input type="text" name="url" id="url" class="autoClear" title="サイトURLを入力してください" tabindex="3"><label>URL</label></p>
<p><textarea name="comment" id="comment" title="コメントを入力して下さい" class="autoClear" tabindex="4"></textarea></p>
<input name="submit" type="submit" id="submit" tabindex="5" value="コメントを送信する" />
</form>
</div>
</aside>

<aside class="commentDetails">
<div class="commentToggle">
<span>皆様から頂いたコメント（10）</span>
</div>
<div class="commentArea">	
<div class="commentScntence">
<p class="commentHeader">Fumiya Sakai<br><time>2011.10.10</time></p>
<p>全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する。</p>
<p>全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する。</p>
<p>全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する。</p>
<p>全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する。</p>
</div>
<div class="commentScntence">
<p class="commentHeader">Fumiya Sakai<br><time>2011.10.10</time></p>
<p>全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する。</p>
<p>全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する。</p>
<p>全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する。</p>
<p>全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する。</p>
</div>
<div class="commentScntence">
<p class="commentHeader">Fumiya Sakai<br><time>2011.10.10</time></p>
<p>全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する。</p>
<p>全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する。</p>
<p>全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する。</p>
<p>全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する。</p>
</div>
<div class="commentScntence">
<p class="commentHeader">Fumiya Sakai<br><time>2011.10.10</time></p>
<p>全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する。</p>
<p>全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する。</p>
<p>全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する。</p>
<p>全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する全てのコメントを表示する。</p>
</div>
</div>
</aside>

</article>

</article>

</div>
<!-- rightColumn End -->

</div>
<!-- mainContainer End -->

<?php get_footer(); ?>