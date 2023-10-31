<?php get_template_part( 'partials/head', 'common' ); ?>
<!-- Additional stylesheet -->
<!-- <link rel="stylesheet" href=""> -->
</head>

<body <?php body_class(); ?>>
<?php get_header(); ?>

<?php the_content(); ?>

<?php get_footer(); ?>
</body>
</html>