<?php

include("config.php");

if (empty($_SESSION)) {
    print "<script>location.herf='index.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="pr-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fonte LH sytem  -->
    <link href="https://fonts.googleapis.com/css2?family=Anta&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- fonte padrao -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../style.css">
    <title>LH system</title>
</head>

<body>

    <header id="cabecalho">

        <div>
            <ul class="menu-horizontal">
                <li id="testes">
                    <input type="checkbox" class="checkbox" onclick="trocaModoCor()" id="chk" />

                    <label class="label" for="chk">
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                        <div class="ball"></div>
                    </label>
                </li>
                <li id="itens-menu"><a href="#start">Sobre mim</a></li>
                <li id="itens-menu"><a href="#text">Cybersecurity</a></li>
                <li id="itens-menu"><a href="#nav">Ataques</a></li>

                <li id="itens-menu"><a onclick="confirmLogout()">Voltar</a></li>
            </ul>
            <h2 class="luan">LH system</h2>
        </div>
        <script>
            function confirmLogout() {
                var confirmLogout = confirm("Tem certeza que deseja sair?");
                if (confirmLogout) {
                    window.location.href = "logout.php";
                }
            }
        </script>
    </header>
    <main class="mr-20" id="mr-20">
        <div class="texto">
            <div>
                <div id="start">
                    <div>

                        <?php
                        print "<div class='container'>
                                <div class='row'>
                                    <div class='col-md-12 text-center'>
                                    <h3 class='animate-charcter'>Olá, " . $_SESSION["nome"] . " </h3>
                                    </div>
                                </div>
                                </div>";
                        ?>


                        <p>
                            &nbsp;Meu nome é <span>Luan</span>. Atualmente, sou jovem aprendiz na empresa <a href="https://gazin.com.br/" id="gazin" target="_blank"><i>Gazin</i></a>, na área de TI
                            (Tecnologia da Informação), na cidade de Douradina, no Paraná.
                            Tenho 17 anos e estou aqui para mostrar um pouco do que aprendi nesses primeiros meses de
                            trabalho, e falar um
                            pouco sobre ele.
                            Quando cheguei aqui pela primeira vez, me surpreendi. Achava que era um lugar extremamente
                            contraído, mas na
                            verdade é o contrário disso. O pessoal é concentrado e participativo. Nesse pequeno tempo
                            que trabalho aqui, já
                            consegui aprender algumas coisas interessantes.
                        </p>
                    </div>
                    <br>
                    <h2>Minha opinião sobre programação</h2>
                    <p>
                        &nbsp;Antes mesmo de ter me aprofundado nesse ramo, vejo que um grande e vasto mar de
                        oportunidades se abre diante de mim. Diversas áreas diferentes, de jeitos diferentes, para
                        pessoas diferentes. Tantas linguagens, e cada vez isso tende a aumentar.
                        Hoje vivemos em um mundo em que acaba sendo quase impossível sobreviver sem a internet. As
                        pessoas passam mais tempo olhando para telas do que para si mesmas. Então, imagine o poder e a
                        responsabilidade de quem controla e desenvolve essas áreas? Sem dúvidas, é algo extremamente
                        grandioso.
                    </p>
                    <br>
                    <h2>Meus objetivos</h2>
                    <p id="text">
                        &nbsp; Meus obejtivos para a minha vida é trabalhar com programação. Construir uma boa condição
                        financeira. Uma profissão que me enteressa na mesma porcentagem, é a área de cyber segurança os
                        "white hat" segurança na internet hoje em dia acaba sendo quase que esquecida por a maioria dos
                        usuários. Mais infelizmente não importe oque você faça, Nunca iremos estar "seguros",
                        infelizmente.
                    </p>

                    <div id="mobile-img">
                        <a href="https://luanhenriquegarcia.github.io/LH.system-0.5/"></a><img class="hatss" src="../img/White-Hat-vs-Black-Hat.png" alt="" width="200px">
                    </div>
                    <br>
                    <div id="imagem-hat">
                        <div id="texts">
                            <img src="../img/White-Hat-vs-Black-Hat.png" alt="" width="420px" id="foto">
                        </div>
                        <div>
                            <article id="text-img">
                                A <span class="azul">Cybersecurity</span> é de fundamental importância para as empresas
                                nos dias de hoje. Com o crescente uso da tecnologia em todos os setores da economia, os
                                dados e sistemas das empresas se tornaram alvos cada vez mais frequentes de ataques
                                cibernéticos. Um ataque cibernético bem-sucedido pode ter um impacto devastador para uma
                                empresa, causando: Perda de dados: dados confidenciais, como informações de clientes,
                                propriedade intelectual e dados financeiros, podem ser roubados ou perdidos.
                                Interrupção das operações: ataques podem interromper ou desabilitar sistemas críticos,
                                impedindo a empresa de funcionar normalmente.
                                Danos à reputação: um ataque cibernético pode prejudicar a reputação da empresa e a
                                confiança dos clientes.
                                Perdas financeiras: as empresas podem sofrer perdas financeiras significativas com
                                custos de recuperação, multas e perda de receita. Em resumo, a cibersegurança é um
                                investimento essencial para as empresas. Ela pode ajudar a proteger as empresas contra
                                uma série de riscos, como perda de dados, interrupção das operações, danos à reputação e
                                perdas financeiras.
                            </article>
                        </div>
                    </div>
                    <div>
                        <h2>O que os chapéus brancos fazem? <img src="../img/favicon.ico" alt="" width="20px" class="mini-hat"></h2>
                        <p>
                            &nbsp;Os chapéus brancos são hackers <strong>éticos</strong> que utilizam suas habilidades e
                            conhecimentos de segurança para fins legítimos e benéficos. Ao contrário dos chapéus pretos
                            (black hats) que agem de forma maliciosa, os chapéus brancos contribuem para a segurança da
                            internet e dos sistemas de computador. No mundo digital de hoje, onde as ameaças
                            cibernéticas estão em constante evolução, os chapéus brancos desempenham um papel crucial na
                            proteção de nossos dados e infraestrutura. Eles ajudam as organizações a se manterem à
                            frente dos atacantes e a prevenir violações de segurança. às vezes também chamados de
                            "hackers éticos" ou "bons hackers" são a antítese dos chapéus pretos. Eles exploram sistemas
                            ou redes de computadores para identificar suas falhas de segurança para que possam fazer
                            recomendações de melhoria. É essencial entender a diferença entre hackers de chapéu branco e
                            hackers de chapéu preto. Embora os chapéus brancos ajudem a melhorar a segurança cibernética
                            e a proteger as organizações, os chapéus pretos representam uma séria ameaça à privacidade
                            online. Promover a ética na cibersegurança e colaborar com profissionais white hat é
                            essencial para proteger os nossos sistemas e dados num mundo cada vez mais digitalizado.
                        </p>
                        <h2>O que os chapéus pretos fazem?&nbsp;<img src="../img/blackhat.png" alt="" width="20px" class="mini-hat"></h2>
                        <p>
                            &nbsp;Eles invadem sistemas de computador para roubar dados confidenciais, como informações
                            financeiras, dados pessoais ou propriedade intelectual.
                            Ataques cibernéticos: Realizam ataques para derrubar sites, interromper serviços. Chapéus
                            pretos são hackers mal-intencionados que utilizam suas habilidades de invasão de sistemas
                            para fins ilegais ou destrutivos. Ao contrário dos chapéus brancos que agem de forma ética,
                            os chapéus pretos representam uma séria ameaça à segurança cibernética.
                        </p>
                        <div class="gray-hat">
                            <h2>Existe também os Hackers de Chapéu Cinza (Gray Hat)</h2>
                            <p>
                                &nbsp;Os hackers de chapéu cinza (gray hat) operam em uma zona intermediária entre os
                                hackers de chapéu branco e preto. Eles usam suas habilidades para explorar
                                vulnerabilidades em sistemas de computador, mas nem sempre com a intenção de causar
                                danos. Hackers de chapéu cinza Encontram-se em um ponto intermediário. Eles podem usar
                                técnicas de hacking para encontrar vulnerabilidades de segurança, mas nem sempre seguem
                                as regras. Por exemplo, um hacker de chapéu cinza pode invadir um sistema de computador
                                sem permissão, mas depois relatar a vulnerabilidade ao proprietário do sistema.
                            </p>
                        </div>
                        <h3>Exemplos de atividades de Gray Hat:</h3>
                        <ul class="tabela">
                            <li>Hackear um site para encontrar e corrigir vulnerabilidades antes que sejam exploradas
                                por hackers de chapéu preto.</li>
                            <li>Vender informações sobre uma vulnerabilidade para uma empresa que pode ser afetada por
                                ela.</li>
                            <li>Realizar um teste de penetração em um sistema sem autorização, mas com a intenção de
                                ajudar a melhorar a segurança.</li>
                        </ul>
                        <h3>Ferramentas para Hackers (Éticos e Mal-Intencionados):</h3>
                        <p>
                            O mundo dos hackers possui diversas ferramentas que podem ser utilizadas para diversos fins,
                            tanto para o bem quanto para o mal. É importante lembrar que o uso antiético dessas
                            ferramentas pode ter consequências graves, inclusive legais.
                            Antes de se aprofundar no assunto, é crucial ter em mente seus objetivos e a
                            responsabilidade que acompanha o uso dessas ferramentas.
                        </p>
                        <details>
                            <summary id="mysummary">
                                <h4 id="nav">
                                    Como se prevenir de ataques hackers mal intencionados? <strong id="ver-mais">ver
                                        mais...</strong>
                                </h4>
                            </summary>
                            <ul class="tabela-summary">
                                <li>Use senhas fortes e exclusivas para cada conta.</li>
                                <li>Utilize gerenciador de senhas para armazená-las com segurança.</li>
                                <li>Habilite a autenticação de dois fatores (2FA) sempre que possível.</li>
                                <li>Evite clicar em links suspeitos ou baixar arquivos de fontes não confiáveis.</li>
                                <li>Tenha cuidado ao fornecer informações pessoais em sites e formulários online.</li>
                                <li>Mantenha-se atualizado sobre as últimas ameaças e golpes online.</li>
                            </ul>
                        </details>
                    </div>
                </div>
                <div>
                    <div id="dados">
                        <div id="t1">
                            <h2><span class="azul">Ataque</span> DDoS:</h2>
                            <p>
                                &nbsp;Um ataque DDoS, ou ataque de negação de serviço distribuído, é uma tentativa
                                maliciosa de sobrecarregar um servidor, serviço ou rede com tráfego artificial,
                                tornando-o indisponível para usuários legítimos. Nem as grandes empresas tem total
                                controle disso.A sigla também pode vir acompanhada de mais um “D”: DDoS que, em inglês,
                                é a abreviação de Distributed Denial of Service ou ataque distribuído de negação de
                                serviço, em português. Quando um ataque de negação de serviço é distribuído, significa
                                que várias máquinas são utilizadas para fazer as requisições simultâneas.
                            </p>
                            <img src="../img/giphy.gif" alt="" class="mini-hat" width="350px">
                            <ul class="tabela">
                                <li>Ataque à <span class="gold">Amazon</span> Web Services em 2016, que derrubou sites
                                    como <span class="vermelho">Netflix</span> e Airbnb.</li>
                                <li>Ataque à Dyn em 2016, que afetou sites como <span class="azul">Twitter</span>, <span class="verde">Spotify</span> e <span class="laranja">Reddit</span>.</li>
                                <li>Ataque à <span class="azul">G</span><span class="vermelho">o</span><span class="amarelo">o</span><span class="azul">g</span><span class="verde">l</span><span class="vermelho">e</span> em 2020, que foi o maior
                                    ataque DDoS já registrado.</li>
                            </ul>
                        </div>
                        <div id="t2">
                            <h2><span class="azul">Ataques</span> de Phishing: Enganando para roubar.</h2>
                            <p>
                                &nbsp;Os criminosos criam emails ou mensagens que se parecem com mensagens legítimas de
                                empresas ou instituições conhecidas. Eles podem usar logos, cores e linguagem
                                semelhantes para enganar o usuário. Phishing é um tipo de ataque cibernético que tenta
                                enganar o usuário para que ele revele informações confidenciais, como senhas, dados
                                bancários ou informações pessoais. Os ataques de phishing são realizados através de
                                emails, mensagens de texto, links em sites ou redes sociais, e até mesmo através de
                                ligações telefônicas.Phishing (pronunciado: fishing) é um ataque que tenta roubar seu
                                dinheiro ou a sua identidade fazendo com que você revele informações pessoais, tais como
                                números de cartão de crédito, informações bancárias ou senhas em sites que fingem ser
                                legítimos.Phishing é um tipo de ciberataque que persuade as pessoas a tomar uma ação que
                                dá a um golpista acesso ao seu dispositivo. Foi escolhido devido à semelhança com outra
                                palavra do vocabulário inglês, fishing, que significa pescar.
                            </p>
                            <img src="../img/phishing.gif" alt="" width="200px" class="mini-hat">
                            <ul class="tabela">
                                <li>Ataque ao Gmail em 2017, que afetou milhões de usuários.</li>
                                <li>Ataque ao Microsoft Office 365 em 2019, que direcionava empresas.</li>
                                <li>Ataque à campanha presidencial dos EUA em 2020.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer id="rodape">
        <img src="../img/mario.gif" alt="" id="mario-corredor" width="50px">
        <div class="rodape" id="rodape">

            <p>&copy; 2024 - Todos os direitos reservados. </p>
            <p>
                &nbsp;Desenvolvido por <a href="#">Luan Henrique Garcia Tódero</a>
            </p>
            <div>
                <a href="https://github.com/LuanHenriqueGarcia" target="_blank"><img src="../img/github.png" alt="" width="55px" class="favicon-git"></a>
            </div>
        </div>

        <div> <img src="../img/pipe.png" alt="" width="60px" id="mario"></div>
    </footer>
    <script src="../js/change-theme.js"></script>
    <script src="https://kit.fontawesome.com/d66470ab17.js" crossorigin="anonymous"></script>


</body>

</html>