<?php
$_t = array(
    'page_title' => 'Mageia 1, distribution for everybody\'s needs',
    'page_desc' => 'foo',
    'page_kw' => 'mageia, everybody, user, developer, contributor',
    'page_h1' => 'Mageia 1, distribution for everybody\'s needs'
);


?><!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8" />
    <title><?php echo $_t['page_title']; ?></title>
    <meta name="description" content="<?php echo $_t['page_desc']; ?>" />
    <meta name="keywords" content="<?php echo $_t['page_kw']; ?>" />
    <meta name="author" content="Mageia" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" >
    <style>
        .product-list {
            padding: 0;
            margin: 0;
        }
        .product-list > li {
            list-style: none;
            padding-left: 70px;
            min-height: 60px;
            background-image: url(/g/images/smi/vcard-48x48.png);
            background-repeat: no-repeat;
            background-position: 0 4px;
            margin-bottom: 2em;
        }
        .product-list li h3 {
            font-size: 140%;
            margin: 0;
            padding: 5px;
            color: #000;
            font-weight: bold;
        }
        .product-list li h3 a {
            color: #000;
        }

        .product-list li#marketing { 
            background-image: url(/g/images/smi/feed-48x48.png); 
        }
        .product-list li#web, .contrib-list li#mirror { 
            background-image: url(/g/images/smi/website-48x48.png); 
        }
        .product-list li#triage { 
            background-image: url(/g/images/smi/feed-48x48.png); 
        }
        .product-list li#triage { 
            background-image: url(/g/images/smi/feed-48x48.png); 
        }
        .product-act li { 
            margin-bottom: 0.6em; 
        }
        .product-act { 
            margin-bottom: 2.5em; 
        }
    </style>
    <?php include '../../../analytics.php'; ?>
</head>
<body class="release">
    <?php include '../../../langs.php'; ?>
    
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh"><?php echo $_t['page_h1']; ?></span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <?php include '../nav.php'; ?>
                <div class="para">
                <h2>Mageia is for...</h2>
                    <ul class="product-list">
                        <li><h3>...the daily work!</h3>
                            <p>Providing office suites, development environments, database tools,...</p></li>
                        <li><h3>...fun and entertainment!</h3>
                            <p>Providing games, audio and video players, PVRs,...</p></li>
                        <li><h3>...actuality and stability!</h3>
                            <p>Not sacrificing stability for the single purpose of being cutting edge, but staying actual enough, providing recent stable releases of applications...</p></li>
                        <li><h3>...universal usage!</h3>
                            <p>Providing a large scale of applications, mirroring the different needs of the community building the distribution</p></li>
                        <li><h3>...the community!</h3>
                            <p>Mageia is a distribution built by the community for the community, maing it easy and comfortable for everyone to contribute to the great work!</p></li>
                        <li><h3>...people!</h3>
                            <p>Mageia is not only a technical project. Mageia is a living community consisting of people from all over the world. So the distribution is made for the people using it.</p></li>
                    </ul>
                <hr />
                <h2>Mageia is focusing on...</h2>
                    <ul class="product-list">
                        <li><h3><a href="./user/">...users</a></h3>
                            <p>Get more information <a href="./user/">here</a>.</p></li>
                        <li><h3><a href="./developer/">...developers</a></h3>
                            <p>Get more information <a href="./developer/">here</a>.</p></li>
                        <li><h3><a href="./contributor/">...contributors</a></h3>
                            <p>Get more information <a href="./contributor/">here</a>.</p></li>
                    </ul>    
                </div>
            </div>
        </div>
    </div>
</body>
</html>
