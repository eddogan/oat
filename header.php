<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
<link href="https://fonts.googleapis.com/css?family=Open+Sans|Saira+Semi+Condensed" rel="stylesheet">
</head>
<body <?php body_class(); ?>>

<header>
	<?php wp_nav_menu( array( 'theme_location' => 'utility-menu' ) ); ?>
	<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
	<?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
</header>