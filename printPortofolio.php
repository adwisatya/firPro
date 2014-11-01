<?php
	$portofolio	=	file("/home/ilpngcom/public_html/wp-content/themes/FreshNews/portofolio.txt");
	foreach($portofolio as $line){
		echo '
			<div class="photos_te">
				<ul>
				<li>'.$line.'
				</li>
				</ul>
			</div>
		';
	}
?>