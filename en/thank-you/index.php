<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <title>Thank you for making Mageia possible.</title>
    <meta name="description" content="People, organisations and services without which Mageia would not exist.">
    <meta name="keywords" content="mageia, donate, donation, thanks, partners, help, mirrors, hosting">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <?php include '../../analytics.php'; ?>
</head>
<body>
    <?php include '../../langs.php'; ?>
    <?php include '../../donators.inc.php'; ?>
    
    <div id="doc4" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a>
            <span class="lsep">|</span> <span class="subh">Thank <em>you</em>!</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g"><div class="para donate">
                <p>Since September 2010, Mageia would not have come to a reality without
                    the enthusiasm, advice and involvement of hundreds of people.</p>

                <p>It would not have either, without help and donation from many people and organizations,
                    that provided Mageia.Org with advice, encouragements, trust,
                    facilities, hosting, server and development hardware, mirroring facilities,
                    network bandwidth, money and love.</p>
                <p>This page is here to remind of their contribution to this project.</p>
            </div></div>
            <div class="yui-gc">
                <div class="yui-u first rb1"><div class="para donate">
                    <?php echo html_donators_list($donators,$anonymous); ?>
                </div></div>
                <div class="yui-u"><div class="para donate">
                    <p>Those organizations and people provided Mageia.Org with
                        mirroring facilities, hosting, hosting advice, server hardware,
                        network bandwidth or some facilities:</p>
                    <?php echo html_orgs_list($orgs); ?>
                    
                    <p>Great places and teams that welcomed us and offerred us some tea, coffee, seats and advice
                        (mostly in Paris for now):</p>
                    <ul class="ty-ppl-list twocol">
                        <li><a href="http://lacantine.org/">La Cantine</a></li>
                        <li>Le Père Tranquille</li>
                        <li>Séverine's place</li>
                        <li><a href="http://twitter.com/happylisou/">&Eacute;lise</a>'s place</a></li>
                        <li>Starbucks Coffee</li>
                    </ul>
                    <p>Thanks a lot to all the people we met, discussed with about this project
                        and its potential implications: you know who you are!</p>
                    
                </div></div>
            </div>
        </div>
    </div>
</body>
</html>
