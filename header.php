<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-16x16.png">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/icons/manifest.json">
		<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="theme-color" content="#8800ff">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>
		<header class="header clear" role="banner">

			<div class="top-bar">

				<div class="breakpoint-nav">
					<nav class="nav" role="navigation">
						<a href="/">
							<svg class="logo"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/sprite-sheet.svg#logo"/></svg>
						</a>
						<?php calmingaudio_nav(); ?>
					</nav>
				</div>

				<!-- play controls -->
				<div class="breakpoint-play-controls">
					<div class="play-controls">
						<svg class="icon" id="increaseMaster"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/sprite-sheet.svg#volume-2"/></svg>
						<svg class="icon" id="muteMaster"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/sprite-sheet.svg#volume-x"/></svg>
						<svg class="icon display--none" id="pauseMaster"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/sprite-sheet.svg#pause-circle"/></svg>
						<svg class="icon" id="playMaster"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/sprite-sheet.svg#play-circle"/></svg>
					</div>
				</div>
				<!-- play controls -->
			</div>

		</header>
		<!-- /header -->
