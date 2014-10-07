<?php global $theme; ?>
    
	<table border width="600px">
		<tr>
			<td>
				<?php the_title(); ?>
			</td>
			<td>
				<?php echo get_the_date(); ?>
			</td>
		</tr>
		<tr>
			<td>
            <?php
                if(has_post_thumbnail())  {
                    ?><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(
                        array($theme->get_option('featured_image_width'), $theme->get_option('featured_image_height')),
                        array("class" => $theme->get_option('featured_image_position') . " featured_image")
                    ); ?></a><?php  
                }
            ?>
			</td>
			<td>
				<p>
					<?php
					  echo $theme->shorten(get_the_excerpt(), '40');
					?>				
				</p>
			</td>
		</tr>
	</table>
    