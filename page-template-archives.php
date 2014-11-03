<?php
/**\
 * Template Name: Archives
*/

global $theme; get_header(); ?>
            
      
            
				<div style="display: block; position: relative; overflow: hidden;margin-bottom:300px">
					<table>
						<tr>
							<td></td>
								<div class="footer-latest-20-posts" style="background-color:white;" >
									<h3>Latest 20 News</h3>
										<ul class="sitemap-list">
											<?php $the_query = new WP_Query( 'showposts=20' ); ?>
											<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
												<div class="post-masing-masing" style="margin-bottom:10px;">
												<li>
													<a href="<?php the_permalink() ?>"><?php the_title(); ?></a> &nbsp; <?php echo get_the_date(); ?>
												</li>
												<!--
												<div class="gambar-latest-20-posts" style="background-color:white;">
													 <img src="<?php echo catch_that_image(); ?>"> 
												</div>
												
												
												<div class="isi-latest-20-posts" style="background-color:white;">
													<?php
													/*
															$content = get_the_content();
															$trimmed_content = wp_trim_words( $content, 10, '<a href="'. get_permalink() .'"> ...Read More</a>' );
															echo $trimmed_content;
													*/
													?>
												</div>
												-->
											</div>
											<?php endwhile;?>
										</ul> 
								</div>
								<div class="footer-monthly-archives" style="background-color:white;">
									<h3>Monthly Archives</h3>
									<ul class="sitemap-list">
										<?php wp_get_archives('type=monthly'); ?>
									</ul>
								</div>
								<!--		
								<div id="footer-tengah" style="background-color:white">
									<h3>Categories</h3>
									<ul class="sitemap-list">
										<?php wp_list_categories('title_li=&show_count=1'); ?>
									</ul>
								</div>
								-->
								<!--
								<div id="footer bulan" style="background-color:white">
									<h3>Monthly Archives</h3>
									<ul class="sitemap-list">
										<?php wp_get_archives('type=monthly'); ?>
									</ul>
								</div>
								-->

							</td>
						</tr>
					</table>
                </div>
    

<?php
function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches[1][0];

  
  return $first_img;
}
?>


<?php get_footer(); ?>