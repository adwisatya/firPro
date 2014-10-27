<?php global $theme; ?>

    <div <?php post_class('post post-single clearfix'); ?> id="post-<?php the_ID(); ?>">
    
        <div class="postmeta-primary">
    
            <span class="meta_date"><?php echo get_the_date(); ?></span>
           &nbsp; <span class="meta_categories"><?php the_category(', '); ?></span>
    
                <?php if(comments_open( get_the_ID() ))  {
                    ?> &nbsp; <span class="meta_comments"><?php comments_popup_link( __( 'No comments', 'themater' ), __( '1 Comment', 'themater' ), __( '% Comments', 'themater' ) ); ?></span><?php
                }
                
                if(is_user_logged_in())  {
                    ?> &nbsp; <span class="meta_edit"><?php edit_post_link(); ?></span><?php
                } ?> 
        </div>
        <div id="postingan-single" align="center">
			<h2 class="title"><?php the_title(); ?></h2>
			<hr/>
			<div class="entry clearfix">

				<?php
					the_content('');
					wp_link_pages( array( 'before' => '<p><strong>' . __( 'Pages:', 'themater' ) . '</strong>', 'after' => '</p>' ) );
				?>
		
			</div>
        </div>
        <?php if(get_the_tags()) {
                ?><div class="postmeta-secondary"><span class="meta_tags"><?php the_tags('', ', ', ''); ?></span></div><?php
            }
        ?> 
        
    
    </div><!-- Post ID <?php the_ID(); ?> -->