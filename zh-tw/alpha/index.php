<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Télécharger la version alpha (non stable) de Mageia</title>
    <meta name="description" content="Page de téléchargement de la première version alpha technique de Mageia" />
    <meta name="keywords" content="mageia, alpha, unstable, iso, download, test, not for production" />
    <meta name="author" content="Mageia" />
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" >
    <?php include '../../analytics.php'; ?>
</head>
<body>
    <?php include '../../langs.php'; ?>
    
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1>Mageia <span>| 下載 Alpha 版</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para" style="color: #f22; text-align: center;">
                    <h2 style="font-weight: bold;">小心! 所謂的 Alpha 版就是不穩定版本!</h2>
                    <p>所以這個版本不適用於：日常使用；公開檢視；個人或產品的評鑑。</p>
		    <p>這個版本的用途為：開發者與套件之測試。</p>

                </div>
            </div>
            <div class="yui-g"><div class="para">
                <p>您將要用這個光碟映像檔來做的事情必須由您自己負責承擔風險。 如果您想要尋找一個穩定的 Linux 系統，您可以等待 Mageia 之後發布的版本。</p>

	    <p style="font-weight: bold; color: #f22">
	    再次重申，如果您不確定您了解這個光碟的用途，請不要下載或安裝它。</p>
                
	    <h2>您仍然想要下載 Mageia Alpha 測試版本?</h2>
	    <p>
		好吧。首先，我們有兩個 ISO 映像檔: 一個 32 位元 DVD 和一個 64 位元 DVD。 各大約有 2 GiB。 
	    </p>
	    <p>
		以下您將看到目前提供 Mageia 軟體鏡像服務的伺服器列表:
	    </p>

                <ol>
		<li>
		選擇最適合您的伺服器 (最好是在您的國家);
		</li>
		<li>
		選擇最適合您的 ISO 映像檔 (我們希望它們的名稱足夠一目了然)。
		</li>
                </ol>
                <br />
                <table id="dl-table"><thead>
                    <tr><th>位置</th><th>協定</th><th>伺服器</th></tr>
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
                    <h2>關於這個釋出版本</h2>
		    <p>
			這是我們第一個 ISO, 由我們自己的編譯系統產生。 現在發布將有助於測試它並了解接下來數週還有些甚麼需要加強改進的。
		    </p>
                    
                    <ul>

			<li><a href="http://blog.mageia.org/?p=492" hreflang="en">網誌文章</a></li>
			<li><a href="/wiki/doku.php?id=iso1:alpha1_release_notes" hreflang="en">發布通告</a></li>
                        <li><a href="/wiki/doku.php?id=iso1:alpha1_errata" hreflang="en">勘誤表</a></li>
                        <li><a href="/en/">Mageia 是什麼?</a></li>
                    </ul>
                    <p>Alpha 2 預定在三月 15 日發布。</p>

                    <p>您可以看看我們的 <a href="http://mageia.org/wiki/doku.php?id=iso_1_specifications#expected_milestones">Mageia 1 進度規劃</a>。</p>
                    
                    
                </div></div>
                <div class="yui-u"><div class="para">
                    <h2>您可以幫忙！</h2>
		    <p>
		    沒錯! 這個版本仍然相當簡陋，下一個也是，但將會更好!
		    </p>

		    <p>
		    有許多事情是您可以貢獻給 Mageia 的: 開發原始碼、打包套件、測試、翻譯、回報和修正錯誤，還有<a href="http://mageia.org/wiki/">更多更多</a>!</p>
                    <p>若您想加入我們的行列，貢獻給 Mageia，請參考<a href="http://mageia.org/wiki/doku.php?id=contribute">這篇說明</a>。</p>

                </div>
                <div class="para">
                    <h3>捐款！</h3>

                    <p>是的！<a href="/en/donate/">您也可以捐款！</a></p>
		    <p>
		    Mageia 完全仰賴來自社群的參與，無論是時間、技術、或資金!
		    </p>
                </div></div>
            </div>
            <div class="para" style="color: #999;">
		<p>

		    是的，這個下載頁現在還非常簡陋。 但是它可以避免讓這個 Alpha 版本吸引非開發者來下載。 我們可否提過歡迎大家來協助我們的 <a href="http://www.mageia.org/wiki/doku.php?id=web">網站</a> 和 <a href="http://www.mageia.org/wiki/doku.php?id=sysadmin">系統管理團隊</a>?
                    這個計劃裡也還有<a href="http://www.mageia.org/wiki/doku.php?#teams">許多其它非常友善的團隊</a>。</p>

            </div>
        </div>
    </div>
</body>
</html>
