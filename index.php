<?php get_header(); ?>
<body>
	<table border align="center" width="100%">
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
	</table>
<?php get_footer(); ?>