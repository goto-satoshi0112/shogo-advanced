<?php
//カスタム投稿タイプのリビジョンを有効にする
function my_custompost_rv()
{
  add_post_type_support('info', 'revisions');
}
add_action('init', 'my_custompost_rv');

/* 投稿アーカイブページの作成 */
function post_has_archive( $args, $post_type ) {

	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'blog'; //任意のスラッグ名
	}
	return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

//投稿にサムネイルを投稿//
add_theme_support('post-thumbnails');

/* 抜粋文の文字数を110文字から変更 */
function twpp_change_excerpt_length( $length ) {
  return 70; 
}
add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );

/* 抜粋後の記号を[・・・]から変更する */
function twpp_change_excerpt_more( $more ) {
  return '...';
}
add_filter( 'excerpt_more', 'twpp_change_excerpt_more' );