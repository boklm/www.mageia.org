<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html>
<html dir="ltr" lang="pt-br"><head>
    <meta charset="utf-8"><title>Mageia - Uma nova distribuição Linux</title>
    <meta name="description" content="Mageia è una distribuzione Linux basata sulla communità.">
    <meta name="keywords" content="mageia, linux, mandriva, software libero">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css">
    <?php include '../analytics.php';?>
</head><body>
    <?php include '../langs.php'; ?>
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1>Mageia <span>- Uma nova distribuição Linux</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g bb1">
                <div class="para"><p>Mageia é um fork do Mandriva Linux, apoiada por uma organização
                    sem fins lucrativos reconhecida e colaboradores eleitos.</p>

                    <p>Mais do que apenas oferecer um sistema operacional livre, seguro, estável e sustentável,
                        o objetivo é a criação de uma administração estável e confiável para orientar projetos
                        colaborativos
                        (<a href="#announce">veja o anúncio original</a>).</p>
                </div>
            </div>
            <div class="yui-g bb1">
                <div class="yui-u first rb1">
                    <div class="para" id="news">
                        <h2><a href="http://blog.mageia.org/pt-br/">Noticias</a></h2>
                    <?php include '../lib/news.php'; echo html_news('pt'); ?>
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
                        <h2>Como nos contatar</h2>
                        <ul>
                            <li><a href="https://www.mageia.org/mailman/">Mailing-lists</a></li>
                            <li><a href="http://mageia.org/wiki/doku.php?id=irc">IRC (Rede Freenode)</a></li>
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
                <div class="para">
                    <p class="date">Paris, 18 de setembro de 2010</p>
                    <p>Como você deve ter ouvido falar, o futuro do Mandriva Linux é incerto.</p>
                    <p>A maioria dos empregados que trabalhavam na distribuição foram demitidos quando a Edge-IT foi liquidada. Nós não confiamos mais nos planos da Mandriva SA e não acreditamos que a empresa (ou qualquer outra empresa) seja um porto seguro para tal projeto.</p>

                    <p>Muitas coisas aconteceram nos últimos 12 anos. Algumas foram muito boas: a comunidade em torno do Mandriva Linux é grande, motivada e experiente, a distribuição se tornou uma das mais populares e premiadas, fácil de usar e inovadora. Alguns outros eventos tiveram consequências realmente muito ruins, que fizeram as pessoas ficarem não tão confiantes quanto a viabilidade de sua distribuição favorita.</p>
                    <p>As pessoas que trabalham nisto apenas não querem ser dependentes da economia flutuante e errática, e os inexplicáveis movimentos estratégicos de uma empresa.</p>
                </div>
                <div class="para">
                    <h2>Fork do Mandriva Linux? Sim!</h2>

                    <p>Fazer um fork de um projeto de código aberto existente nunca é uma decisão fácil de ser tomada, e fazer um fork do Mandriva Linux é um trabalho imenso.</p>

                    <p>Isto não foi uma decisão impulsiva. Nós todos conversamos: ex-empregados, contribuidores do Cooker e a comunidade de usuários. Nós coletamos opiniões e reações nas últimas semanas pois precisávamos de algum tipo de acordo global e garantias para uma base inicial antes de seguirmos adiante.</p>

                    <p>Acreditamos que um fork é a melhor solução e decidimos criar uma nova distribuição:
                        <strong>Mageia</strong>.</p>
                </div>
                <div class="para">
            <h2>Novos fundamentos.</h2>
            <p>Mageia é um projeto da comunidade: ele não vai depender do destino de uma empresa particular.</p>
            <p>Uma organização sem fins lucrativos será criada nos próximos dias e será gerida por um conselho de membros da comunidade. Após o primeiro ano, o conselho será eleito regularmente pelos membros comprometidos com a comunidade.</p>
            <p>Esta organização irá gerenciar e coordenar a distribuição: código e hospedagem do software e distribuição, construção do sistema, marketing, comunicação e promoção de eventos. Dados, fatos, roteiros, designs serão compartilhados, discutidos através desta organização.</p>
            <p>Vamos discutir e estabelecer os detalhes nos próximos dias.</p>
            <p>A distribuição Mageia será o que o conselho fizer com que ela seja, com a ajuda e contribuição de toda comunidade. Nós já temos ideias e planos para esta distribuição; queremos:</p>
            <ul>
                <li>tornar o Linux e o software livre simples de usar para todos;</li>
                <li>fornecer ferramentas de configuração do sistema integrado;</li>
                <li>manter um alto nível de integração entre a base do sistema, o desktop (KDE/GNOME) e aplicações; </li>
                <li>especialmente melhorar a integração com softwares de terceiros (sendo ele livre de software proprietário);
                </li>
                <li>focar em novas arquiteturas;</li>
                <li>melhorar nossa compreensão sobre usuários de computadores e dispositivos eletrônicos.</li>
            </ul>
            <p>Você certamente tem as suas ideias também. Nós teremos tempo para compartilhá-las.</p>
        </div>
        <div class="para">
            <h2>Comunidade.</h2>
            <p>Entendemos a comunidade Mageia como:</p>
            <ul>
                <li>usuários,</li>
                <li>criadores (designers, programadores, empacotadores, tradutores e testadores, etc),</li>
                <li>entusiastas.</li>
            </ul>
            <p>Eles podem ser indivíduos, organizações e empresas de todo o mundo.</p>
            <p>Existem desafios aqui, tantos países, tantas línguas, tantas culturas, necessidades tão diferentes. E isso é ótimo.</p>
            <p>Vimos com a experiência da Assembléia Mandriva que não é uma tarefa fácil. Acreditamos que podemos fazer melhor ainda.</p>
        </div>
        <div class="para">
            <h2>Pessoas.</h2>
            <p>Faça o que fizer na vida, as pessoas são seu maior e único recurso verdadeiro. E Mageia visa ajudar as pessoas. Questões de responsabilidade. Estamos apenas no início deste fork. Não vai ser fácil. Mas acreditamos que seja necessário.</p>
            <?php include '../people.html'; ?>
            
            <p>Para outros contribuidores: se você quiser que seu nome seja adicionado à lista, indicando que pretende seguir o fork, avise-nos no canal IRC, ou por e-mail.</p>
            </div>
            <div class="para">
                <h2>Próximos passos</h2>
                <p>Estamos procurando muitas coisas diferentes nos próximos dias:</p>
                <ul>
                    <li>hardware para hospedagem de código, servidores + datacenters para hospedar o projeto;</li>
                    <li>desenvolvedores, colaboradores, tradutores e testadores a dispostos a contribuir no desenvolvimento de Mageia;</li>
                    <li>conselhos sobre a construção da organização e seus processos, etc</li>
                </ul>
                <p>Sua ajuda e apoio será muito apreciada.</p>
            </div>
            </div>
        </div>
    </div>
</body></html>
