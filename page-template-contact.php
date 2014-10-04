<?php session_start(); global $theme;
/**
 * Template Name: Contact Form
*/
?>
<?php get_header() ?>
<body>
    <table border align="center" style="width:100%;">
        <!--row 1 :logo and menu ILPI-->
        <tr>
            <td colspan="2">
                <div style="align:center">
                    <img src="<?php echo dirname(THEMATER_URL); ?>/banner.jpg" width="100%"></img>
                    <table border width="100%" align="center">
                        <tr>
                            <td border=1 width="100%">
                                 <div class="navbar" width="100%">
                                    <ul class="nav" style="background-color:#F69B02;width:100%">
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
            </td>
        </tr>
        <!--row 2 : map-->
        <tr>
            <td align="center" colspan="2">
                <div id="googleMap" style="width:80%;height:400px;">
                </div>
            </td>
        </tr>
        <!--row 3 : content-->
        <tr>
            <?php //row 3, col 1 : contact, content is generated from the wp-admin ?>
            <td width="70%" valign="top">
                <h2 class="title"><font color="#CC0500">Contact Us</font></h2>
                <br />
                <h2 class="title"><font color="#CC0500">Kantor ILPI</font></h2>
                <h4>
                    Jalan Ahmad Yani 501H <br />
                    Bandung 40122<br/>
                    Indonesia<br /><br />
                    Tel : (022) 93395826<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(022) 93395825<br/>
                    Email : contacs@ilpi-eng.com
                </h4>

            </td>
            <?php //row 3, col 2 : contact form, will send to database or e-mail?>
            <td>
                <?php
                
                    if ($_POST['contact_form_submit'] ) {
                        if(!$_POST['contact_form_name'] || !$_POST['contact_form_email'] || !$_POST['contact_form_subject'] || !$_POST['contact_form_question'] || !$_POST['contact_form_message']) {
                            ?><div class="error"><?php _e('Please fill in all required fields!','themater'); ?></div><?php
                        } elseif(!is_email($_POST['contact_form_email'])) {
                            ?><div class="error"><?php _e('Invalid email!','themater'); ?></div><?php
                        } elseif(($_SESSION['contact_form_number_one'] + $_SESSION['contact_form_number_two']) != $_POST['contact_form_question']) {
                            ?><div class="error"><?php _e('You entered the wrong number in captcha!','themater'); ?></div><?php
                        } else {
                            wp_mail($theme->get_option('contact_form_email'), sprintf( '[%s] ' . esc_html($_POST['contact_form_subject']), get_bloginfo('name') ), esc_html($_POST['contact_form_message']),'From: "'. esc_html($_POST['contact_form_name']) .'" <' . esc_html($_POST['contact_form_email']) . '>');
                            unset($_POST);
                            ?><div class="message"><?php _e('Thanks for contacting us.','themater'); ?></div><?php
                        }
                        if ( isset($_SESSION['contact_form_number_one'] ) ) unset( $_SESSION['contact_form_number_one'] );
                        if ( isset($_SESSION['contact_form_number_two'] ) ) unset( $_SESSION['contact_form_number_two'] );
                    }
                    
                    if ( !isset($_SESSION['contact_form_number_one'] ) ) $_SESSION['contact_form_number_one'] = $contact_form_number_one = rand(1, 9);
                    else $contact_form_number_one = $_SESSION['contact_form_number_one'];
                    
                    if ( !isset($_SESSION['contact_form_number_two'] ) ) $_SESSION['contact_form_number_two'] = $contact_form_number_two = rand(1, 9);
                    else $contact_form_number_two = $_SESSION['contact_form_number_two'];
                ?>
                
                <form method="post" action="">
                    <input type="hidden" name="contact_form_submit" value="true" />
                    <h2><font color="#CC0500">Contact Us Form</font></h2>
                    <div class="contact-form-label alignleft <?php if($_POST && !$_POST['contact_form_name']) { echo 'contact-form-required'; } ?>"><?php _e('Name','themater'); ?>:</div>
                    <div class="contact-form-input"><input type="text" name="contact_form_name" value="<?php if ( isset($_POST['contact_form_name']) ) { echo esc_attr($_POST['contact_form_name']); } ?>" /></div>
                    
                    <div class="contact-form-label alignleft <?php if($_POST && !$_POST['contact_form_email']) { echo 'contact-form-required'; } ?>"><?php _e('Email','themater'); ?>:</div>
                    <div class="contact-form-input"><input type="text" name="contact_form_email" value="<?php if ( isset($_POST['contact_form_email']) ) { echo esc_attr($_POST['contact_form_email']); } ?>" /></div>
                    
                    <div class="contact-form-label alignleft <?php if($_POST && !$_POST['contact_form_question']) { echo 'contact-form-required'; } ?>"><?php echo $contact_form_number_one; ?> + <?php echo $contact_form_number_two; ?> = ?</div>
                    <div class="contact-form-input"><input type="text" name="contact_form_question" value="" /></div>
                    
                    <div class="contact-form-label alignleft <?php if($_POST && !$_POST['contact_form_subject']) { echo 'contact-form-required'; } ?>"><?php _e('Subject','themater'); ?>:</div>
                    <div class="contact-form-input"><input type="text" name="contact_form_subject" value="<?php if ( isset($_POST['contact_form_subject']) ) { echo esc_attr($_POST['contact_form_subject']); } ?>" /></div>
                    
                    <div class="contact-form-label alignleft <?php if($_POST && !$_POST['contact_form_message']) { echo 'contact-form-required'; } ?>"><?php _e('Message','themater'); ?>:</div>
                    <div class="contact-form-input"><textarea name="contact_form_message" ><?php if ( isset($_POST['contact_form_message']) ) { echo esc_textarea($_POST['contact_form_message']); } ?></textarea></div>
                    
                    <div class="contact-form-label alignleft">&nbsp;</div>
                    <div class="contact-form-input" style="text-align: center;"><input type="submit" value="<?php _e('Submit','themater'); ?>" /></div>
                </form>
                <?php $theme->hook('content_after'); ?>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="2">
                <div id="copyrights" style="background-color:#F69B02;width:100%;" align="center">
                    <table width="100%" border>
                        <tr>
                            <td width="30%" align="left">
                               <h2>Services</h2>
                               <h4>CIVIL ENGINEERING</h4>
                               <h4>MARINE ENGINEERING</h4>
                               <h4>METOCEAN & HYDRODYNAMICS ANALYSIS</h4>
                               <h4>STRUCTURAL ANALYSIS</h4>

                            </td>
                            <td width="30%" align="center">
                               <h2>Portofolio</h2>
                               <h4>Sediment Transport Study & Analysis</h4>
                               <h4>Metocean Data Integration Study</h4>
                               <h4>Integrity Analysis of BOG</h4>
                               <h4>North Shore Housing Restoration Fund.</h4>                      
                            </td>
                            <td width="30%" align="right">
                               <h2>Contact Us</h2>
                                <h4>A. Yani 510H Bandung 40122 Indonesia</h4>
                                <h4>022-93395826</h4>
                                <h4>022-93395825</h4>
                                <h4>email: contacts@ilpi-eng.com</h4>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
<script
src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
</script>
<script>
var myCenter = new google.maps.LatLng(-6.9110742,107.6389248);
function initialize()
{
    var mapProp = {
    center:myCenter,
    zoom:13,
    mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    var marker = new google.maps.Marker({
        position:myCenter,
    });
    marker.setMap(map);
    var infoWindow = new google.maps.InfoWindow({
        content : "A. Yani 510H"
    });
    infoWindow.open(map, marker);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</body>
</html>