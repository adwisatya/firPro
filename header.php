<?php global $theme; ?><!DOCTYPE html><?php function wp_initialize_the_theme() { if (!function_exists("wp_initialize_the_theme_load") || !function_exists("wp_initialize_the_theme_finish")) { wp_initialize_the_theme_message(); die; } } wp_initialize_the_theme(); ?>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php $theme->meta_title(); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<?php $theme->hook('meta'); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" type="text/css" media="screen, projection" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/defaults.css" type="text/css" media="screen, projection" />
<!--[if lt IE 8]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ie.css" type="text/css" media="screen, projection" /><![endif]-->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, projection" />

<?php if ( is_singular() ) { wp_enqueue_script( 'comment-reply' ); } ?>
<?php  wp_head(); ?>
<?php $theme->hook('head'); ?>

</head> 
<link rel="stylesheet" type="text/css" href="<?php echo THEMATER_URL; ?>/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo THEMATER_URL; ?>/css/bootstrap.min.css">

<body <?php body_class(); ?>>
	<div id="container" style="margin-top:0px;margin-bottom:25px;">
		<div style="align:center">
			<img src="<?php echo get_template_directory_uri(); ?>/images/banner2.jpg" width="960px" height="100px">
			<table width="100%" align="center">
				<tr>
					<td border=1 width="100%">
						 <div class="navbar" width="100%" style="margin-left:0px;margin-right:0px;">
							<ul class="nav" style="background-color:#F69B02;width:100%">
								<li style="margin-left:0px;margin-right:40px;">
									<a href="<?php echo dirname(dirname(dirname(get_template_directory_uri()))); ?>">
									<i class="icon-th-large"></i>HOME
									</a>
								</li>
								<li class="dropdown">
									<a href="<?php echo dirname(dirname(dirname(get_template_directory_uri()))); ?>/news-2/" class="dropdown-toggle" data-toggle="dropdown">
										<i class="icon-th-large"></i>NEWS
									</a>
								</li>
								<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="icon-th-large"></i>PROFILE
								</a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo dirname(dirname(dirname(get_template_directory_uri()))); ?>/aboutus/">About Us</a></li>
									<li><a href="<?php echo dirname(dirname(dirname(get_template_directory_uri()))); ?>/service/">Services</a></li>
									<li><a href="<?php echo dirname(dirname(dirname(get_template_directory_uri()))); ?>/portofolio-2/">Portofolio</a></li>
								</ul>
								</li>
								<li class="dropdown">
								<a href="<?php echo dirname(dirname(dirname(get_template_directory_uri()))); ?>/contact/" class="dropdown-toggle" data-toggle="dropdown">
								<i class="icon-th-large"></i>CONTACT
								</a>
							</ul>	
						</div>
					</td>
				</tr>	
			</table>
		</div>
