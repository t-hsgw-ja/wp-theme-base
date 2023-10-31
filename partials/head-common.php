<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title ( '|', true,'right' ); ?><?php bloginfo('name'); ?></title>
<meta name="description" content="">

<!-- Favicon -->
<link rel="shortcut icon" href="path/to/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="path/to/favicon.ico">
<link rel="icon" href="path/to/favicon.ico" sizes="32x32">
<link rel="icon" href="path/to/favicon.ico" sizes="192x192">
<link rel="apple-touch-icon" href="path/to/favicon.ico">
<meta name="msapplication-TileImage" content="path/to/favicon.ico">

<meta name="googlebot" content="index,follow">
<meta name="classification" content="business">
<meta name="url" content="<?php echo esc_url( get_permalink(get_the_ID()) ); ?>">
<meta name="identifier-URL" content="<?php echo esc_url( get_permalink(get_the_ID()) ); ?>">
<!-- <meta http-equiv="Content-Security-Policy" content="default-src 'self'"> -->
 
<meta name="format-detection" content="telephone=no">

<!-- SocialMedia Setting -->
<!-- facebook -->
<meta property="og:url" content="<?php echo esc_url( get_permalink(get_the_ID()) ); ?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?php wp_title ( '|', true,'right' ); ?><?php bloginfo('name'); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="">
<meta property="og:site_name" content="<?php bloginfo('name') ?>">
<meta property="og:locale" content="ja_JP">
<!-- twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:url" content="<?php echo esc_url( get_permalink(get_the_ID()) ); ?>">
<meta name="twitter:title" content="<?php wp_title ( '|', true,'right' ); ?><?php bloginfo('name'); ?>">
<meta name="twitter:description" content="">
<meta name="twitter:image" content="">