
    <meta charset="<?php bloginfo( 'charset "UTF-8"' );?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php
	if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
	    do_action( 'wp_body_open' );
	}
	?>

	<!-- Page Wrapper -->
	<div id="page-wrap">

		<!-- Boxed Wrapper -->

		<!-- Page Content -->
		<div class="page-content">
