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
            <div class="page-title">
                
                <h2 class="font-bold Azul">
                    Apresentação
                </h2>

                <hr class="hr4">

                <img src="imagens/Imagem0.jpg" class="img-fluid" alt="Responsive image" id="img0">

                <hr>

                <p class="Texto">
                A Escola de Gestão Pública da Secretaria de Planejamento e Gestão do Governo do Estado do Ceará e o Ministério da Economia apresentam o curso de Elaboração de Projetos Sociais.
                </p>
                <p class="Texto">
                O Brasil possui 5.570 municípios com processos de ocupação,infraestrutura urbana, concentração de renda e demandas sociais distintos,todavia, uma realidade une esse quantitativo continental de cidades: todaspossuem recursos limitados para o atendimento das necessidades sociaisdiversas da pluralidade de seus habitantes.
                </p>
                <p class="Texto">
                Entre as diversas possibilidades de enfrentamento das questões urbanas erurais, os projetos sociais são importantes ferramentas de transformação social, na busca por melhoria de qualidade de vida das pessoas e comunidades.
                </p>
                <p class="Texto">
                Este curso destina-se a orientar a elaboração de projetos sociais, guiando seu leitor por suas etapas iniciais, as quais passam pela avaliação de viabilidade, elaboração do projeto propriamente dito, por fim adentrar em algumas das mais importantes possibilidades de captação de recursos para o custeio da proposta.
                </p>

                <hr>

                <h2 class="font-bold Azul">
                    Objetivo
                </h2>

                <hr class="hr4">

                <p class="Texto">
                <i class="fas fa-bullseye" style="color:#286ce6"></i>
                Levantar informações necessárias e conhecer o roteiro de elaboração deprojetos sociais que atendam de forma efetiva às necessidades do cidadão.
                </p>

            </div>

            <center>
            <div class="btn-group" id="btn-group">
                <a href="#" class="btn btn-primary">Topo da Página</a>
                <a href="Topico1.php" class="btn btn-primary">Proxima Página</a>
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