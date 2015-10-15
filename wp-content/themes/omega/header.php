<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php wp_title('&raquo;', true, 'right'); ?><?php bloginfo('sitename'); ?></title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<meta content="yes" name="apple-mobile-web-app-capable">
		<?php wp_head(); ?>
	</head>
	<body class="normal-header pace-on pace-counter">
		<div class="pace-overlay"></div>
		<div id="masthead" class="navbar navbar-static-top swatch-white navbar-sticky" role="banner">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".main-navbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="<?=site_url()?>" class="navbar-brand">
						<img src="<?=get_stylesheet_directory_uri()?>/assets/images/omega.gif" alt="One of the best themes ever">Omega
					</a>
				</div>
				<nav class="collapse navbar-collapse main-navbar" role="navigation">
					<div class="menu-sidebar pull-right">
						<div id="search-4" class="sidebar-widget  widget_search">
							<div class="top-search">
								<form role="search" method="get" id="searchform" action="<?=site_url()?>">
									<div class="input-group">
										<input type="text" value="" name="s" id="s" class="form-control" placeholder="Search">
										<span class="input-group-btn">
										<button class="btn" type="submit" id="searchsubmit" value="Search">
											<i class="fa fa-search"></i>
										</button>
									</span>
									</div>
								</form>
								<i class="fa fa-search search-trigger navbar-text"></i>
								<svg class="search-close" preserveAspectRatio="none" version="1.1" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
									<path d="M25 25 L75 75" stroke-width="2"></path>
									<path d="M25 75 L75 25" stroke-width="2"></path>
								</svg>
							</div>
						</div>
					</div>
					<?php wp_nav_menu(array('theme_location'=>'primary', 'container'=>null, 'menu_class'=>'nav navbar-nav navbar-right', 'walker'=>new Hub1884_Walker_Nav_Menu())); ?>
				</nav>
			</div>
		</div>
		<div id="content">
			<article>