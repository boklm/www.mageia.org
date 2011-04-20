<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html dir="ltr" lang="ru">
<head>
    <meta charset="utf-8" />
    <title>Mageia - новый дистрибутив Linux</title>
    <meta name="description" content="Mageia, новый дистрибутив Linux" />
    <meta name="keywords" content="mageia, linux, mandriva, free software" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" />
    <link rel="alternate" type="application/rss+xml" title="Mageia Blog (Русский)" href="http://blog.mageia.org/ru/?feed=rss" />
    <?php include '../analytics.php';?>
</head>
<body>
    <?php include '../langs.php'; ?>
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh">новый дистрибутив Linux</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g bb1">
                <div class="para"><p>Mageia is a fork of Mandriva Linux,
                    supported by a not-for-profit organisation of
                    recognized and elected contributors.</p>

                    <p>Further than just delivering a free, secure, stable and sustainable operating system,
                        the goal is to set up a stable and trustable governance to direct collaborative projects
                        (<a href="#announce">check original announcement</a>).</p>
                </div>
            </div>
            <?php include '../release_counter.php'; ?>
            <div class="yui-g bb1">
                <div class="yui-u first rb1">
                    <div class="para" id="news">
                        <h2><a href="http://blog.mageia.org/">Новости</a></h2>
                    <?php include '../lib/news.php'; echo html_news('en'); ?>
                    </div>
                </div>
                <div class="yui-u">
                    <div class="para" lang="en">
                        <h2>Happening right now</h2>
                        <?php include '../roadmap.php'; ?>
                    </div>
                </div>
            </div>
            <div class="yui-g bb1">
                <div class="yui-u first">
                    <div class="para" id="contact">
                        <h2>Обратная связь</h2>
                        <ul>
                            <li><a href="https://www.mageia.org/mailman/">Списки рассылки</a></li>
                            <li><a href="http://mageia.org/wiki/doku.php?id=irc">IRC (сеть Freenode)</a></li>
                            <li><a href="http://mageia.org/wiki/">Mageia Wiki</a></li>
                            <li>Contact the founders team:
                                <ul>
                                    <li><a href="mailto:mageia-contact@mageia.org">mageia-contact@mageia.org</a></li>
                                    <li><a href="mailto:press@mageia.org">press@mageia.org</a></li>
                                    <li>expect an answer within 2 days</li>
                                </ul></li>
                            <li><a href="http://www.twitter.com/mageia_org">twitter.com/mageia_org</a></li>
                            <li><a href="http://identi.ca/mageia">identi.ca/mageia</a></li>
                        </ul>
                        <!--
                        <p>Please do not use this address for discussions that can happen on above mailing-lists
                            or IRC channels.</p>
                        -->
                    </div>
                </div>
                <div class="yui-u">
                    <div class="para">
                    <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FMageia%2F157247240967735&amp;width=320&amp;connections=10&amp;stream=false&amp;header=false&amp;height=255" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:320px; height:255px;" allowTransparency="true"></iframe>
                    </div>
                </div>
            </div>
            <div class="yui-g">
                <div class="para" id="announce">
                    <p class="date">Paris, September 18<sup>th</sup> 2010</p>
                    <p>Наверное, ни для кого уже не секрет, что будущее дистрибутива Mandriva Linux довольно туманно.</p>
                    <p>Большинство разработчиков дистрибутива были уволены при ликвидации компании Edge-IT. Мы больше не доверяем планам Mandriva SA и не думаем, что эта компания (как и любая другая коммерческая организация) может быть безопасной площадкой для такого проекта.</p>

                    <p>Многое произошло за последние 12 лет. Много хорошего: сообщество Mandriva Linux стало достаточно обширным, оно состоит из опытных и заинтересованных людей, дистрибутив остается одним из самых популярных, удобных в использовании и инновационных. Но в то же время произошли события, в результате которых многие потеряли веру в жизнеспособность их любимого дистрибутива.</p>
                    <p>Люди, принимающие участие в разработке, не хотят быть зависимыми от экономических флуктуаций и странных, подчас необьяснимых «стратегических ходов» руководства компании.</p>
                </div>
                <div class="para">
                    <h2>Форк Mandriva Linux? Да</h2>

                    <p>Решение о форке существующего open-source проекта никогда не было простым. И форк Mandriva будет очень нелёгкой задачей.</p>
                    <p>Это решение не было импульсивным. Все мы — бывшие сотрудники, контрибьюторы Cooker'a, сообщество пользователей, очень многое обсуждали. В течение нескольких недель мы оценивали реакцию и собирали отзывы, мнения для того, чтобы прийти к всесторонне обдуманному решению, перед тем, как действовать.</p>

                    <p>Мы верим в то, что форк - лучшее решение, и потому мы решили создать новый дистрибутив:
                        <strong>Mageia</strong>.</p>
                </div>
                <div class="para">
                    <h2>Новые перспективы</h2>
                    <p>Mageia — целиком общественный проект: он не будет зависеть от судьбы отдельной компании.</p>
                    <p>В ближайшее время будет основана некоммерческая организация, управляемая советом, набранным из членов сообщества. Через год совет будет переизбран, и перевыборы станут регулярными.</p>
                    <p>Данная организация будет заниматься управлением и координацией следующих направлений: хостинг кода и сайтов, распостранение, система сборки, маркетинг, PR и мероприятия. Данные, факты, планы будут обсуждаться и утверждаться данной организацией.</p>
                    <p>Мы обсудим и опубликуем результаты в самое ближайшее время. И у нас уже есть идеи относительно основной идеологии дистрибутива:</p>
                    <ul>
                        <li>обеспечить свободное использование Linux и свободного программного обеспечения для всех;</li>
                        <li>предоставить интегрированные инструменты для настройки системы;</li>
                        <li>поддерживать высокую степень инеграции между базовой системой, десктопами (KDE/GNOME) и приложениями, значительно улучшать интеграцию и поддержку сторонних приложений, открытых или проприетарных;</li>
                        <li>освоить новые архитектуры и форм-факторы;</li>
                        <li>лучше понять потребности и желания пользователей.</li>
                    </ul>
                    <p>Уверены, у вас тоже есть идеи. Мы обязательно предоставим вам возможность ими поделиться.</p>
                </div>
                <div class="para">
                    <h2>Сообщество</h2>
                    <p>Мы видим сообщество Mageia состоящим из:</p>
                    <ul>
                        <li>пользователей;</li>
                        <li>создателей (дизайнеров, разработчиков, упаковщиков, переводчиков, тестеров и т.д.);</li>
                        <li>юристов.</li>
                    </ul>
                    <p>Это могут быть как отдельные люди, так и организации, компании со всего мира.</p>
                    <p>Здесь много работы: много стран, много языков, много культур, абсолютно разные требования. И это здорово!</p>
                    <p>На примере проекта Mandriva Assembly мы увидели, насколько непростая это задача. Но мы верим, что можно сделать ещё лучше.</p>
                </div>
                <div class="para" id="people">
                    <h2>People.</h2>
                    <p>Чем бы вы не занимались в жизни, люди всегда были самым большим и лучшим активом. И целью Mageia является помощь людям. Важно доверие. Мы находимся в самом начале развития. Оно будет нелёгким. Но мы верим, что это необходимо.</p>

                    <?php include '../people.html'; ?>
            
                    <p>Для остальных контрибьюторов: если вы хотите увидеть своё имя в списке и готовы работать по плану форка, дайте нам знать на IRC или по e-mail.</p>
                </div>
                <div class="para">
                    <h2>Что дальше?</h2>
                    <p>У нас много планов на ближайшие дни:</p>
                    <ul>
                        <li>найти оборудование для хостинга сайта и исходного кода, сборочные сервера + датацентры для их размещения;</li>
                        <li>определить состав разработчиков, контрибьюторов, переводчиков, тестировщиков для внесения вклада в развитие Mageia;</li>
                        <li>сформировать экспертное мнение касательно создания организации и определения её основных процессов.</li>
                    </ul>
                    <p>Ваши помощь и поддержка будут очень важны для нас.</p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
