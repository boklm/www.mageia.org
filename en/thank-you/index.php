<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Thank you for making Mageia possible.</title>
    <meta name="description" content="People, organisations and services without which Mageia would not exist." />
    <meta name="keywords" content="mageia, donate, donation, thanks, partners, help, mirrors, hosting" />
    <meta name="author" content="Mageia" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" />
    <?php include '../../analytics.php'; ?>
</head>
<body>
    <?php include '../../langs.php'; ?>
    
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1>Mageia <span>| Thank <em>you</em>!</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para donate">
                    <?php include '../../donators.inc.php'; ?>

                    <p>Since September 2010, Mageia would not have come to a reality without
                        the enthusiasm, advice and involvement of hundreds of people.</p>

                    <p>It would not have either, without help and donation from many people and organizations.
                        This page is here to remind of their contribution to this project.</p>

                    <?php echo html_donators_list($donators); ?>

                    <p>Great places and teams that welcomed us and offerred us some tea, coffee, seats and advice
                        (mostly in Paris for now):</p>
                    <ul class="ty-ppl-list">
                        <li><a href="http://lacantine.org/">La Cantine</a></li>
                        <li>Le Père Tranquille</li>
                        <li>Séverine's place</li>
                        <li><a href="http://twitter.com/happylisou/">Elise</a>'s place</a></li>
                        <li>Starbucks Coffee</li>
                    </ul>
                    <p>Thanks a lot to all the people we met, discussed with about this project
                        and its potential implications: you know who you are!</p>
                    
                    <p>Those organizations and people provided Mageia.Org with
                        mirroring facilities, hosting, hosting advice, server hardware,
                        network bandwidth or some facilities:</p>
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
