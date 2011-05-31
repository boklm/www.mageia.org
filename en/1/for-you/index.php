<?php
$_t = array(
    'page_title' => 'Mageia 1 is for you!',
    'page_kw' => 'mageia, everybody, user, developer, contributor, hacker, student, teacher',
    'page_h1' => 'For You!'
);


?><!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php echo $_t['page_title']; ?></title>
    <meta name="description" content="<?php echo $_t['page_desc']; ?>">
    <meta name="keywords" content="<?php echo $_t['page_kw']; ?>">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
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
                            </li>

                        <li><h3><a href="./developer/">...developers</a></h3>
                            <p>We're following the UNIX tradition of letting people have fun with their computer by programming - Mageia 1 is fully loaded with various popular compilers and interpreters</p>
                            <p>While our schedule didn't permit us to offer everything we planned, we tried very hard to cover most needs.</p>
                            <hr />
                            <p>
                            Mageia provides the most used compilers, libraries and interpreters like
                            <ul>
                                <li>gcc 4.5.2</li>
                                <li>glibc 2.12.1</li>
                                <li>gtk+ 2.24.4</li>
                                <li>qt 4.7.3</li>
                                <li>perl 5.12.3</li>
                                <li>python 2.7.1</li>
                                <li>ruby 1.8.7</li>
                                <li>php 5.3.6</li>
                                <li>java openjdk 1.6.0.0</li>
                                <li>java sun 1.6.0.25</li>
                            </ul>
                            </p>
                            <hr />
                            <p>Along with those basic development tools Mageia is providing several IDEs for making teh developer's life easier.
                            <ul>
                                <li>eclipse 3.6.2</li>
                                <li>netbeans 6.9</li>
                                <li>anjuta 2.32.1.1</li>
                                <li>kdevelop 4.2.2</li>
                                <li>padre 0.840.0</li>
                            </ul>
                            </p>
                            <p>We're ready to welcome your feedback and contributions to improve this for next release - check the contact links, and contact us with questions and suggestions.</p>
                            <hr />
                            </li>
                        <li><h3><a href="./contributor/">...contributors</a></h3>
                            <p>Get more information <a href="./contributor/">here</a>.</p></li>
                    </ul>    
                </div>
            </div>
        </div>
    </div>
</body>
</html>
