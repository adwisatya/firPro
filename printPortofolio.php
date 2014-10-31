<?php
	$portofolio	=	file("portofolio.txt");
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