<?php
/**
*/

$s = isset($_GET['s']) ? trim($_GET['s']) : null;
$l = isset($_GET['l']) ? trim($_GET['l']) : null;

if (is_null($s)) {
    header('Location: /langs/report.php');
    die;
}

include 'lib.php';

if ($s == '../_nav/langs/en.lang') {
    $file   = substr(_lang_file_switch($s, $l), 14);
    $note   = '<span style="color: red; font-weight: bold"> NOTE: THIS IS TRANSLATION OF NAVIGATION SO LOCATION FOR COMMIT IS DIFFERENT!</span>';
    $commit = '<a href="http://svnweb.mageia.org/web/www/trunk/_nav/langs/">web/www/trunk/_nav/langs/</a>' . $file . ' and for now to the <a href="http://svnweb.mageia.org/web/nav/langs/">web/nav/langs/</a>' . $file . ' too';
    $iframe  = 'http://www.mageia.org/_nav/langs/en.lang';
} else {
    $file   = _lang_file_switch($s, $l);
    $note   = '';
    $commit = '<a href="http://svnweb.mageia.org/web/www/trunk/langs/">web/www/trunk/langs</a>/' . $file;
    $iframe  = 'http://www.mageia.org/langs/'.$s;
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex,nofollow,nosnippet">
</head>
<body>

<p><a href="report.php">&laquo; back to the report page</a></p>

<p>So, <code><?php echo $file ?></code> language file is missing in <?php echo $langs[$l], ' (<code>', $l, '</code>)' ?>. What can you do to help us?</p>

<ol>
    <li>Copy the source file from the frame below in a text editor and rename it <code><?php echo $file?></code>.<?php echo $note ?></li>
    <li>Replace and translate the strings that are just after the lines starting with a ";". Be careful to always keep your translated text on a single line.</li>
    <li>Then:
        <ul>
            <li>if you have a SVN account, you may commit it directly in <code><?php echo $commit ?></code>;</li>
            <li>or attach it to a mail to Mageia i18n team (<code>mageia-i18n</code>, <a href="irc://irc.freenode.net/#mageia-i18n">#mageia-i18n</a> on Freenode).</li>
        </ul>
    </li>
    <li>You can look to the translation guide on the <a href="https://wiki.mageia.org/en/Internationalisation_Team_(i18n)#Website_translation">i18n Web Wiki</a> too.</li>
</ol>

<p>Thanks!</p>
<iframe src="<?php echo $iframe ?>" style="width: 60em; height: 30em;"></iframe>
<hr>
</body>
</html>
