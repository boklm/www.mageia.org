<?php
define('HLANG', true);
require '../../../langs.php';
_lang_load($locale, 'about/code-of-conduct');

?><!DOCTYPE html>
<html dir="ltr" lang="<?php echo $locale; ?>">

<head>
    <meta charset="utf-8">
    <title><?php _e('Code of Conduct - Mageia')?></title>
    <meta name="description" content="<?php _e('Mageia project Code of Conduct for contributors and users.')?>">
    <meta name="keywords" content="<?php _e('mageia, values, conduct, rules')?>">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <?php include '../../../analytics.php'; ?>
</head>
<body class="about">
    <?php echo $hsnav; ?>
    <h1 id="mgnavt"><?php _e('Code of Conduct')?></h1>
    <div id="doc" class="yui-t7">
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para codeofconduct">
                    <div id="preamble">

                    <p><?php _e('The Mageia project is a lively community, open to everyone. We want this community to be a nice place for both newcomers and current members, where everyone feels comfortable and accepted whatever the amount and type of his/her contributions are.')?></p>

                    <p><?php _e('In the Mageia Community, participants from all over the world come together to create a Free Software operating system. This is made possible by the support, hard work, and enthusiasm of thousands of people, including those who create and use Mageia, as well as other Free Software project members.')?></p>

                    <p><?php _e('This document offers some guidance to ensure that the Mageia participants can cooperate effectively in a positive and inspiring atmosphere, and to explain how we can support each other.')?></p>

                    <p><?php _e('This Code of Conduct is shared by all contributors and users who engage with the Mageia project and its community services.')?></p>
                    </div>
                    
                    <div id="overview">
                    <h2 class="be"><?php _e('Overview')?></h2>

                    <p><?php _e('This Code of Conduct presents a summary of the shared values and “common sense” thinking in our community. The basic social imperatives that hold our project together include:')?></p>
                    <ul>
                        <li><a href="#be_considerate"><?php _e('Be considerate')?></a>,</li>
                        <li><a href="#be_respectful"><?php _e('Be respectful')?></a>,</li>
                        <li><a href="#be_collaborative"><?php _e('Be collaborative')?></a>,</li>
                        <li><a href="#be_pragmatic"><?php _e('Be pragmatic')?></a>,</li>
                        <li><a href="#support"><?php _e('Support others in the community')?></a>,</li>
                        <li><a href="#get_support"><?php _e('Get support from others in the community')?></a>.</li>
                    </ul>
                    
                    <p><?php _e('This Code of Conduct reflects the agreed standards of behaviour for members of the Mageia Community, in any forum, mailing list, wiki, web site, IRC channel, public meeting or private correspondence within the context of the Mageia project and its services. The community acts according to the standards written in this Code of Conduct and will defend these standards for the benefit of the community. Leaders of any Mageia team maintain the right to suspend the access of any person who persists in breaking our shared Code of Conduct or, if necessary, the issue can be escalated and brought to the attention of the Mageia Council for a final decision.')?></p>
                    </div>

                    <h2 id="be_considerate" class="be"><?php _e('Be considerate.')?></h2>

                    <p><?php _e('Your actions and work will affect and be used by other people, and you in turn will depend on the work and actions of others. Any decision you make will affect other community members, and we expect you to take those consequences into account when making decisions.')?></p>

                    <p><?php _e('As a contributor, ensure that you give full credit for the work of others and bear in mind how your changes affect others. It is also expected that you try to follow the project schedule and guidelines.')?></p>

                    <p><?php _e('As a user, remember that contributors work hard on their contributions to Mageia and take great pride in it. If you get frustrated with a particular issue, your problems are more likely to be resolved if you can give accurate and well-mannered information to all concerned.')?></p>

                    <h2 id="be_respectful" class="be"><?php _e('Be respectful.')?></h2>

                    <p><?php _e('In order for the Mageia community to stay healthy, its members must feel comfortable and accepted. Treating one another with respect is absolutely necessary for this to be achieved. If any disagreement occurs, you should first assume that people mean well.')?></p>

                    <p><?php _e('We do not tolerate personal attacks, racism, sexism or any other form of discrimination. Disagreement is inevitable from time to time, but respect for the views of others will go a long way to winning respect for your own view. Respecting other people, their work, their contributions and assuming well-meaning motivation will make community members feel comfortable and safe, and will result in more motivation and productivity.')?></p>

                    <p><?php _e('We expect members of our community to be respectful when dealing with other contributors, users and communities. Remember that Mageia is an international project and that you may be unaware of important aspects of other cultures.')?></p>

                    <h2 id="be_collaborative" class="be"><?php _e('Be collaborative.')?></h2>

                    <p><?php _e('The Free Software Movement depends on collaboration: it helps limit duplication of effort while improving the quality of the produced software. In order to avoid misunderstanding, try to be clear and concise when requesting or giving help. Remember that it is easy to misunderstand emails (especially when they are not written in your mother tongue). Ask for clarifications if something seems unclear; remember the first rule - first, assume that people mean well.')?></p>

                    <p><?php _e('As a contributor, you should aim to collaborate with other community members as well as with other communities (upstream projects for instance) that are interested in, or depend on the work you do. Your work should be transparent and be fed back into the community as quickly as possible (even when not fully completed). If you wish to work on something new in existing projects, keep those projects team informed of your ideas and progress.')?></p>

                    <p><?php _e('It may not always be possible to reach consensus on the implementation of an idea, so don\'t feel obliged to achieve this before you begin. However, always ensure that you keep the outside world informed of your work and publish it in a way that allows outsiders to test, discuss, and contribute to your efforts.')?></p>

                    <p><?php _e('Contributors to every project come and go. When you leave or disengage from the project, in whole or in part, you should do so with pride about what you have achieved and by acting responsibly towards others who come after you to continue working on the project.')?></p>

                    <p><?php _e('As a user, your feedback is important, as is its form. Poorly considered comments can cause pain and demotivate other community members, but considerate discussion of problems can bring positive results. An encouraging word works wonders.')?></p>


                    <h2 id="be_pragmatic" class="be"><?php _e('Be pragmatic.')?></h2>

                    <p><?php _e('Mageia is a pragmatic community.')?></p>
                    <p><?php _e('We value tangible results over having the last word in a discussion. We defend our core values like freedom and respectful collaboration, but we don\'t let arguments about minor issues get in the way of achieving more important results. We are open to suggestions and welcome solutions regardless of their origin. When in doubt, support a solution which helps getting things done over one which has theoretical merits, but isn\'t being implemented. Use the tools and methods which help get the job done. Let decisions be made by those who do the work. If some issues arise that seem irreconcilable, consult the relevant team leader. If necessary, the Mageia Council may be consulted.')?></p>


                    <h2 id="support" class="be"><?php _e('Support others in the community.')?></h2>

                    <p><?php _e('Our community is made strong by mutual respect, collaboration and responsible, pragmatic behaviour. Sometimes these values have to be defended and other community members may need help.')?></p>

                    <p><?php _e('If you witness others being attacked, think first about how you can offer them personal support. If you feel that the situation is beyond your ability to help individually, go privately to the victim and ask if some form of official intervention is needed. Similarly you should support anyone who appears to be in danger of burning out, either through work-related stress or personal problems.')?></p>

                    <p><?php _e('When problems arise, consider respectfully reminding those involved of our shared Code of Conduct as a first action. Leaders are defined by their actions, and can help set a good example by working to resolve issues in the spirit of this Code of Conduct before those issues escalate.')?></p>


                    <h2 id="get_support" class="be"><?php _e('Get support from others in the community.')?></h2>

                    <p><?php _e('Disagreements, both political and technical, happen all the time. Our community is not an exception. The goal is not to avoid disagreements or differing views but to resolve them constructively. You should turn to the community to seek advice and to resolve disagreements, and where possible, consult the team(s) most directly involved.')?></p>

                    <p><?php _e('Think deeply before turning a disagreement into a public dispute. If necessary request mediation and attempt to resolve differences in a less highly-emotional medium. If you do feel that you or your work is being attacked, take your time to breathe before writing heated replies. Consider a 24 hour moratorium if emotional language is being used - a cooling off period is sometimes all that is needed. If you really want to go a different way, then we encourage you to publish your ideas and your work, so that it can be tried and tested.')?></p>

                    <p class="license"><?php _e('This document is licensed under the <a href="http://creativecommons.org/licenses/by-sa/3.0/us/">Creative Commons Attribution - Share Alike 3.0 License</a> (<a href="http://wiki.mandriva.com/en/Code_of_Conduct" rel="nofollow">parent version</a>).')?></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>