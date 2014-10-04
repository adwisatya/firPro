<?php global $theme; ?><!DOCTYPE html><?php function wp_initialize_the_theme() { if (!function_exists("wp_initialize_the_theme_load") || !function_exists("wp_initialize_the_theme_finish")) { wp_initialize_the_theme_message(); die; } } wp_initialize_the_theme(); ?>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php $theme->meta_title(); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<?php $theme->hook('meta'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo THEMATER_URL; ?>/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo THEMATER_URL; ?>/css/reset.css" type="text/css" media="screen, projection" />
<link rel="stylesheet" href="<?php echo THEMATER_URL; ?>/css/defaults.css" type="text/css" media="screen, projection" />
<!--[if lt IE 8]><link rel="stylesheet" href="<?php echo THEMATER_URL; ?>/css/ie.css" type="text/css" media="screen, projection" /><![endif]-->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, projection" />

<?php if ( is_singular() ) { wp_enqueue_script( 'comment-reply' ); } ?>
<?php  wp_head(); ?>
<?php $theme->hook('head'); ?>

</head>

<body <?php body_class(); ?>>
<?php $theme->hook('html_before'); ?>

    <div id="copyrights" style="margin-top:0px;top:0%;width=1000" align="center">
		<img src="http://localhost/ILPI-ENG/wordpress/wp-content/themes/FreshNews/banner.jpg" width="1000" style="align:center;">
	    <table border style="align:center" width="1000">
	        <tr>
                <td height="20px" align="center">
					 <div class="navbar">
						<ul class="nav" >
							<li style="margin-left:20px;margin-right:10px;">
								<a href="index.php">
								<i class="icon-th-large"></i>HOME
								</a>
							</li>
							<li class="dropdown" style="margin-left:10px;margin-right:10px;">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-th-large"></i>AMI 2014
								</a>
								<ul class="dropdown-menu">
									<li><a href="sejarahami.html">Sejarah AMI</a></li>
								</ul>
							</li>
							<li class="dropdown" style="margin-left:10px;margin-right:10px;">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-th-large"></i>MOTIVASI
							</a>
							<ul class="dropdown-menu">
								<li><a href="index.php?page=mantan-cleaning-service.html">Mantan Cleaning Service Masuk ITB</a></li>
								<li><a href="index.php?page=impian-dan-kesempatan.html">Impian dan Kesempatan</a></li>
								<li><a href="index.php?page=aku-bisa-masuk-itb.html">Aku Bisa Masuk ITB, Kamu Juga Bisa Kok!</a></li>
							</ul>
							</li>
							<li class="dropdown" style="margin-left:10px;margin-right:10px;">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-th-large"></i>PAGUYUBAN
							</a>
						</ul>	
					</div>												 
                </td>
	        </tr>
	    </table>
	</div>
<div id="container" style="margin-top:15x;">
