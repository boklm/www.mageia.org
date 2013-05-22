<?php

define('HLANG', true);
require '../../../langs.php';

_lang_load($locale, "about/media");

?><!DOCTYPE html>
<html dir="ltr" lang="<?php echo $locale ?>">
<head>
    <meta charset="utf-8">
    <title><?php _e('Mageia media files')?></title>
    <meta name="description" content="Mageia">
    <meta name="keywords" content="mageia">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <?php include '../../../analytics.php'; ?>
</head>
<body class="about">
    <?php echo $hsnav; ?>
    <h1 id="mgnavtitle"><?php _e('Media files')?></h1>
    <div id="doc" class="yui-t7">
        <div id="bd" role="main">
            <div class="yui-g"><div class="para">
                <h2><?php _e('Official Logo')?></h2>
		<table>
			<tr>
				<th><?php _e('Mageia 2013')?></th>
				<th><?php _e('Mageia 2013 dark')?></th>
				<th><?php _e('Mageia 2013 alpha')?></th>
			</tr>

		<tr>	
			<td><a href="/g/media/logo/mageia-2013.png"><img src="/g/media/logo/t-mageia-2013.png" alt="Mageia 2013 logo"></a></td>
			<td><a href="/g/media/logo/mageia-2013-dark.png"><img src="/g/media/logo/t-mageia-2013-dark.png" alt="Mageia 2013 logo in dark" ></a></td>
			<td><a href="/g/media/logo/mageia-2013-alpha.png"><img src="/g/media/logo/t-mageia-2013-alpha.png" alt="Mageia 2013 logo in alpha"></a></td>
		</tr>
		<tr>
			<td><?php echo sprintf(_t('%sPNG</a> or %sSVG</a>'), '<a href="/g/media/logo/mageia-2013.png">', '<a href="/g/media/logo/mageia-2013.svg">') ?></td>
			<td><?php echo sprintf(_t('%sPNG</a> or %sSVG</a>'), '<a href="/g/media/logo/mageia-2013-dark.png">', '<a href="/g/media/logo/mageia-2013-dark.svg">') ?></td>
			<td><?php echo sprintf(_t('%sPNG</a> or %sSVG</a>'), '<a href="/g/media/logo/mageia-2013-alpha.png">', '<a href="/g/media/logo/mageia-2013-alpha.svg">') ?></td>
		</tr>
		</table>
		<br><br>

                <h2><?php _e('Previous Logo')?></h2>

                <p><?php echo sprintf(_t('%sPNG</a> or %sSVG</a>'), '<a href="/g/media/logo/mageia-2011.png"><img src="/g/media/logo/t-mageia-2011.png"><br>', '<a href="/g/media/logo/mageia-2011.svg">') ?></p>

                <hr>
		<h2><?php _e('Mageia 3 CD/DVD covers')?></h2>
		<p><a href="/g/media/covers/3/Mga3Plain.png"><img src="/g/media/covers/3/t-Mga3Plain.png" alt="Mageia 3 logo" title="Mga3Plain"></a>
		<a href="/g/media/covers/3/Mga3CD.png"><img src="/g/media/covers/3/t-Mga3CD.png" alt="Mageia 3 logo" title="Mga3CD"></a>
		<a href="/g/media/covers/3/Mga3DVD.png"><img src="/g/media/covers/3/t-Mga3DVD.png" alt="Mageia 3 logo" title="Mga3DVD"></a>
		<a href="/g/media/covers/3/Mga3_Free_CD_dual.png"><img src="/g/media/covers/3/t-Mga3_Free_CD_dual.png" alt="Mageia 3 logo" title="Mga3_Free_CD_dual"></a>
		<a href="/g/media/covers/3/Mga3_Free_DVD_32.png"><img src="/g/media/covers/3/t-Mga3_Free_DVD_32.png" alt="Mageia 3 logo" title="Mga3_Free_DVD_32"></a>
		<a href="/g/media/covers/3/t-Mga3_Free_DVD_64.png"><img src="/g/media/covers/3/t-Mga3_Free_DVD_64.png" alt="Mageia 3 logo" title="Mga3_Free_DVD_64"></a>
		<a href="/g/media/covers/3/Mga3_Live_CD_32_Gnome.png"><img src="/g/media/covers/3/t-Mga3_Live_CD_32_Gnome.png" alt="Mageia 3 logo" title="Mga3_Live_CD_32_Gnome"></a>
		<a href="/g/media/covers/3/Mga3_Live_CD_32_KDE.png"><img src="/g/media/covers/3/t-Mga3_Live_CD_32_KDE.png" alt="Mageia 3 logo" title="Mga3_Live_CD_32_KDE"></a>
		<a href="/g/media/covers/3/t-Mga3_Live_DVD_32_Gnome.png"><img src="/g/media/covers/3/t-Mga3_Live_DVD_32_Gnome.png" alt="Mageia 3 logo" title="Mga3_Live_DVD_32_Gnome"></a>
		<a href="/g/media/covers/3/Mga3_Live_DVD_32_KDE.png"><img src="/g/media/covers/3/t-Mga3_Live_DVD_32_KDE.png" alt="Mageia 3 logo" title="Mga3_Live_DVD_32_KDE"></a>
		<a href="/g/media/covers/3/Mga3_Live_DVD_64_Gnome.png"><img src="/g/media/covers/3/t-Mga3_Live_DVD_64_Gnome.png" alt="Mageia 3 logo" title="/Mga3_Live_DVD_64_Gnome"></a>
		<a href="/g/media/covers/3/Mga3_Live_DVD_64_KDE.png"><img src="/g/media/covers/3/t-Mga3_Live_DVD_64_KDE.png" alt="Mageia 3 logo" title="Mga3_Live_DVD_64_KDE"></a>
		<br><br>

		<a href="/g/media/covers/3/els-EugeniBlack.png"><img src="/g/media/covers/3/t-els-EugeniBlack.png" alt="Mageia 3 logo" title="Mageia Black dedicated to Eugeni"></a>
		<a href="/g/media/covers/3/els-EugeniBumpmap.png"><img src="/g/media/covers/3/t-els-EugeniBumpmap.png" alt="Mageia 3 logo" title="Mageia with watermark dedicated to Eugeni"></a>
		</p>

	<br>

                <h2><?php _e('Mageia 1 CD/DVD covers')?></h2>
                <p><a href="/g/media/covers/print-1.png"><img src="/g/media/covers/t-print-1.png" alt=""></a>
                    <a href="/g/media/covers/print-2.png"><img src="/g/media/covers/t-print-2.png" alt=""></a>
                    <a href="/g/media/covers/print-3.png"><img src="/g/media/covers/t-print-3.png" alt=""></a></p>
                <p><?php _e('Licensed under CC-By-SA by Julie Guennegues.')?></p>
                    
                <hr>
                
                <p><?php _e('Please consult <a href="https://wiki.mageia.org/en/Artwork_team">artwork team</a> or <a href="https://wiki.mageia.org/en/Marcom_Team">marcom\' team</a> if you have questions/concerns about using these files.')?></p>
                
            </div></div>
        </div>
    </div>
</body>
</html>
