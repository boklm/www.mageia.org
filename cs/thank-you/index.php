<!DOCTYPE html>
<html dir="ltr" lang="cs">
<head>
    <meta charset="utf-8" />
    <title>Děkujeme vám za to, že děláte Mageiu a pomáháte jí žít.</title>
    <meta name="description" content="People, organisations and services without which Mageia would not exist.">
    <meta name="keywords" content="mageia, donate, donation, thanks, partners, help, mirrors, hosting">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <?php include '../../analytics.php'; ?>
</head>
<body>
    <?php include '../../langs.php'; ?>
    
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh">Děkujeme <em>vám</em>!</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para donate">
                    <?php include '../../donators.inc.php'; ?>

                    <p>Mageia bys se nestala skutečností bez
                        nadšení, rad a zapojení stovek lidí.</p>

                    <p>Také by se neobešla bez pomoci a darů od mnoha lidí a organizací.
                        Tato stránka je tu proto, aby připomínala jejich příspěvek tomuto projektu.</p>

                    <?php echo html_donators_list($donators); ?>

                    <p>Skvělá místa a lidé, kteří nás přivítali a nabídli nám čaj, kávu, židle a radu
                        (zatím většinou v Paříži):</p>
                    <ul class="ty-ppl-list">
                        <li><a href="http://lacantine.org/">La Cantine</a></li>
                        <li>Le Père Tranquille</li>
                        <li>Séverine's place</li>
                        <li><a href="http://twitter.com/happylisou/">Elise's place</a></li>
                        <li>Starbucks Coffee</li>
                    </ul>
                    <p>Velice děkujeme všem lidem, se kterými jsme se setkali, hovořili o tomto projektu
                        a jeho možném dosahu: víte, kdo to jste!</p>
                    
                    <p>Tyto organizace a lidé Mageia.Org poskytli
                        vybavení pro zrcadlení, hostování, rady k hostování, servery,
                        připojení k Internetu nebo další zařízení:</p>
                    <?php echo html_orgs_list($orgs); ?>
                </div>
            </div>
            <div class="yui-g">
                <div class="yui-u first"><div class="para" style="padding-right: 0;">

                </div></div>
                <div class="yui-u"><div class="para">

            </div></div>
        </div>
    </div>
</body>
</html>
