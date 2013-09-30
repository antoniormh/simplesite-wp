<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<html>
<head>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<title><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/reset.css" type="text/
css" media="screen, projection" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/stylesheet.css" type="text/
css" media="screen, projection" />
</head>
<body id="index">
<!-- <div id="main-container"> -->
<!-- Main header -->
<div id="header-container" class="container">
	<div id="header-wrapper" class="wrapper">
		<div class="column six left">
			<header >
				<!-- <h1>Antonio's Simple Site</h1> -->
				<img src="./images/logo.png" alt="logo.png" id="logo">
			</header>	
		</div>
		<div class="column six right">
			<nav id="main-nav" class="align-right">
				<ul>
					<li><a href="/index.html">Home</a></li>
					<li><a href="/about.html">About</a></li>
					<li><a href="/contact.html">Contact</a></li>
				</ul>
			</nav>		
		</div>
		<div class="clear"></div>		
	</div>
</div>
<!-- Main header END -->