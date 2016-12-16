<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php bloginfo('name'); ?></title>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header">

						<!-- Logo -->
							<h1><a href="index.php"><?php bloginfo('name'); ?></a></h1>
							<h4><?php bloginfo('description'); ?></h4>
							<br>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class="current"><a href="index.html">Home</a></li>
									<li>
										<a href="#">Dropdown</a>
										<ul>
											<li><a href="#">Lorem ipsum dolor</a></li>
											<li><a href="#">Magna phasellus</a></li>
											<li><a href="#">Etiam dolore nisl</a></li>
											<li>
												<a href="#">Phasellus consequat</a>
												<ul>
													<li><a href="#">Magna phasellus</a></li>
													<li><a href="#">Etiam dolore nisl</a></li>
													<li><a href="#">Veroeros feugiat</a></li>
													<li><a href="#">Nisl sed aliquam</a></li>
													<li><a href="#">Dolore adipiscing</a></li>
												</ul>
											</li>
											<li><a href="#">Veroeros feugiat</a></li>
										</ul>
									</li>
									<li><a href="left-sidebar.html">Left Sidebar</a></li>
									<li><a href="right-sidebar.html">Right Sidebar</a></li>
									<li><a href="no-sidebar.html">No Sidebar</a></li>
								</ul>
							</nav>

						<!-- Banner -->
							<section id="banner">
								<header>
									<h2>Howdy. This is Dopetrope.</h2>
									<p>A responsive template by HTML5 UP</p>
								</header>
							</section>