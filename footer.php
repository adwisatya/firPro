
    <div align="center">
		<div id="copyrights">
			<div id="footer-kiri">
					<h3>Services</h3>
					<p>CIVIL ENGINEERING</br>
					MARINE ENGINEERING</br>
					METOCEAN & HYDRODYNAMICS ANALYSIS</br>
					STRUCTURAL ANALYSIS</br>
			</div>
			<div id="footer-tengah" align="center">
			</div>
			<div id="footer-kanan">
				<h3>Contact Us</h3>
				<p>A. Yani 510H Bandung 40122 Indonesia</br>
				022-93395826</br>
				022-93395825</br>
				email: contacts@ilpi-eng.com</p>			
			</div>
        </div>
        <div id="creditsberes">Powered by <a href="http://wordpress.org/"><strong>WordPress</strong></a> | Theme Designed by: <?php echo wp_theme_credits(0); ?>  | Thanks to <?php echo wp_theme_credits(1); ?>, <?php echo wp_theme_credits(2); ?> and <?php echo wp_theme_credits(3); ?></div><!-- #credits -->
	</div><!-- #footer -->
 </div>
 
<!--jquery, bisa didownload di jquery.com -->
    <script type='text/javascript'
        src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'>
    </script>

    <!--script animasi-->
    <script type='text/javascript'>
     function simpleSlideshow(slideContainer, duration)
    {
        var currentSlide = $('img:nth-child(1)', slideContainer);
         $(currentSlide)
        .css({
            opacity: 0
        })
        .appendTo(slideContainer)
 
        .animate({
            opacity: 1
        }, 'normal', function(){
            setTimeout(function(){
                simpleSlideshow(slideContainer, duration);
            }, duration);
        })
    }
 
    $(function(){
        var duration = 3000; // millsecond        
        var slideContainer = $('#slideshow');
        simpleSlideshow(slideContainer, duration);
    });
    </script>
</body>
</html>