<?php
/**
*/

function html_paypal_form($lang = 'en')
{
    
    $html = <<<H
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="pp_form">
    <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="62X2MFQRAYABL">
        <p id="pp_form_btn">
            <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
        </p>
</form>
H;
    return $html;
}