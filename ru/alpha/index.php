<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Загрузка Mageia альфа (нестабильных) релизов</title>
    <meta name="description" content="Download page for Mageia first technical alpha" />
    <meta name="keywords" content="mageia, alpha, unstable, iso, download, test, not for production" />
    <meta name="author" content="Mageia" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" >
    <?php include '../../analytics.php'; ?>
</head>
<body>
    <?php include '../../langs.php'; ?>
    
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1>Mageia <span>| Альфа Загрузки</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para" style="color: #f22; text-align: center;">
                    <h2 style="font-weight: bold;">Будьте осторожны! Альфа == Нестабильное ПО!</h2> 
                    <p>НЕ ПРЕДНАЗНАЧЕНО ДЛЯ: использования, обзоров, личной или производственной оценки.</p> 
                    <p>ПРЕДНАЗНАЧЕНО ДЛЯ: тестирования разработчиками и сборщиками пакетов.</p>
                </div>
            </div>
            <div class="yui-g"><div class="para">
                <p>Чтобы вы не делали с предоставляемым образом диска ISO, вы делаете это на свой страх и риск, и вся ответственность лежит на вас. Если вы ищите стабильную Linux систему, то вам стоит подождать будующих релизов Mageia.</p> 
 
                <p style="font-weight: bold; color: #f22">Ещё раз, пожалуйста, НЕ загружайте и/или не устанавливайте это если вы не впоолне осознаёте что это за ISO.</p> 
                
                <h2>Вы всё ещё хотите скачать "заводскую" альфа версию Mageia?</h2> 
                <p>Ладно. Итак, для начала: имеется два образа ISO: 32-битный и 64-битный DVD. Каждый объёмом около 2&nbsp;Гб.</p> 
                <p>Ниже вы найдете список серверов, являющихся зеркалами Mageia:</p> 
                <ol> 
                    <li>выберите сервер, который лучше всего вам подходит (предпочтительно в вашей стране);</li> 
                    <li>выберите образ ISO, который вам больше всего подходит (надеемся, их имена говорят сами за себя).</li> 
                </ol>
                <br />
                <table id="dl-table"><thead>
                    <tr><th>Расположение</th><th>Протокол</th><th>Сервер</th></tr>
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
                    <h2>Об этом релизе</h2> 
                    <p>Это наш первый ISO, выпушенный из нашей системы сборки. Его выпуск это хороший способ протестировать его и увидеть, что необходимо улучшить в ближайшие недели.</p> 
                    
                    <ul> 
			<li><a href="http://blog.mageia.org/?p=492" hreflang="en">Сообщение в блоге</a></li> 
			<li><a href="http://mageia.org/wiki/doku.php?id=iso1:alpha1_release_notes" hreflang="en">Заметки о релизе</a></li> 
                        <li><a href="http://mageia.org/wiki/doku.php?id=iso1:alpha1_errata" hreflang="en">Ошибки</a></li> 
                        <li><a href="http://mageia.org/en/">Что такое Mageia?</a></li> 
                    </ul> 
                    <p>Альфа 2 будет выпущенна 15 Марта.</p> 
                    <p>Вы можете посмотреть наш <a href="http://mageia.org/wiki/doku.php?id=iso_1_specifications#expected_milestones">план выпуска Mageia&nbsp;1</a>.</p>
                    
                    
                </div></div>
                <div class="yui-u"><div class="para">
                    <h2>Вы можете помочь!</h2> 
                    <p>Да! Этот релиз ещё не совершенен, и следующий будет таким же, но он будет уже лучше!</p> 
                    <p>Есть очень много различных сфер в которых вы можете внести вклад в Mageia: разработка ПО, сборка пакетов, тестирование, переводы, сообщение об ошибках и их исправление, и <a href="http://mageia.org/wiki/">многе другое</a>!</p> 
                    <p><a href="http://mageia.org/wiki/doku.php?id=contribute">Посмотрите, как вы можете присоединиться к веселью и внести свой вклад</a></p>

                </div>
                <div class="para">
                    <h3>Пожертвования!</h3> 
                    <p>Да! <a href="http://mageia.org/en/donate/">Вы также можете внести пожертвования!</a></p> 
                    <p>Mageia полагается только на своё сообщество, будь то время, деньги, способности!</p>
                </div></div>
            </div>
            <div class="para" style="color: #999;">
		<p>Да, это не самая лучшая страница загрузки на текущий момент. Но она хороша тем, что может сделать Альфа версию менее привлекательной не для разработчиков. Кстати, ранее уже упоминалось, что мы также приглашаем к участию в наших командах 
                    <a href="http://www.mageia.org/wiki/doku.php?id=web">Веб</a> и <a href="http://www.mageia.org/wiki/doku.php?id=sysadmin">Сисадминов</a>?
                    В проекте есть и <a href="http://www.mageia.org/wiki/doku.php?#teams">другие столь же дружелюбные команды</a>.</p>

            </div>
        </div>
    </div>
</body>
</html>
