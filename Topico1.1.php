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
            <div class="aula">
                <h2 class="Azul">1.1 Identificar o problema</h2>
                <hr class="hr4">
            </div>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="Texto">
                        A identificação do problema constitui, talvez, o exercício mais complexo da elaboração dada a quantidade de variáveis inter-relacionadas que influenciam seu contexto. Sua definição clara e precisa é o primeiro requisito para alcançar o objetivo desejado.
                        </p>

                        <div class="alert alert-azul" role="alert">
                            <p class="Texto" style="color:white"><i class="fas fa-puzzle-piece" style="color:white"></i> Observe as imagens a seguir
                            </p>
                        </div>

                        <div class="text-center">
                            <img src="imagens/Imagem1.jpg" class="img-fluid" alt="Responsive image">
                        </div>
                        <div class="text-center">
                            <p class="TituloFigura"><strong>Imagem 1:</strong> Autor: Desconhecido</p>
                            <p class="FonteFigura"><strong>Fonte:</strong> Pixabay</p>
                        </div>

                        <div class="text-center">
                            <img src="imagens/Imagem2.jpg" class="img-fluid" alt="Responsive image">
                        </div>
                        <div class="text-center">
                            <p class="TituloFigura"><strong>Imagem 2:</strong> Autor: Desconhecido</p>
                            <p class="FonteFigura"><strong>Fonte:</strong> Pixabay</p>
                        </div>
                    </div>
                </div>
                

                <div class="row">
                    <div class="col">
                        <p class="Texto">
                            <strong>
                                Que tal resumir em uma palavra o que cada uma das imagens lhe suscitou?
                            </strong>
                        </p>
                        <p class="Texto">
                            Aqui são particularmente relevantes os conceitos de problema e de necessidade, que determinam os objetivos do projeto e que permitem estabelecer ordenadamente os meios e as alternativas para satisfazer tais necessidades.
                        </p>
                        <p class="Texto">
                        Para identificar o problema, temos que recolher e analisar toda a informação disponível. Devemos combinar os dados que permitem identificar a situação em que se encontram os beneficiários nas áreas definidas como prioritárias dentro da política social, com a percepção que tem essa população sobre suas próprias necessidades e a importância relativa dada a cada uma delas.
                        </p>

                        <div>
                            <p class="SubSubTitulo" style="color:#17a2b8">
                                <i class="fas fa-exclamation-triangle" style="color:#17a2b8"></i> Importante
                            </p>
                            <p class="Texto">
                            Nessa fase, é recomendável efetuar uma detalhada observação da realidade e obter a maior quantidade possível de dados antecedentes. O ideal é dispor de um estudo de base da população a ser beneficiada, no qual cada entrevistado associe uma pontuação, segundo a importância atribuída a cada um dos problemas destacados pela mesma população. 
                            </p>
                        </div>

                        <p class="Texto">
                        Nesse sentido, um procedimento adequado é realizar um censo que inclua uma pergunta de qualificação de importância, a fim de que cada pessoa associe uma pontuação a cada problema tratado, em uma escala, por exemplo, de 1 a 5 pontos. Se não se dispomos de um estudo de base, é possível trabalhar com dados secundários, revisão bibliográfica, consultas a especialistas e informaçõeschave, entre outros.
                        </p>
                        <p class="Texto">
                        O processo de definição do problema deve responder às seguintes perguntas:
                        </p>

                        <p class="Texto">
                            <i class="fas fa-angle-right" style="color:#17a2b8"></i> Existe um problema?
                        </p>
                        <p class="Texto">
                            <i class="fas fa-angle-right" style="color:#17a2b8"></i> Qual é o problema?
                        </p>
                        <p class="Texto">
                            <i class="fas fa-angle-right" style="color:#17a2b8"></i> Quais são os elementos essenciais do problema?
                        </p>
                        <p class="Texto">
                            <i class="fas fa-angle-right" style="color:#17a2b8"></i> Quem está(ão) afetado(s) pelo problema? Ou seja, quais são os beneficiários?
                        </p>
                        <p class="Texto">
                            <i class="fas fa-angle-right" style="color:#17a2b8"></i> Qual é a magnitude atual do problema e suas consequências?
                        </p>
                        <p class="Texto">
                            <i class="fas fa-angle-right" style="color:#17a2b8"></i> Conta-se com toda a informação relevante acerca do problema para realizar um estudo acabado?
                        </p>
                        <p class="Texto">
                            <i class="fas fa-angle-right" style="color:#17a2b8"></i> Dispõe-se de uma visão clara e definida do meio geográfico, econômico e social do problema?

                        </p>
                        <p class="Texto">
                            <i class="fas fa-angle-right" style="color:#17a2b8"></i> Quais são as principais dificuldades para resolução do problema?
                        </p>

                        <p class="Texto">
                        Uma das muitas técnicas que permite sistematizar de maneira ágil e ordenada a informação coletada é a Árvore de Problemas (causas e efeitos). Vejamos um exemplo.
                        </p>
                    </div>
                </div>
            </div>

            


            <center>
                <div class="btn-group" id="btn-group">
                    <a href="Topico1.php" class="btn btn-primary">Página Anterior</a>
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