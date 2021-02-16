<?php
// HEADER
include('layout/header.php');
?>

<body>


    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>
        <!-- CONTEUDO INICIO -->
        <div class="main-content container-fluid">
            <p class="Texto"><strong> Módulo II: Fundamentos de acesso à informação, transparência e governança </strong>

            <div class="card">
                <div class="card-body">
                    <div class="aula"> 
                        <p class="Texto Azul"><strong>Curso:</strong> Elaboração de Projetos Sociais</p>
                        <p class="Texto Azul"><strong>Autoria:</strong> Ministério da Economia</p>
                        <p class="Texto Azul"><strong>Aula:</strong> 01 - Estudo da Viabilidade e a Elaboração de Projetos Sociais </p>
                    </div>
                </div>
            </div>

            <div class="aula">
                <h2 class="Azul"><i class="fas fa-folder"></i>Tópico 1 - Vantagens de atuar por meio de Projetos</h2>
                <hr class="hr4">
            </div>
            
            <div class="container">
                <p class="Texto">
                    As cidades, em nível de território, concentram as maiores demandas sociais, por serem as faixas de terra onde as pessoas vivem, trabalham, estudam, ou seja, constituem-se em seres sociais.
                </p>
                <p class="Texto">
                Nesse sentido, a máxima da estrutura social pode ser resumida da seguinte forma: onde há gente, há necessidade de oferta de serviços e infraestrutura públicos.
                </p>
                <p class="Texto">
                As responsabilidades constitucionais e legais e as distribuições de papéis no atendimento das demandas públicas são variadas. Certo é que União, Estados/Distrito Federal e Municípios somam“a maior fatia do bolo”, quando o assunto exige o desenvolvimento de estratégias para redução da estratificação social, fornecimento de infraestrutura urbana e rural de educação, lazer, segurança pública e saúde, além de outros serviços ou produtos de interesse público, essenciais no dia a dia da população em geral.
                </p>
                <p class="Texto">
                Nesse contexto aparece, a figura das ações sociais. Aqui, conceituaremos ação social como toda iniciativa voltada para a construção de uma vida mais digna aos habitantes de determinado lugar.
                </p>
                <p class="Texto">
                Para a implementação de uma ação social, precisamos seguir um roteiro: primeiro utilizamos técnicas de mapeamento de uma problemática social, para, em seguida, materializarmos uma possível solução para a questão. É aqui que entra a figura do Projeto Social.
                </p>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-info btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                <h3><i class="fas fa-question-circle" style="color:#286ce6"></i>Afinal, o que é um Projeto Social?</h3>
                            </button>
                        </h2>
                    </div>
                    <div id="collapse2" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                        O Projeto Social é importante ferramenta metodológica na busca pela implementação de políticas públicas. Mais especificamente, constitui-se planejamento racionalizado, com definição de ações que serão executadas, estimativa de custos e consecução em período previamente determinado, visando melhorar algum ou alguns aspecto(s) da sociedade.
                        </div>
                    </div>
                </div>
            </div>

            <center>
            <div class="btn-group" id="btn-group">
                <a href="Apresentacao.php" class="btn btn-primary">Página Anterior</a>
                <a href="#" class="btn btn-primary">Topo da Página</a>
                <a href="#" class="btn btn-primary">Proxima Página</a>
            </div>
            </center>
        </div>
        
        <!-- CONTEUDO FIM -->

    <!-- FOOTER -->
    <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->

    <?php include('layout/js.php') ?>

</body>

</html>
