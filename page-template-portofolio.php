<?php
/**
 * Template Name: Portofolio
*/

global $theme; get_header(); ?>

<div id="header_teo" style="margin-left:20px;margin-top:20px;">
	<h2>PROJECTS PORTFOLIO</h2>
</div>

<div id="content-header_teo" style="margin-bottom:70px;margin-left:25px;">
	<div class="topic_teo">
	
	Our People are Experienced in
	</div>
	<div class="item-body">

		<div class="title">
		<img src = "<?php echo get_template_directory_uri(); ?>/images/portofolio/2013.jpg"><br>
			
		</div>
		<div class="photos_te">
			<ul> 
			<li>Sediment Transport Study and Analysis, Metocean Data Update, and Risk Assessment on PGN SSWJ Offshore Pipeline</li>
			</ul>
		</div>
		<div class="photos_te">
			<ul>
			<li> Metocean Data Integration Study for WMO Field</li>
			</ul>
		</div>	
		
	</div>
	<br>
	<br>
	<div class="item-body2">
		<div class="title">
		<img src = "<?php echo get_template_directory_uri(); ?>/images/portofolio/2014.jpg"><br>
			
		</div>
		<div class="photos_te">
			<ul> 
			<li>Integrity Analysis of BOG Cliff at Tangguh LNG Plant</li>
			</ul>
		</div>
		<div class="photos_te">
			<ul>
			<li> North Shore Housing Restoration Funding Assistance-Bintuni Bay- West Papua </li>
			</ul>
		</div>
		<div class="photos_te">
			<ul>
			<li> Feasibility Study Marine Facility POSB Project Petrosea, East Kalimantan 
			</li>
			</ul>
		</div>
		
	</div>
		<?php include(get_template_directory_uri()."/printPortofolio.php"); ?>
	
</div>

<?php get_footer(); ?>