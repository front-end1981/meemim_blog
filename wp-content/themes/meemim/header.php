<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>
<body <?php is_page('Home') ? body_class('front-page') : body_class(); ?> >

	<header class="<?php echo is_page('Home')? 'home-page' : ''?>">
		<div class="logo">
			<?php if (is_page('Home')): ?>
				<a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Meemim logo"></a>
			<?php else: ?>
				<a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo_page.png" alt="Meemim logo"></a>
			<?php endif;?>
		</div>
		<nav class="main-navigation">
			<?php wp_nav_menu(array('menu' => 'top-menu', 'menu_class' => 'top-menu')); ?>
		</nav>
	</header>
	<div class="wrapper <?php echo is_page('Home')? 'home-page' : ''?>">
