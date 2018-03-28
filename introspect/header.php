<!DOCTYPE HTML>
<!--
	Introspect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Introspect by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="<?= esc_url( home_url( '/' ) );?>" class="logo"><?php bloginfo( 'name' ); ?></a>
						<?php wp_nav_menu([
							'container' => false,
							'menu' => 'Primary',
							'menu_class' => 'links'
						]); ?>
				</div>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>