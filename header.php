<?php global $theme ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		<?php $theme->meta_title(); ?>
	</title><link rel="stylesheet" type="text/css" href="<?php echo THEMATER_URL; ?>/css/bootstrap.css">
</head>
<body>
	<table border align="center" style="width:100%">
		<tr>
			<td>
				<div style="align:center">
					<img src="<?php echo dirname(THEMATER_URL); ?>/banner.jpg" width="100%"></img>
					<table border width="100%" align="center">
						<tr>
							<td border=1 width="100%">
								 <div class="navbar" width="100%">
									<ul class="nav" style="background-color:#F69B02;width:100%">
										<li style="margin-left:0px;margin-right:40px;">
											<a href="index.php">
											<i class="icon-th-large"></i>HOME
											</a>
										</li>
										<li class="dropdown" style="margin-left:40px;margin-right:40px;">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-th-large"></i>NEWS
											</a>
											<ul class="dropdown-menu">
												<li><a href="sejarahami.html">Marine</a></li>
												<li><a href="sejarahami.html">Civil</a></li>

											</ul>
										</li>
										<li class="dropdown" style="margin-left:40px;margin-right:40px;">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="icon-th-large"></i>PROFILE
										</a>
										<ul class="dropdown-menu">
											<li><a href="index.php?page=mantan-cleaning-service.html">About Us</a></li>
											<li><a href="index.php?page=impian-dan-kesempatan.html">Services</a></li>
											<li><a href="index.php?page=aku-bisa-masuk-itb.html">Portofolio</a></li>
										</ul>
										</li>
										<li class="dropdown" style="margin-left:40px;margin-right:0px;">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="icon-th-large"></i>CONTACT
										</a>
									</ul>	
								</div>												 
							</td>
						</tr>	
					</table>
				</div>
			</td>
		</tr>
	</table>