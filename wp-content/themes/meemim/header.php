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
		<nav class="main-navigation collapse-menu">
			<?php wp_nav_menu(array('menu' => 'top-menu', 'menu_class' => 'top-menu')); ?>
		</nav>

		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</header>
	<nav class="navbar navbar-default <?php echo is_page('Home')? 'home-page' : ''?>" role="navigation">

		<!-- Группируем ссылки, формы, выпадающее меню и прочие элементы -->
		<div class="collapse navbar-collapse <?php echo is_page('Home')? 'home-page' : ''?>" id="bs-example-navbar-collapse-1">
			<?php wp_nav_menu(array('menu' => 'top-menu', 'menu_class' => 'top-menu')); ?>
		</div><!-- /.navbar-collapse -->

	</nav>


	<div class="wrapper <?php echo is_page('Home')? 'home-page' : ''?>">

		