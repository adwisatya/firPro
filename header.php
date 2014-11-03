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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<style type="text/css">
	.bs-example{
    	margin: 20px;
    }
</style>
<body <?php body_class(); ?> >
	<div id="container" style="width:960px;margin-top:75px;margin-bottom:75px;">
		<div style="width:960px;align:center;margin-right:0px;" height="300px">
			<img style="height:150px" src="<?php echo get_template_directory_uri(); ?>/images/banner2.jpg" width="960px">
			<table width="960px" align="center" style="margin-top:5px" cellspacing="0px" cellpadding="0px">
				<tr>
					<td border=1 width="960px">
						 <div class="navbar" width="100%" style="margin-left:0px;margin-right:0px;">
							<ul class="nav" style="background-color:#F69B02;width:100%;" align="center">
								<li style="margin-left:60px;margin-right:40px;">
									<a href="http://ilpi-eng.com/">
									HOME
									</a>
								</li>
								<li class="pembatas_header">
									&nbsp;
								</li>
								<li class="dropdown" style="margin-left:75px;">
									<a href="http://ilpi-eng.com/news-2/" class="dropdown-toggle" data-toggle="dropdown">
										NEWS
									</a>
								</li>
								<li class="pembatas_header">
									&nbsp;
								</li>
								<li class="dropdown" style="margin-left:75px;">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								PROFILE
								</a>
								<ul class="dropdown-menu">
									<li><a href="http://ilpi-eng.com/aboutus/">About Us</a></li>
									<li><a href="http://ilpi-eng.com/service/">Services</a></li>
									<li><a href="http://ilpi-eng.com/portofolio-2/">Portofolio</a></li>
								</ul>
								</li>
								<li class="pembatas_header">
									&nbsp;
								</li>
								<li class="dropdown" style="margin-left:80px;">
									<a href="http://ilpi-eng.com/contact/" class="dropdown-toggle" data-toggle="dropdown">
									CONTACT
								</a>
							</ul>	
						</div>
					</td>
				</tr>	
			</table>
		</div>
