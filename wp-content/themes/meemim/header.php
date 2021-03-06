<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<?php if (is_page('Home')):?>
		<title>Meemim: The Knowledge People</title>
    <?php elseif (preg_match_all('/blog/',$_SERVER['PHP_SELF'])):?>
        <title> Blog | Meemim</title>
    <?php else:?>
		<title><?php the_title()?> | Meemim</title>
	<?php endif?>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
					(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-66463213-2', 'auto');
		ga('send', 'pageview');
	</script>

	<script type="text/javascript">
		setTimeout(function(){var a=document.createElement("script");
		var b=document.getElementsByTagName("script")[0];
		a.src=document.location.protocol+"//script.crazyegg.com/pages/scripts/0043/0042.js?"+Math.floor(new Date().getTime()/3600000);
		a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
	</script> 
</head>
<body <?php is_page('Home') ? body_class('front-page') : body_class(); ?> >
<div
		<?php if (is_page('Home')):?>
		class="wrapper-header"
		style="background-image: url('<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]?>')"
		<?php endif?>
>
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
			<span class="sub-menu-caret"></span>
			<?php wp_nav_menu(array('menu' => 'top-menu', 'menu_class' => 'top-menu')); ?>
		</div><!-- /.navbar-collapse -->

	</nav>

	<?php if( is_page('Home') ):?>
	<div class="container-header">
		<div class="banner-block">
			<span class="banner-top">COLLECT. ORGANIZE. SHARE.</span>
			<span class="banner-center">
				Meemim is a collaboration platform that helps you
				organize information within your company so that
				everyone can find what they need, when they need it.
			</span>
			<span class="banner-bottom">
				<a class="banner-button">Request Demo</a>
			</span>
		</div>
		<div class="img-video">
			<img class="js-img-fade" src="<?php bloginfo('template_url'); ?>/images/image/laptop.png">
			<div class="homepage_video_embed js-img-fade">
				<button id="playbutton" name="play"></button>
			</div>
		</div>
	</div>
	<?php endif;?>
</div>



	<div class="wrapper <?php echo is_page('Home')? 'home-page' : ''?>">

		