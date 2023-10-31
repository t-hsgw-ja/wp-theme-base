<?php
/**
 * 
 * INCLUDE
 * 
 */
include 'env.php';


//アイキャッチ画像有効化
add_theme_support( 'post-thumbnails' );



/**
 * 管理画面  
 * 特定の投稿タイプでビジュアルエディター禁止＆テキストエディタに固定
 */
// add_filter( 'user_can_richedit', 'disable_visual_editor_for_posttype' );
// function disable_visual_editor_for_posttype( $default ) {
//   global $post;
//   if (
//     'page' === $post->post_type
//     // || 'posttype_name' === $post->post_type // <=投稿タイプも指定可能
//   ) {
//     return false;
//   }
//   return $default;
// }
// add_filter( 'wp_default_editor', 'set_default_editor_for_posttype' );
// function set_default_editor_for_posttype( $default_editor ) {
//   global $post;
//   if (
//     'page' === $post->post_type
//     // || 'posttype_name' === $post->post_type // <=投稿タイプも指定可能
//   ) {
//     return 'tinymce';
//   }
//   return $default_editor;
// }