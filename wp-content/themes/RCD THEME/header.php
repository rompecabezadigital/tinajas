<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to begin 
	/* rendering the page and display the header/nav
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<?php wp_head();?>

</head>

<body>
	
	<header></header>

<!--
<header id="masthead" class="site-header">
	<div class="container">
		<div class="row">
			<nav class="site-navigation main-navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) );?>
			</nav>
		</div>
	</div>
	<div class="container">
		<div class="row">
		<div id="brand">
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</h1>
			<h4 class="site-description">
				<?php bloginfo( 'description' ); ?>
			</h4>
			</div>
		</div>
		
		<div class="clear"></div>
	</div>
		
</header>
-->

<main class="main-fluid"><!-- start the page containter -->
