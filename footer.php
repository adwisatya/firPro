<?php global $theme; ?>
    
<?php if($theme->display('footer_widgets')) { ?>
    
<?php  } ?>

    <div id="footer">
        <div id="copyrights">
            <table>
                <tr>
                    <td width="320px">
                        <br>
                        <img src="../img/logo.png" width="200px" height="80px">
                    </td>
                    <td width="160">
                        &nbsp;
                    </td>
                    <td width="320px" align="left">
                        <h3>Contact Us</h3>
                        <br>A. Yani 510H Bandung 40122 Indonesia
                        <br>022-93395826
                        <br>022-93395825
                        <br>email: contacts@ilpi-eng.com
                    </td>
                </tr>
            </table>
        </div>
        <div id="credits">Powered by <a href="http://wordpress.org/"><strong>WordPress</strong></a> | Theme Designed by: <?php echo wp_theme_credits(0); ?>  | Thanks to <?php echo wp_theme_credits(1); ?>, <?php echo wp_theme_credits(2); ?> and <?php echo wp_theme_credits(3); ?></div><!-- #credits -->
    </div><!-- #footer -->
    
</div><!-- #container -->

<?php wp_footer(); ?>
<?php $theme->hook('html_after'); ?>
</body>
</html>