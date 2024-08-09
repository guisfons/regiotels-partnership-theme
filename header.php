<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title><?php echo get_bloginfo('name'); ?></title>
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

	<?php
		wp_head();

		global $current_user;
		wp_get_current_user();
	?>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
</head>
<body <?php body_class($post->post_name ?? ''); ?>>
    <header class="header">
        <div class="wrapper">
            <figure class="header__logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo.webp" alt="RegiÔtels logo"></figure>
            <a href="#contact">Talk to a consultant</a>
        </div>
    </header>