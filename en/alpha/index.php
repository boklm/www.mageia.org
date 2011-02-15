<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Download Mageia alpha (unstable) releases</title>
    <meta name="description" content="Download page for Mageia first technical alpha" />
    <meta name="keywords" content="mageia, alpha, unstable, iso, download, test, not for production" />
    <meta name="author" content="Mageia" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" >
    <?php include '../../analytics.php'; ?>
</head>
<body>
    <?php include '../../langs.php'; ?>
    
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1>Mageia <span>| Alpha Downloads</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para" style="color: #f22; text-align: center;">
                    <h2 style="font-weight: bold;">Be Careful! Alpha == Unstable Software!</h2>
                    <p>This is NOT FOR: use, public review, personal or production evaluation.</p>
                    <p>This is FOR: developers and packagers testing.</p>
                </div>
            </div>
            <div class="yui-g"><div class="para">
                <p>Whatever you may do with the provided ISO disc image
                    will be done at your own risk, with your own responsibility.
                    If you are looking for a stable Linux system, you may prefer to wait
                    for later releases of Mageia.</p>

                <p style="font-weight: bold; color: #f22">Again, please DO NOT
                    download it and/or install it if you are not certain
                    that you understand what this ISO is and what it is not.</p>
                
                <h2>So, you still want to download Mageia Factory Alpha 1?</h2>
                <p>Ok. So first, presentations: we have two ISO images: a 32bit DVD and a 64bit DVD.
                    Each weights about 2&nbsp;GiB.</p>
                <p>Below you will find the list of servers that currently mirror Mageia software:</p>
                <ol>
                    <li>pick the server that suits you best (preferably in your own country);</li>
                    <li>pick the ISO image that is best for you (their names should be self-evident, we hope).</li>
                </ol>
                <br />
                <table id="dl-table"><thead>
                    <tr><th>Location</th><th>Protocol</th><th>Server</th></tr>
                </thead><tbody>
                <?php
                /* @fixme note to self: brains! */
                    $mirrors = array(
                        array('China', 'Beijing', 'http://fundawang.lcuc.org.cn/mageia/'),
                        array('Czech Republic', 'Praha', 'http://mageia.supp.name/'),
                        array('Deutschland', 'Erfurt', 'http://ftp.mandrivauser.de/mirrors/Mageia/'),
                        array('Deutschland', 'Erfurt', 'ftp://ftp.mandrivauser.de/mirrors/Mageia/'),
                        array('France', 'Paris', 'http://distrib-coffee.ipsl.jussieu.fr/pub/linux/Mageia/'),
                        array('France', 'Paris', 'ftp://distrib-coffee.ipsl.jussieu.fr/pub/linux/Mageia/'),
                        array('Nouvelle Calédonie', 'Nouméa', 'http://mageia.nautile.nc/mageia/distrib/'),
                        array('USA', 'Durham', 'ftp://distro.ibiblio.org/pub/linux/distributions/mageia/'),
                        array('USA', 'Durham', 'http://distro.ibiblio.org/pub/linux/distributions/mageia/'),
                    );
                    $tmpl = '<tr><td>%s, %s</td><td>%s</td><td><a href="%s%s">%s</a></td></tr>';
                    foreach ($mirrors as $m):
                        $pu = parse_url($m[2]);
                        echo sprintf($tmpl,
                            $m[1], $m[0],
                            strtoupper($pu['scheme']),
                            $m[2],
                            'iso/',
                            $pu['host']);
                    endforeach;
                ?>
                </body>
                </table>
                
                
            </div></div>
            <div class="yui-g">
                <div class="yui-u first"><div class="para" style="padding-right: 0;">
                    <h2>About this release</h2>
                    <p>This is our first ISO, released from our build-system.
                        Releasing it now is a good way to test it and see what
                        is left to be improved for the next weeks.</p>
                    
                    <ul>
			<li><a href="http://blog.mageia.org/?p=492" hreflang="en">Blog post</a></li>
			<li><a href="/wiki/doku.php?id=iso1:alpha1_release_notes" hreflang="en">Release Notes</a></li>
                        <li><a href="/wiki/doku.php?id=iso1:alpha1_errata" hreflang="en">Erratas</a></li>
                        <li><a href="/en/">What is Mageia?</a></li>
                    </ul>
                    <p>Alpha 2 will be released on March, 15<sup>th</sup>.</p>
                    <p>You can check our <a href="http://mageia.org/wiki/doku.php?id=iso_1_specifications#expected_milestones">roadmap for Mageia 1</a>.</p>
                    
                    
                </div></div>
                <div class="yui-u"><div class="para">
                    <h2>You can help!</h2>
                    <p>Yes! This release is still rough, and so will be the next one,
                        but even better!</p>
                    <p>There is a lot of things one can contribute
                        to in Mageia: developing, packaging, testing, translating,
                        reporting and fixing bugs, and <a href="http://mageia.org/wiki/">so much more</a>!</p>
                    <p><a href="http://mageia.org/wiki/doku.php?id=contribute">See
                        how you can join the fun and contribute</a></p>

                </div>
                <div class="para">
                    <h3>Donate!</h3>
                    <p>Yes! <a href="/en/donate/">You can donate too!</a></p>
                    <p>Mageia only relies on its own community involvement,
                        be it time, skills, money!</p>
                </div></div>
            </div>
            <div class="para" style="color: #999;">
                <p>Yes, this is a rather rough download page, for now. But it is good in that it
                    could make this alpha download less attractive to non-developers.
                    Did we say that we welcome people to contribute in our
                    <a href="http://www.mageia.org/wiki/doku.php?id=web">Web</a> and <a href="http://www.mageia.org/wiki/doku.php?id=sysadmin">Sysadmin teams</a>?
                    There are <a href="http://www.mageia.org/wiki/doku.php?#teams">other very friendly teams</a> in the project as well.</p>

            </div>
        </div>
    </div>
</body>
</html>
