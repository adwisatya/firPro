<?php global $theme;
/**
 * Template Name: Contact Form
*/
?>
<?php get_header(); ?>
<body>
    <table border align="center" style="width:100%;">
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
                        if(!$_POST['contact_form_name'] || !$_POST['contact_form_email'] || !$_POST['contact_form_subject'] || !$_POST['contact_form_message']) {
                            ?><div class="error"><?php _e('Please fill in all required fields!','themater'); ?></div><?php
                        } elseif(!is_email($_POST['contact_form_email'])) {
                            ?><div class="error"><?php _e('Invalid email!','themater'); ?></div><?php
                        } else {
                            mail('contacts@ilpi-eng.com', sprintf( '[%s] ' . esc_html($_POST['contact_form_subject']), get_bloginfo('name') ), esc_html($_POST['contact_form_message']));
                            unset($_POST);
                            ?><div class="message"><?php _e('Thanks for contacting us.','themater'); ?></div><?php
                        }
                    }
                ?>
                
                <form method="post" action="">
                    <input type="hidden" name="contact_form_submit" value="true" />
                    <h2><font color="#CC0500">Contact Us Form</font></h2>
                    <div class="contact-form-label alignleft <?php if($_POST && !$_POST['contact_form_name']) { echo 'contact-form-required'; } ?>"><?php _e('Name','themater'); ?>:</div>
                    <div class="contact-form-input"><input type="text" name="contact_form_name" value="<?php if ( isset($_POST['contact_form_name']) ) { echo esc_attr($_POST['contact_form_name']); } ?>" /></div>
                    
                    <div class="contact-form-label alignleft <?php if($_POST && !$_POST['contact_form_email']) { echo 'contact-form-required'; } ?>"><?php _e('Email','themater'); ?>:</div>
                    <div class="contact-form-input"><input type="text" name="contact_form_email" value="<?php if ( isset($_POST['contact_form_email']) ) { echo esc_attr($_POST['contact_form_email']); } ?>" /></div>
                                        
                    <div class="contact-form-label alignleft <?php if($_POST && !$_POST['contact_form_subject']) { echo 'contact-form-required'; } ?>"><?php _e('Organization','themater'); ?>:</div>
                    <div class="contact-form-input"><input type="text" name="contact_form_subject" value="<?php if ( isset($_POST['contact_form_subject']) ) { echo esc_attr($_POST['contact_form_subject']); } ?>" /></div>
                    
                    <div  class="contact-form-label alignleft <?php if($_POST && !$_POST['contact_form_message']) { echo 'contact-form-required'; } ?>"><?php _e('Message','themater'); ?>:</div>
                    <div class="contact-form-input"><textarea rows="5" cols="100" name="contact_form_message" ><?php if ( isset($_POST['contact_form_message']) ) { echo esc_textarea($_POST['contact_form_message']); } ?></textarea></div>
                    
                    <div class="contact-form-label alignleft">&nbsp;</div>
                    <div class="contact-form-input" style="text-align: center;"><input type="submit" value="<?php _e('Submit','themater'); ?>" /></div>
                </form>
                <?php $theme->hook('content_after'); ?>
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
<?php get_footer(); ?>