<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package medify
 */

?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<title>Family Doctor</title>
	<meta name="description" content="ページの説明" />
	<meta name="format-detection" content="telephone=no" />

	<!-- favicon/webclipicon -->
	<!-- <link rel="icon" href="favicon.ico" />
    <link rel="icon" href="favicon.svg" type="image/svg+xml" />
    <link rel="apple-touch-icon" href="webclip.png" /> -->

	<!-- ogp -->
	<meta property="og:site_name" content="サイト名" />
	<meta property="og:url" content="URL" />
	<meta property="og:type" content="website or article" />
	<meta property="og:title" content="ページのタイトル" />
	<meta property="og:description" content="ページの説明" />
	<meta property="og:image" content="URL" />
	<meta property="og:locale" content="ja_JP" />
	<!-- <meta property="fb:app_id" content="AppID"> -->
	<meta name="twitter:card" content="summary_large_image or summary" />
	<!-- <meta name="twitter:site" content="@moshamusha2010" /> -->
	<meta name="twitter:description" content="ページの説明" />
	<meta name="twitter:image:src" content="URL" />

	<!-- fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<!-- <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet" /> -->

	<!-- css -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/slick/slick.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/slick/slick-theme.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/import.css" />
</head>

<body>
	<header>
		<section id="headerPart">
			<div class="sidebar-overlay" id="sidebarOverlay"></div>
			<div class="sidebar" id="sidebar">
				<div class="sidebar-header">
					<img
						src="<?php bloginfo('template_directory'); ?>/assets/img/common/medify-logo sp.png"
						alt="logo"
						class="clinic-logo-sp-img" />
					<span id="closeSidebar" class="close-btn">&times;</span>
				</div>
				<nav class="sidebar-nav">
					<a href="<?php echo home_url(); ?>/" class="sidebar-link"> Home </a>
					<div class="sidebar-group">
						<div id="submenuToggle" class="has-submenu">
							<a href="#" class="parent-link">Pages <span id="submenuArrow" class="submenu-arrow"></span></a>
						</div>
						<div id="submenu" class="sidebar-submenu">
							<a href="<?php echo home_url(); ?>/aboutus/" class="submenu-link">About Us</a>
							<a href="<?php echo home_url(); ?>/history/" class="submenu-link">Our History</a>
							<a href="<?php echo home_url(); ?>/service/" class="submenu-link">Services</a>
							<a href="<?php echo home_url(); ?>/doctor/" class="submenu-link">Doctor</a>
							<a href="<?php echo home_url(); ?>/faq/" class="submenu-link">FAQ</a>
						</div>
					</div>
					<a href="<?php echo home_url(); ?>/blog2column/" id="homeLink" class="sidebar-link">Blog</a>
					<a href="<?php echo home_url(); ?>/contact/" id="homeLink" class="sidebar-link">Contacts</a>
				</nav>
			</div>
			<div class="header-wrapper">
				<div class="header">
					<div class="clinic-header">
						<div class="hamburger-menu" id="hamburger">
							<div class="bar first-bar"></div>
							<div class="bar second-bar"></div>
							<div class="bar third-bar"></div>
						</div>
						<a href="<?php echo home_url(); ?>/">
							<img
								src="<?php bloginfo('template_directory'); ?>/assets/img/common/logo.png"
								alt="logo"
								class="clinic-logo-img" />
							<img
								src="<?php bloginfo('template_directory'); ?>/assets/img/common/medify-logo sp.png"
								alt="logo"
								class="clinic-logo-sp-img" />
						</a>
						<nav>
							<div class="menu">
								<div class="menu-item"><a href="<?php echo home_url(); ?>/">Home</a></div>
								<div class="menu-item">
									<a href="#">Pages <span class="menu-item-plus"></span></a>
									<div class="submenu">
										<a href="<?php echo home_url(); ?>/aboutus/">About Us</a>
										<a href="<?php echo home_url(); ?>/history/">Our History</a>
										<a href="<?php echo home_url(); ?>/service/">Services</a>
										<a href="<?php echo home_url(); ?>/doctor/">Doctor</a>
										<a href="<?php echo home_url(); ?>/faq/">FAQ</a>
									</div>
								</div>
								<div class="menu-item"><a href="<?php echo home_url(); ?>/blog2column/">Blog</a></div>
								<div class="menu-item"><a href="<?php echo home_url(); ?>/contacts/">Contacts</a></div>
							</div>
						</nav>
					</div>
				</div>
			</div>

		</section>
	</header>