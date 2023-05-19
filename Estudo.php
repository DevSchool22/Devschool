<?php
    // Define o título da página atual
    $pageTitle = "Pagina Iniial";
    include 'header.php';
    include 'navbar.php';
?>
<body>
    <!-- CONTEUDO  -->
    <div class="row">
        <div class="col-md-8 order-md-1 col-12 order-2">
            <div class="d-flex flex-column">
                <div class="d-flex justify-content-between align-items-baseline flex-wrap flex-md-nowrap gap-2">
                    <div class="d-flex flex-wrap align-items-baseline">
                        <h1 data-cy="curriculum-header" class="h2 mb-0 mr-2"> Planos de estudo </h1><!---->
                    </div><!----><a href="/study-plan/history" class="btn text-black p-0 btn-link"
                        click-event-part="curriculum" click-event-target="history" click-event-route="/study-plan"
                        target="_self" data-component-name="BLink"><svg viewBox="0 0 16 16" width="1em" height="1em"
                            focusable="false" role="img" aria-label="clock history" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" class="bi-clock-history mr-1 b-icon bi">
                            <g transform="translate(8 8) scale(0.8 0.8) translate(-8 -8)">
                                <path
                                    d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z">
                                </path>
                                <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"></path>
                                <path
                                    d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z">
                                </path>
                            </g>
                        </svg><span>Historico</span></a>
                </div> <br>
            </div>

            <div class="container">

                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body" id="minha-div" data-toggle="collapse"
                                data-target="#atividades-basicas">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3>Curso de Programação Web Básico</h3>
                                        <p>Comece aprendendo em HTML, CSS e JavaScript.</p>
                                    </div>
                                    <div class="col-sm-6" style="text-align: right;">
                                        <img id="minha-imagem" src="icons/caret-right-fill.svg" alt="Minha Imagem">
                                    </div>
                                </div>
                            </div>

                            <script>
                                const minhaDiv = document.querySelector("#minha-div");
                                const minhaImagem = document.querySelector("#minha-imagem");
                                let imagemAtual = 1;

                                minhaDiv.addEventListener("click", function () {
                                    if (imagemAtual === 1) {
                                        minhaImagem.setAttribute("src", "icons/caret-down-fill.svg");
                                        imagemAtual = 2;
                                    } else {
                                        minhaImagem.setAttribute("src", "icons/caret-right-fill.svg");
                                        imagemAtual = 1;
                                    }
                                });
                            </script>

                            <div id="atividades-basicas" class="collapse">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        Aula 1 - HTML Básico
                                        <a href="aulas/basicos/teoriaHtml.php">
                                            <button type="button" class="btn btn-primary float-right">Iniciar </button>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        Aula 2 - CSS Básico
                                        <button type="button"
                                            class="btn btn-primary float-right disabled">Iniciar</button>
                                    </li>
                                    <li class="list-group-item">
                                        Aula 3 - JavaScript Básico
                                        <button type="button"
                                            class="btn btn-primary float-right disabled">Iniciar</button>
                                    </li>
                                    <li class="list-group-item">
                                        Projeto Final - Desenvolvimento de uma calculadora Web.
                                        <button type="button"
                                            class="btn btn-primary float-right disabled">Iniciar</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="card">
                            <div id="minha-div2" class="card-body" data-toggle="collapse"
                                data-target="#atividades-intermediarias">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3>Curso de Programação Web Intermediário</h3>
                                        <p>Expanda seus conhecimentos em HTML, CSS e JavaScript.</p>
                                    </div>
                                    <div class="col-sm-6" style="text-align: right;">
                                        <img id="minha-imagem2" src="icons/caret-right-fill.svg" alt="Minha Imagem">
                                    </div>
                                </div>
                            </div>

                            <script>
                                const minhaDiv2 = document.querySelector("#minha-div2");
                                const minhaImagem2 = document.querySelector("#minha-imagem2");
                                let imagemAtual2 = 1;

                                minhaDiv2.addEventListener("click", function () {
                                    if (imagemAtual2 === 1) {
                                        minhaImagem2.setAttribute("src", "icons/caret-down-fill.svg");
                                        imagemAtual2 = 2;
                                    } else {
                                        minhaImagem2.setAttribute("src", "icons/caret-right-fill.svg");
                                        imagemAtual2 = 1;
                                    }
                                });
                            </script>
                            <div id="atividades-intermediarias" class="collapse">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        Aula 1 - HTML Avançado
                                        <button type="button" class="btn btn-primary float-right">Iniciar</button>
                                    </li>
                                    <li class="list-group-item">
                                        Aula 2 - CSS Avançado
                                        <button type="button"
                                            class="btn btn-primary float-right disabled">Iniciar</button>
                                    </li>
                                    <li class="list-group-item">
                                        Aula 3 - JavaScript Avançado
                                        <button type="button"
                                            class="btn btn-primary float-right disabled">Iniciar</button>
                                    </li>
                                    <li class="list-group-item">
                                        Projeto Final - Desenvolvimento de um site responsivo
                                        <button type="button"
                                            class="btn btn-primary float-right disabled">Iniciar</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4 ">
                    <div class="col-md-12">
                        <div class="card">
                            <div id="minha-div3" class="card-body " data-toggle="collapse"
                                data-target="#atividades-avancadas">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3>Curso de Programação Web Avançado</h3>
                                        <p>Aprenda a usar o Firebase e o PHP para criar aplicações web dinâmicas.</p>
                                    </div>
                                    <div class="col-sm-6" style="text-align: right;">
                                        <img id="minha-imagem3" src="icons/caret-right-fill.svg" alt="Minha Imagem">
                                    </div>
                                </div>
                            </div>

                            <script>
                                const minhaDiv3 = document.querySelector("#minha-div3");
                                const minhaImagem3 = document.querySelector("#minha-imagem3");
                                let imagemAtual3 = 1;

                                minhaDiv3.addEventListener("click", function () {
                                    if (imagemAtual3 === 1) {
                                        minhaImagem3.setAttribute("src", "icons/caret-down-fill.svg");
                                        imagemAtual3 = 2;
                                    } else {
                                        minhaImagem3.setAttribute("src", "icons/caret-right-fill.svg");
                                        imagemAtual3 = 1;
                                    }
                                });
                            </script>
                            <div id="atividades-avancadas" class="collapse">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        Aula 1 - Introdução ao Firebase
                                        <button type="button" class="btn btn-primary float-right">Iniciar</button>
                                    </li>
                                    <li class="list-group-item">
                                        Aula 2 - Firebase Authentication
                                        <button type="button"
                                            class="btn btn-primary float-right disabled">Iniciar</button>
                                    </li>
                                    <li class="list-group-item">
                                        Aula 3 - Firebase Realtime Database
                                        <button type="button"
                                            class="btn btn-primary float-right disabled">Iniciar</button>
                                    </li>
                                    <li class="list-group-item">
                                        Aula 4 - Introdução ao PHP
                                        <button type="button"
                                            class="btn btn-primary float-right disabled">Iniciar</button>
                                    </li>
                                    <li class="list-group-item">
                                        Aula 5 - PHP com MySQL
                                        <button type="button"
                                            class="btn btn-primary float-right disabled">Iniciar</button>
                                    </li>
                                    <li class="list-group-item">
                                        Projeto Final - Desenvolvimento de uma rede social

                                        <button type="button"
                                            class="btn btn-primary float-right disabled">Iniciar</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                // seleciona todos os botões das aulas
                const botoesAula = document.querySelectorAll('ul.list-group button');

                // adiciona um evento de clique em cada botão
                botoesAula.forEach((botao, indice) => {
                    botao.addEventListener('click', () => {
                        // verifica se a aula atual é a primeira
                        if (indice === 0) {
                            // habilita o botão da próxima aula
                            botoesAula[1].classList.remove('disabled');
                        } else {
                            // verifica se a aula anterior já foi concluída
                            if (!botoesAula[indice - 1].classList.contains('disabled')) {
                                // habilita o botão da próxima aula
                                if (indice < botoesAula.length - 1) {
                                    botoesAula[indice + 1].classList.remove('disabled');
                                }
                            }
                        }
                    });
                });

            </script>

            <script src="js/jquery.min.js"></script>
            <script src="js/popper.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/main.js"></script>

        </div>

    </div>

</div>
</div>
              </body>