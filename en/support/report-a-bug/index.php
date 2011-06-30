<!DOCTYPE html>
<html dir="ltr" lang="pt">
<head>
    <meta charset="utf-8">
    <title>Como reportar um erro | Mageia</title>
    <meta name="description" content="Como reportar um erro para a Mageia.">
    <meta name="keywords" content="mageia, linux, bug, erro, reportar, procedimento, suporte, ajuda">
    <meta name="author" content="Mageia">
    <link rel="stylesheet" type="text/css" href="/g/style/all.css" >
    <?php include '../../../analytics.php'; ?>
</head>
<body class="report-a-bug">
    <?php include '../../../langs.php'; ?>
    
    <div id="doc" class="yui-t7">
        <div id="hd" role="banner"><h1><a id="logo" href="/"><span>Mageia</span></a> <span class="lsep">|</span> <span class="subh">Como Reportar um Erro</span></h1></div>
        <div id="bd" role="main">
            <div class="yui-g">
                <div class="para donate">
                    <div class="qsidesummary">
                        <ol>
                            <li><a href="#update">Actualizar o seu sistema</a></li>
                            <li><a href="#reproduce">Reproduzir o erro</a></li>
                            <li><a href="#go">Ir para bugs.mageia.org</a></li>
                            <li><a href="#search">Procurar erros similares</a></li>
                            <li><a href="#file">Preencher um novo erro</a></li>
                            <li><a href="#follow">Dar seguimento</a></li>
                            <li><a href="#thx">Obrigado!</a></li>
                            <li><a href="#more">Mais</a></li>
                        </ol>
                    </div>
                    
                    <h2 id="update">1. Actualizar o seu sistema.</h2>
                    <p>Certifique-se que o seu sistema está actualizado, 
                        e volte a verificar se ainda encontra o mesmo erro.</p>
                    <p>Se não encontrar, significa que a instalação de uma actualização corrigiu o erro
                        &ndash; pode parar aqui.</p>
                    
                    <hr />
                    <h2 id="reproduce">2. Reproduzir o erro.</h2>
                    <p>Certifique-se que pode reproduzir o erro, e como o faz.</p>
                    <p>Se não conseguir, será difícil para os desenvolvedores identificar e corrigir o erro.
                        Mas se ainda pensa que este erro é importante o suficiente para ser reportado, continue.</p>

                    <hr />
                    <h2 id="go">3. Ir para <a href="https://bugs.mageia.org/">bugs.mageia.org</a>.</h2>
                    <p>&hellip; e autentique-se na sua <a href="https://identity.mageia.org/">conta Mageia</a>.
                        Se ainda não tem uma conta,
                        pode <a href="https://identity.mageia.org/register">registar uma</a>.</p>
                    
                    <hr />
                    <h2 id="search">4. Procurar um erro similar.</h2>
                    <p>Este erro pode já ter sido reportado. Como tal procure-o usando o campo de pesquisa.</p>
                    <p>Se houver um erro similar:</p>
                    <ul>
                        <li>já foi resolvido? a resolução proposta funciona para si?</li>
                        <li>a resolução ainda está pendente? então tente verificar se
                            pode adicionar informações relevantes na secção de
                            comentários do erro (no fundo da página).</li>
                        <li>deseja ser notificado acerca de actualizações relativas ao erro? então adicione-se no campo Cc.</li>
                    </ul>
                    <p>Se nã encontrar um erro similar, ou a resolução não funciona para si, pode continuar.</p>

                    <hr />
                    <h2 id="file">5. Preencher um novo erro.</h2>
                    <p>Escolha o Produto, Componente, Versão, Plataforma de Material que melhor
                       corresponde ao contexto deste erro. Indique o nome do pacote fonte RPM 
                       (veja em baixo para mais detalhes).</p>
                    
                    <p>Escreva um sumário claro explicando o erro, em poucas palavras.</p>

                    <p>Explique o erro em detalhes, seguindo o modelo que lhe é fornecido no formulário.</p>
                    
                    
                    <p>Anexe os documentos e informação que lhe pareçam relevantes acerca deste erro.</p>

                    <p>Atribua o erro ao mantenedor do pacote (ou deixe a equipa de triagem adicioná-lo)</p>
                    
                    <p>Publique o seu erro.</p>
                    
                    <hr />
                    <h3>Documente o seu erro!</h3>
                    <p>É crucial que reúna informação acerca do seu erro:</p>
                    <ul>
                        <li>qual é o programa envolvido? qual é o pacote, o pacote fonte?</li>
                        <li>quém é o mantenedor?</li>
                        <li>tem um ficheiro de registo ou uma captura de ecrã que possa ajudar a demonstrar o problema?</li>
                    </ul>
                    <p><code class="term">$ rpm -qi package</code></p>
                    <p>irá dar-lhe já bastante informação acerca do pacote: nome do pacote fonte, mantenedor, etc.</p>

                    <hr />
                    <h2 id="follow">6. Dar seguimento.</h2>
                    <p>O seu erro será revisto pela equipa de Triagem e/ou pelo mantenedor do pacote,
                        ou outros contribuidores.
                        Irá ajudar bastante que responda às questões para que possam ter uma melhor visão
                        do problema e que o possam corrigir rapidamente.</p>
                    <p>Similarmente, o seu erro pode ser silenciosamente corrigido numa versão posterior.
                        Se assim for, considere em fechar o seu erro.</p>

                    <hr />
                    <h2 id="thx">7. Obrigado!</h2>
                    <p>Obrigado por ter tempo para nos reportar acerca da sua experiência na Mageia.
                       Isto ajudará a tornar a Mageia num melhor sistema operativo para toda a gente.</p>

                    <hr />
                    <h2 id="more">Mais.</h2>
                    <p>Para uma descrição mais detalhada de <a href="http://mageia.org/wiki/doku.php?id=qa_bugzilla#how-to_report_a_bug">como reportar um erro</a>.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
