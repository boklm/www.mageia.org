<?php
$_t = array(
    'page_title' => 'Mageia 1, distribution for the users',
    'page_desc' => 'Mageia 1, user',
    'page_kw' => 'mageia, user',
    'page_h1' => 'Mageia 1, distribution for the users'
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
    <?php include '../../../../analytics.php'; ?>
</head>
<body class="release">
    <?php include '../../../../langs.php'; ?>
    
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh"><?php echo $_t['page_h1']; ?></span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <?php include '../../nav.php'; ?>
                <div class="para">

                <hr />
                <p>Run Mageia inside or beside your existing Operation system, or use a LiveCD to try Mageia without changing your system.</p>
                <hr />

                <p>Easy installation - choose from a standard list of things to do, or choose individual packages. Have your fully-working system up and running really fast! Choose from a range of desktops - make your computing environment just the way you like it.</p>
                <hr />

                <p>Mageia is safe, stable and secure by default. Automatic updates and an on-by-default firewall keep it that way.</p>
                <hr />

                <p>Lots of Productive Desktop applications - Web browsing, email, Office suites, Graphics management and editing, audio and video players, CD and DVD burning, games and more - we've got your software needs covered.</p>
                <hr />

                <p>All the system administration tools at your fingertips - control your system yourself, or use our simple tools. New users can feel safe with the default settings.</p>
                <hr />

                <p>Support from the community - join our mailing lists and forums, or talk to people online using IRC.</p>
                <hr />
                </div>
            </div>
        </div>
    </div>
</body>
</html>
