<?php session_start(); global $theme;
/**
* Template Name: Services
*/
?>
	
 
	<style>
		#civil-desc,#marine-desc,#metocean-desc,#structural-desc{
			font-family : Arial;
			font-size : 12pt;
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
			width:80%;
			margin : auto auto auto auto;
		}
		
		img{
			margin-top:20pt;
		}

		#civil-eng {
			background-image: url('<?php echo get_template_directory_uri(); ?>/images/services/05.png');
			background-repeat: no-repeat;
		    width :800px;
		    height :400px;
		}

		#civil-eng:hover{
			background-image: url('<?php echo get_template_directory_uri(); ?>/images/services/05-bw.png');
		}
		
		#marine-eng {
			background-image: url('<?php echo get_template_directory_uri(); ?>/images/services/02.png');
			background-repeat: no-repeat;
		    width : 800px;
			height : 400px;
		}

		#marine-eng:hover{
			background-image: url('<?php echo get_template_directory_uri(); ?>/images/services/02-bw.png');
		}


		#metocean-eng {
			background-image: url('<?php echo get_template_directory_uri(); ?>/images/services/07.png');
			background-repeat: no-repeat;
		    width : 800px;
			height : 400px;
		}

		#metocean-eng:hover{
			background-image: url('<?php echo get_template_directory_uri(); ?>/images/services/07-bw.png');
		}


		#structural-eng {
			background-image: url('<?php echo get_template_directory_uri(); ?>/images/services/04.png');
			background-repeat: no-repeat;
		    width : 800px;
			height : 400px;
		}

		#structural-eng:hover{
			background-image: url('<?php echo get_template_directory_uri(); ?>/images/services/04-bw.png');
		}

			
	</style>
	
<?php global $theme; get_header(); ?>

		
		<div class="list-services" style="margin-bottom:50px">
								<img style="height:25px;" src="<?php echo get_template_directory_uri(); ?>/images/services/civil-engineering.png" height="40px">

				<div id="civil-eng" onclick="OnCivil()">
					
				</div>
				<p id="civil-desc" style="margin-left:15px;"></p>
				
				<img style="height:25px;" src="<?php echo get_template_directory_uri(); ?>/images/services/marine-engineering.png" height="40px">
				
				<div id="marine-eng" onclick="OnMarine()">
					
				</div>
				<p id="marine-desc" style="margin-left:15px;"></p>
								<img style="height:25px;" src="<?php echo get_template_directory_uri(); ?>/images/services/metocean-and-hydrodynamics.png" height="40px" style="width:100%;">

				<div id="metocean-eng" onclick="OnMetocean()">
					
				</div>
				<p id="metocean-desc" style="margin-left:15px;"></p>

				<img style="height:25px;" src="<?php echo get_template_directory_uri(); ?>/images/services/structural-analysis.png" height="40px">
				
				<div id="structural-eng" onclick="OnStructural()">
					
				</div>
				<p id="structural-desc" style="margin-left:15px;"></p>
		</div>
	
	<script>
		function OnCivil(){
			if(document.getElementById("civil-desc").innerHTML==""){
				document.getElementById("civil-desc").innerHTML = "We provide services in field development planning, conceptual design, and engineering of: <ul><li>building(residental, commercial, educational, and industries)</li><li>foundation and geotechnical analysis</li><li>irrigation, flood control, canal, and other water infrastructures</li></ul>";
			}
			else{
				document.getElementById("civil-desc").innerHTML = "";	
			}
		}
		function OnMarine(){
			if(document.getElementById("marine-desc").innerHTML==""){
				document.getElementById("marine-desc").innerHTML = "We provide services in field development planning, conceptual design, and engineering of: <ul> <li>port and harbour facilities</li> <li>dredging and reclamation works</li> <li>pipelines</li> <li>coastal defences and structures</li> <li>marine vehicles</li> <li>offshore mooring facilities</li> <li>meteorology and oceanography data survey and analysis</li> </ul>";
			}
			else{
				document.getElementById("marine-desc").innerHTML = "";	
			}
		}
		function OnMetocean(){
			if(document.getElementById("metocean-desc").innerHTML==""){
				document.getElementById("metocean-desc").innerHTML = "Metocean analysis is one of our know-how-business. We develop our own methods in order to optimize the analysis working hours<br/><br/>Various of environmental databases enable us to achieve reliable results<br/><br/>We have <b>in-house programs</b> to solve metocean-related problems, one of them is <b>AnGel<sup>TM</sup>, a random wave analysis program.</b> <br/><br/>We provide experienced personnels to conduct surveys, analysis, and to provide presentation of the results.";
			}
			else{
				document.getElementById("metocean-desc").innerHTML = "";	
			}
		}
		function OnStructural(){
			if(document.getElementById("structural-desc").innerHTML==""){
				document.getElementById("structural-desc").innerHTML = "Our people always check the <b>validity</b> of the analysis and the <b>accuracy</b> of the analysis results. If it is necessary, <b>verification</b> of the result also can be done by our engineers.<br/><br/><b>Original analysis softwares</b> and <b>in-house programs</b> are used to avoid unnecessary defects in analysis results, maintain our company integrity, and support the intellectual property rights.";
			}
			else{
				document.getElementById("structural-desc").innerHTML = "";	
			}
		}
	</script>

<?php get_footer(); ?>