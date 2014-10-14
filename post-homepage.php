<?php global $theme; ?>
	<div id="artikel" >
		<table>
			<tr>
				<td>
					<?php the_title(); ?>
				</td>
				<td>
					<p><?php echo get_the_date(); ?></p>
				</td>
			</tr>
			<tr>
				<td>
					<div id="artikel-thumbnail">
						<?php
							if(has_post_thumbnail())  {
								?><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(
									array($theme->get_option('featured_image_width'), $theme->get_option('featured_image_height')),
									array("class" => $theme->get_option('featured_image_position') . " featured_image")
								); ?></a><?php  
							}
						?>
					</div>
				</td>
				<td>
					<div id="artikel-summary">
						<?php
						  echo $theme->shorten(get_the_excerpt(), '250');
						?>	
					</div>
				</td>
			</tr>
		</table>
	</div>
    