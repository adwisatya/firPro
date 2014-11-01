<?php global $theme; get_header(); ?>
<body <?php body_class(); ?>>
<div id="container" style="margin-top:0px;">
<div style="align:center">
		<img src="http://localhost/ILPI-ENG/wordpress/wp-content/themes/FreshNews/banner.jpg" width="100%"></img>
		<table bgcolor="#00FF00">
			<tr>
                <td height="20px" border=1 width="100%">
					 <div class="navbar" >
						<ul class="nav" >
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
    <div id="main">

        <?php $theme->hook('main_before'); ?>
		
        <div id="content">
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
			
        </div><!-- #content -->
	 <?php get_sidebars(null); ?>

</div><!-- #main -->

<?php get_footer(); ?>