<?php

define('HLANG', true);
require '../../../langs.php';
//$locale = 'sl'; // qq debug
_lang_load($locale, 'about/license');

require('php-mo.php');

if($locale == 'en') { // this can be done better maybe with preg_replace strtoupper combo
    $po_locale = 'libDrakX.pot';
} else if($locale == 'pa_in') {
    $po_locale = 'pa_IN.po';
} else if($locale == 'pt_br') {
    $po_locale = 'pt_BR.po';
} else if($locale == 'zh_cn') {
    $po_locale = 'zh_CN.po';
} else if($locale == 'zh_tw') {
    $po_locale = 'zh_TW.po';
} else {
    $po_locale = "$locale.po";
}

//$po_files_path = "../../../../drakx_share/"; // qq debug
//$po_files_end = ""; // qq debug
$po_files_path = "http://svnweb.mageia.org/soft/drakx/trunk/perl-install/share/po/";
$po_files_end  = "?view=co";

$po_file = phpmo_parse_po_file($po_files_path . $po_locale . $po_files_end);
if($po_file === false) {
//    echo "ERROR loading " . $po_files_path . $po_locale . $po_files_end; // qq debug
    $po_file = phpmo_parse_po_file($po_files_path . "libDrakX.pot" . $po_files_end);
}
if($po_file === false) {
//    echo "ERROR loading " . $po_files_path . "libDrakX.pot" . $po_files_end; // qq debug
}
//var_dump($po_file); // qq debug

$license_strings = array();

$license_strings[] = array('_: You can warn about unofficial translation here');
$license_strings[] = array('The operating system and the different components available in the Mageia distribution \nshall be called the \"Software Products\" hereafter. The Software Products include, but are not \nrestricted to, the set of programs, methods, rules and documentation related to the operating \nsystem and the different components of the Mageia distribution, and any applications \ndistributed with these products provided by Mageia\'s licensors or suppliers.');
$license_strings[] = array('1. License Agreement', 'h3');
$license_strings[] = array('Please read this document carefully. This document is a license agreement between you and  \nMageia which applies to the Software Products.\nBy installing, duplicating or using any of the Software Products in any manner, you explicitly \naccept and fully agree to conform to the terms and conditions of this License. \nIf you disagree with any portion of the License, you are not allowed to install, duplicate or use \nthe Software Products. \nAny attempt to install, duplicate or use the Software Products in a manner which does not comply \nwith the terms and conditions of this License is void and will terminate your rights under this \nLicense. Upon termination of the License,  you must immediately destroy all copies of the \nSoftware Products.');
$license_strings[] = array('2. Limited Warranty', 'h3');
$license_strings[] = array('The Software Products and attached documentation are provided \"as is\", with no warranty, to the \nextent permitted by law.\nNeither Mageia nor its licensors or suppliers will, in any circumstances and to the extent \npermitted by law, be liable for any special, incidental, direct or indirect damages whatsoever \n(including without limitation damages for loss of business, interruption of business, financial \nloss, legal fees and penalties resulting from a court judgment, or any other consequential loss) \narising out of  the use or inability to use the Software Products, even if Mageia or its \nlicensors or suppliers have been advised of the possibility or occurrence of such damages.\n\nLIMITED LIABILITY LINKED TO POSSESSING OR USING PROHIBITED SOFTWARE IN SOME COUNTRIES\n\nTo the extent permitted by law, neither Mageia nor its licensors, suppliers or\ndistributors will, in any circumstances, be liable for any special, incidental, direct or indirect \ndamages whatsoever (including without limitation damages for loss of business, interruption of \nbusiness, financial loss, legal fees and penalties resulting from a court judgment, or any \nother consequential loss) arising out of the possession and use of software components or \narising out of  downloading software components from one of Mageia sites which are \nprohibited or restricted in some countries by local laws.\nThis limited liability applies to, but is not restricted to, the strong cryptography components \nincluded in the Software Products.\nHowever, because some jurisdictions do not allow the exclusion or limitation or liability for \nconsequential or incidental damages, the above limitation may not apply to you.');
$license_strings[] = array('3. The GPL License and Related Licenses', 'h3');
$license_strings[] = array('The Software Products consist of components created by different persons or entities.\nMost of these licenses allow you to use, duplicate, adapt or redistribute the components which \nthey cover. Please read carefully the terms and conditions of the license agreement for each component \nbefore using any component. Any question on a component license should be addressed to the component \nlicensor or supplier and not to Mageia.\nThe programs developed by Mageia are governed by the GPL License. Documentation written \nby Mageia is governed by \"%s\" License.', null, 'CC-By-SA'); // "CC-By-SA" http://svnweb.mageia.org/soft/drakx/trunk/perl-install/messages.pm?revision=5942&view=markup
$license_strings[] = array('4. Intellectual Property Rights', 'h3');
$license_strings[] = array('All rights to the components of the Software Products belong to their respective authors and are \nprotected by intellectual property and copyright laws applicable to software programs.\nMageia and its suppliers and licensors reserves their rights to modify or adapt the Software \nProducts, as a whole or in parts, by all means and for all purposes.\n\"Mageia\" and associated logos are trademarks of %s', null, 'Mageia.Org'); // "Mageia.Org" http://svnweb.mageia.org/soft/drakx/trunk/perl-install/messages.pm?revision=5942&view=markup
$license_strings[] = array('5. Governing Laws', 'h3');
$license_strings[] = array('If any portion of this agreement is held void, illegal or inapplicable by a court judgment, this \nportion is excluded from this contract. You remain bound by the other applicable sections of the \nagreement.\nThe terms and conditions of this License are governed by the Laws of France.\nAll disputes on the terms of this license will preferably be settled out of court. As a last \nresort, the dispute will be referred to the appropriate Courts of Law of Paris - France.\nFor any question on this document, please contact Mageia.');
$license_strings[] = array('Warning: Free Software may not necessarily be patent free, and some Free\nSoftware included may be covered by patents in your country. For example, the\nMP3 decoders included may require a license for further usage (see\nhttp://www.mp3licensing.com for more details). If you are unsure if a patent\nmay be applicable to you, check your local laws.');

?>
<!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php _e('Mageia license')?></title>
    <link rel="stylesheet" href="/g/style/all.css">
    <style>
    .para { text-align: left; float: left; display: block; }
    hr { margin-top: 2em; }
    </style>
    <?php include '../../../analytics.php'; ?>
</head>
<body class="about">
    <?php echo $hsnav; ?>
    <h1 id="mgnavtitle"><?php _e('Mageia license')?></h1>
    <div id="doc" class="yui-t7">
	<div id="bd" role="main" class="para">
        <section>
            <?php
            echo '<div id="preamble">';
            _h('An introduction text ... (summarizing, explaining the core principles, and why this license was chosen).');
            echo '<p>' . sprintf(_t('See also %swiki page about licensing policy</a>.'),
                        '<a href="https://wiki.mageia.org/en/Licensing_policy">') . '</p></div>';
            _h('Mageia license', null, 'h2');
            $search  = array('\\"','\n\n', '\n', '  ');
            $replace = array('"','<br>', ' ', ' ');
            foreach($license_strings as $value) {
                $license_string = str_replace('%s', (isset($value[2]) ? $value[2] : ''), ((isset($po_file[$value[0]]["msgstr"][0]) && $locale != 'en') ? $po_file[$value[0]]["msgstr"][0] : $value[0]));
                echo '<' . (isset($value[1]) ? $value[1] : 'p') . '>' . str_replace($search, $replace, $license_string) . '</' . (isset($value[1]) ? $value[1] : 'p') . '>';
            }
            ?>

        </section>
    </div>
    </div>
</body>
</html>
