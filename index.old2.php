<?php global $theme; get_header(); ?>

	<table border align="center" style="width:100%">
		<tr>
			<td>
				<div style="align:center">
					<img src="<?php echo get_template_directory_uri(); ?>/banner.jpg" width="100%"></img>
					<table border width="100%" align="center">
						<tr>
							<td border=1 width="100%">
								 <div class="navbar" width="100%">
									<ul class="nav" style="background-color:#F69B02;width:100%">
										<li style="margin-left:0px;margin-right:40px;">
											<a href="<?php echo get_template_directory_uri(); ?>/index.php">
											<i class="icon-th-large"></i>HOME
											</a>
										</li>
										<li class="dropdown" style="margin-left:40px;margin-right:40px;">
											<a href="<?php echo get_template_directory_uri(); ?>/news" class="dropdown-toggle" data-toggle="dropdown">
												<i class="icon-th-large"></i>NEWS
											</a>
										</li>
										<li class="dropdown" style="margin-left:40px;margin-right:40px;">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="icon-th-large"></i>PROFILE
										</a>
										<ul class="dropdown-menu">
											<li><a href="about_us.php">About Us</a></li>
											<li><a href="services.php">Services</a></li>
											<li><a href="portofolio.php">Portofolio</a></li>
										</ul>
										</li>
										<li class="dropdown" style="margin-left:40px;margin-right:0px;">
										<a href="<?php echo get_template_directory_uri(); ?>/contact.php" class="dropdown-toggle" data-toggle="dropdown">
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
				<img width="100%" src="<?php echo get_template_directory_uri(); ?>/images/default-slides/2.jpg" align="center">
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
													?><div><?php
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

	</table>
</body>