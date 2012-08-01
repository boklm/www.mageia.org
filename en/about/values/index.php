<?php
define('HLANG', true);
require '../../../langs.php';
_lang_load($locale, 'values');

?><!DOCTYPE html>
<html dir="ltr" lang="<?php echo $locale; ?>">
<head>
    <meta charset="utf-8">
    <title><?php _e('Mageia Values')?></title>
    <meta name="description" content="<?php _e('Mageia project values')?>">
    <meta name="keywords" content="<?php _e('mageia, values')?>">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <?php include '../../../analytics.php'; ?>
</head>
<body class="about">
    <?php echo $hsnav; ?>
    <h1 id="mgnavt"><?php _e('Values')?></h1>
    <div id="doc" class="yui-t7">
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para values">
                    <h2><?php _e('Mageia is Social Software')?></h2>

                    <ul>
                        <li><?php _e('We will, as a Community, Value Our Users. We will always be in touch with our user base, for they are as much part of the community as are makers and organisers.')?></li>
                        <li><?php _e('We understand that our most valuable assets are people and the Community.')?></li>
                        <li><?php _e('We will always be a community distribution, valuing all the community\'s contributions.')?></li>
                        <li><?php _e('We will be an inclusive distribution, making sure that everyone in the community can make their voice heard.')?></li>
                        <li><?php _e('We esteem friendships highly and will promote social interaction between people.')?></li>
                        <li><?php _e('We value integrity, community, trust and will always adhere to the highest ethical standards.')?></li>
                        <li><?php _e('We will, above all things, enjoy ourselves :-) .')?></li>
                        <li><?php _e('We will strive to maintain the goodwill of both our own and the wider Open Source community.')?></li>
                        <li><?php _e('We will help and support each other. When something isn\'t right, we will take the appropriate steps to find a better solution and use it.')?></li>
                    </ul>
                    
                    <h2><?php _e('Mageia is Powerful Technology')?></h2>
                    <ul>
                        <li><?php _e('We, as Free Software and as an Operating System, will constantly innovate to remain a premium computing technology choice.')?></li>
                        <li><?php _e('We will stay up-to-date with the latest trends in Open Source, while choosing wisely to balance between modernization and reliability in our releases.')?></li>
                        <li><?php _e('We will maintain the vibrancy within our Community, always aiming to lead the way in collaborative development.')?></li>
                        <li><?php _e('We will encourage our users to be the best they can be on their computers.')?></li>
                        <li><?php _e('We will strive for ease of use, but also offer a holistic set of innovations for novice and power users alike.')?></li>
                    </ul>
                    
                    <h2><?php _e('Mageia is Knowledge')?></h2>
                    <ul>
                        <li><?php _e('Software is an integral part of our daily lives, in almost every interaction at home and around the world, and at its heart is computer Code. We will strive to understand it, and how it works in our daily lives.')?></li>
                        <li><?php _e('We will empower our user base by demystifying advanced technologies.')?></li>
                        <li><?php _e('We recognise that we are human. Failure and inadequacies do happen and context changes. We will take that into account in our software and lives, as well as the pursuit of happiness. We will evolve.')?></li>
                        <li><?php _e('We believe that there is nothing as beautiful as understanding the software you use in daily life. Therefore, we will openly educate people about Free Software, our Community, and our Operating System.')?></li>
                    </ul>
                    
                    <h2><?php _e('Mageia is Quality')?></h2>
                    <ul>
                        <li><?php _e('Mageia will be based on good quality/stability requirements.')?></li>
                        <li><?php _e('Mageia will be compliant with open source standards.')?></li>
                        <li><?php _e('Mageia will always adhere to high security and privacy standards/technologies to protect our users\' data.')?></li>
                    </ul>
                    
                    <h2><?php _e('Mageia is Open Relations')?></h2>
                    <ul>
                        <li><?php _e('We will secure the future of the distribution through its community.')?></li>
                        <li><?php _e('We will cooperate with other OSS distributions and core and kernel developers with code contribution.')?></li>
                        <li><?php _e('We will work in collaboration with other open source projects.')?></li>
                        <li><?php _e('We will welcome any Commercial Enterprise as part of our community.')?></li>
                        <li><?php _e('Mageia will always be based upon Open Source Software. However, it will also be open to non-OSS contributions, to provide alternatives for our users\' diverse needs and expectations.')?></li>
                        <li><?php _e('Mageia will always be a collective, international and organised endeavor, representative of our pluralistic community.')?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
