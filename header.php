<?php global $theme ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		<?php $theme->meta_title(); ?>
	</title><link rel="stylesheet" type="text/css" href="<?php echo THEMATER_URL; ?>/css/bootstrap.css">
</head>
<body>
	<table align="center" style="width:100%;border:none;margin:0px;">
		<tr>
			<td colspan="4">
					<img src="<?php echo dirname(THEMATER_URL); ?>/images/banner.jpg" width="100%"></img>
				</td>
			</tr>
			<tr id="separator"><td colspan="4"></td></tr>
			<tr style="background-color:#F69B02;">
				<td id="td-menu-left">
					<div class="navbar" style="width:100%;" >
						<ul class="nav" style="background-color:#F69B02;width:100%;">
							<li class="dropdown">
								<a href="index.php">
								Home
								</a>
							</li>
						</ul>
					</div>
				</td>
							<td id="td-menu-left">
								<div class="navbar" width="100%">
									<ul class="nav" style="background-color:#F69B02;width:100%;">
										<li class="dropdown">
											<a href="news.php" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-th-large"></i>News
											</a>
											<ul class="dropdown-menu">
												<li><a href="sejarahami.html">Marine</a></li>
												<li><a href="sejarahami.html">Civil</a></li>

											</ul>
										</li>
									</ul>
								</div>
							</td>
							<td id="td-menu-left">
								<div class="navbar" width="100%">
									<ul class="nav" style="background-color:#F69B02;width:100%;">
										<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="icon-th-large"></i>Profil
										</a>
										<ul class="dropdown-menu">
											<li><a href="index.php?page=mantan-cleaning-service.html">About Us</a></li>
											<li><a href="index.php?page=impian-dan-kesempatan.html">Services</a></li>
											<li><a href="index.php?page=aku-bisa-masuk-itb.html">Portofolio</a></li>
										</ul>
										</li>
									</ul>
								</div>
							</td>
							<td id="td-menu-right">
								<div class="navbar" width="100%">
									<ul class="nav" style="background-color:#F69B02;width:100%;">
										<li class="dropdown">
										<a href="contact.php" class="dropdown-toggle" data-toggle="dropdown">
										<i class="icon-th-large"></i>Contact
										</a>
										</li>
									</ul>	
								</div>												 
							</td>
						</tr>
						<tr id="separator"><td colspan="4"></td></tr>	
				</div>
			</td>
		</tr>
	</table>