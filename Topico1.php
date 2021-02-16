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
