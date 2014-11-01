<?php global $theme; get_header(); ?>
	<table style="margin-bottom:75px">
		<tr>
			<td>
				<div style="margin-top:15px;margin-bottom:225px;">
					<div id='slideshow'>
						<?php
						$dir=	dirname(__FILE__)."/images/slideshow/";
						$files = scandir($dir,1);
						for($i = 0;$i < count($files);$i++){
							echo "<img src='".get_template_directory_uri()."/images/slideshow/".$files[$i]."'>";
						}
						?>
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>

				<div>
					<h3 style="margin-left: 15px;">LASTEST NEWS</h3>
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
			<td>
				<div style="float:right"> 	
					<?php get_sidebars(null); ?>
				</div>
			</td>
		</tr>
	</table>
<?php get_footer(); ?>