<?php
/**
 * Template Name: Archives
*/

global $theme; get_header(); ?>

            
        
            <?php 
                if (have_posts()) : while (have_posts()) : the_post();
                    /**
                     * Find the post formatting for the pages in the post-page.php file
                     */
                    get_template_part('post', 'page');
                endwhile;
                
                else :
                    get_template_part('post', 'noresults');
                endif; 
            ?>
            
				<div style="height:450px">
					<table>
						<tr>
							<td>
								<div id="footer-kiri" style="background-color:white">
									<h3>Lastest 20 Posts</h3>
									
									<ul class="sitemap-list">
										<?php wp_get_archives('type=postbypost&limit=20&show_post_count=1'); ?>
									</ul>
									
								</div>
												
								<div id="footer-tengah" style="background-color:white">
									<h3>Categories</h3>
									<ul class="sitemap-list">
										<?php wp_list_categories('title_li=&show_count=1'); ?>
									</ul>
								</div>
								
								<div id="footer-kanan" style="background-color:white">
									<h3>Monthly Archives</h3>
									<ul class="sitemap-list">
										<?php wp_get_archives('type=monthly&show_post_count=1'); ?>
									</ul>
								</div>
							</td>
						</tr>
					</table>
                </div>
    
<?php get_footer(); ?>