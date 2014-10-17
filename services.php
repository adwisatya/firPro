<?php session_start(); global $theme;
/**
* Template Name: Services
*/
?>
	<?php
		if(!isset($civil_desc)){
			$civil_desc="gantent";
		}
	?>

	<style>
		p,li{
			font-family: Arial;
			font-size: 14pt;
		}
		.judul{
			font-family : Arial;
			font-size : 20pt;
			font-color : #000000;	
			z-index: 10;
		}
		.p1{
			font-family : Arial;
			font-size : 20pt;
			color : #FF0000;	
		}
		.p2{
			font-family : Arial;
			font-size : 12pt;
			font-color : #000000;	
		}
		.list-services{
			width:75%;
			margin : auto auto auto auto;
		}

		img{
			width:100%;
		}		
	</style>
<?php global $theme; get_header(); ?>

		<div class="list-services" >
				<div id="civil-eng" onclick="OnCivil()" style="margin-top:10px">
					<div class="judul"> <span class="p1" >Civil  </span>  Engineering </div>
					<img src="<?php echo get_template_directory_uri(); ?>/images/services/05.png" width="960px" >
					<p id="civil-desc"></p>
				</div>

				<div id="marine-eng" onclick="OnMarine()" style="margin-top:10px">
					<div class="judul"> <span class="p1" >Marine  </span>  Engineering </div>
					<img src="<?php echo get_template_directory_uri(); ?>/images/services/02.png" width="960px">
					<p id="marine-desc"></p>
				</div>

				<div id="metocean-eng" onclick="OnMetocean()"style="margin-top:10px">
					<div class="judul"> <span class="p1" >Metocean and Hydrodynamics  </span>  Analysis </div>
					<img src="<?php echo get_template_directory_uri(); ?>/images/services/07.png" width="960px">
					<p id="metocean-desc"></p>
				</div>

				<div id="structural-eng" onclick="OnStructural()" style="margin-top:10px">
					<div class="judul"> <span class="p1" >Structural  </span>  Analysis </div>
					<img src="<?php echo get_template_directory_uri(); ?>/images/services/04.png" width="960px">
					<p id="structural-desc"></p>
				</div>
		</div>
	<script>
		function OnCivil(){
			document.getElementById("civil-desc").innerHTML = "We provide services in field development planning, conceptual design, and engineering of: <ul><li>building(residental, commercial, educational, and industries)</li><li>foundation and geotechnical analysis</li><li>irrigation, flood control, canal, and other water infrastructures</li></ul>";
		}
		function OnMarine(){
			document.getElementById("marine-desc").innerHTML = "We provide services in field development planning, conceptual design, and engineering of: <ul> <li>port and harbour facilities</li> <li>dredging and reclamation works</li> <li>pipelines</li> <li>coastal defences and structures</li> <li>marine vehicles</li> <li>offshore mooring facilities</li> <li>meteorology and oceanography data survey and analysis</li> </ul>";
		}
		function OnMetocean(){
			document.getElementById("metocean-desc").innerHTML = "Metocean analysis is one of our know-how-business. We develop our own methods in order to optimize the analysis working hours<br/><br/>Various of environmental databases enable us to achieve reliable results<br/><br/>We have <b>in-house programs</b> to solve metocean-related problems, one of them is <b>AnGel<sup>TM</sup>, a random wave analysis program.</b> <br/><br/>We provide experienced personnels to conduct surveys, analysis, and to provide presentation of the results.";
		}
		function OnStructural(){
			document.getElementById("structural-desc").innerHTML = "Our people always check the <b>validity</b> of the analysis and the <b>accuracy</b> of the analysis results. If it is necessary, <b>verification</b> of the result also can be done by our engineers.<br/><br/><b>Original analysis softwares</b> and <b>in-house programs</b> are used to avoid unnecessary defects in analysis results, maintain our company integrity, and support the intellectual property rights.";
		}
	</script>

<?php get_footer(); ?>