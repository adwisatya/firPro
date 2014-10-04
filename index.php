<link rel="stylesheet" type="text/css" href="<?php echo THEMATER_URL; ?>/css/bootstrap.css">

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
		<tr>
			<td>
				<img width="100%" src="<?php echo dirname(THEMATER_URL);?>/images/default-slides/2.jpg" align="center" />
			</td>
		</tr>
		<tr>
			<td valign="top">
				<table border>
					<tr>
						<td valign="top">
							<!-- tempat news -->
							<div id="content" width="70%">
									<h2>NEWS</h2>
									<?php 
										$is_post_wrap = 0;
											if (have_posts()) : while (have_posts()) : the_post();
											/**
											 * The default post formatting from the post.php template file will be used.
											 * If you want to customize the post formatting for your homepage:
											 * 
											 *   - Create a new file: post-homepage.php
											 *   - Copy/Paste the content of post.php to post-homepage.php
											 *   - Edit and customize the post-homepage.php file for your needs.
											 * 
											 * Learn more about the get_template_part() function: http://codex.wordpress.org/Function_Reference/get_template_part
											 */

											$is_post_wrap++;
												if($is_post_wrap == '1') {
													?><div class="post-wrap clearfix"><?php
												}
												get_template_part('post', 'homepage');
												
												if($is_post_wrap == '2') {
													$is_post_wrap = 0;
													?></div><?php
												}
											
										endwhile;
										
										else :
											get_template_part('post', 'noresults');
										endif; 
											
											if($is_post_wrap == '1') {
												?>
												</div>
												<?php
											} 
										
										get_template_part('navigation');
									?>
							</div>
						</td>
						<td align="right" valign="top">
							<?php get_sidebars(null); ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td align="center" >
				<div id="copyrights" style="background-color:#F69B02;width:100%;" align="center">
					<table width="100%" border>
						<tr>
							<td width="30%" align="left">
							   <h2>Services</h2>
							   <h4>CIVIL ENGINEERING</h4>
							   <h4>MARINE ENGINEERING</h4>
							   <h4>METOCEAN & HYDRODYNAMICS ANALYSIS</h4>
							   <h4>STRUCTURAL ANALYSIS</h4>

							</td>
							<td width="30%" align="center">
							   <h2>Portofolio</h2>
							   <h4>Sediment Transport Study & Analysis</h4>
							   <h4>Metocean Data Integration Study</h4>
							   <h4>Integrity Analysis of BOG</h4>
							   <h4>North Shore Housing Restoration Fund.</h4>					   
							</td>
							<td width="30%" align="right">
							   <h2>Contact Us</h2>
								<h4>A. Yani 510H Bandung 40122 Indonesia</h4>
								<h4>022-93395826</h4>
								<h4>022-93395825</h4>
								<h4>email: contacts@ilpi-eng.com</h4>
							</td>
						</tr>
					</table>
				</div>
			</td>
		</tr>
	</table>
</body>