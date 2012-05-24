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


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex,nofollow,nosnippet">
</head>
<body>

<p><a href="report.php">&laquo; back to the report page</a></p>

<p>So, <code><?php echo $s ?></code> language file is missing in <?php echo $langs[$l], ' (<code>', $l, '</code>)' ?>. What can you do to help us?</p>

<ol>
    <li>Copy the source file from the frame below in a text editor and rename it <code><?php echo _lang_file_switch($s, $l)?></code>.</li>
    <li>Replace and translate the strings that are just after the lines starting with a ";". Be careful to always keep your translated text on a single line.</li>
    <li>Then:
        <ul>
            <li>if you have a SVN account, you may commit it directly in <code><?php echo '<a href="http://svnweb.mageia.org/web/www/trunk/langs/">web/www/trunk/langs</a>/' . _lang_file_switch($s, $l)?></code>;</li>
            <li>or attach it to a mail to Mageia i18n team (<code>mageia-i18n</code>, <a href="irc://irc.freenode.net/#mageia-i18n">#mageia-i18n</a> on Freenode).</li>
        </ul>
    </li>
    <li>You can look to the translation guide on the Wiki too [TODO link].</li>
</ol>

<p>Thanks!</p>
<iframe src="http://www.mageia.org/langs/<?php echo $s ?>" style="width: 60em; height: 30em;"></iframe>
<hr>
</body>
</html>