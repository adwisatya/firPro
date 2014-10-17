<?php global $theme; get_header(); ?>
	<table>
		<tr>
			<td>
				<div>
					<h3 style="margin-left: 10px;">NEWS</h3>
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