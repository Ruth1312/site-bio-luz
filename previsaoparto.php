<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css\stylesheet.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="imagens/favicon-previsao.ico">

    <title>Previsao do parto</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar fixed-top navbar-dark bg-dark" id="navbar">
            <!-- menu com imagem e texto -->
            <nav class="navbar bg-dark">
                <a class="navbar-brand" href="#">
                    <img src="imagens\maternidade.png" width="35" height="35" class="d-inline-block align-top" alt="">
                    Bioluz
                </a>
            </nav> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="inicial.php">Embriologia<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="ondas.php">Como funcionam as ondas do Ultrassom?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="previsaoparto.php">Previsão do parto</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Sair da Conta</a>
                    </li>

                </ul>
            </div>
        </nav>
        <br>
        <br>
        <br>

        <!-- conteudo da página -->
        <div id="conteudo-principal">
            <h1 id="titulo">Saiba como funciona a previsão de parto e calcule agora a previsão do parto do seu bebê</h1>
            <br>
        </div>
        <img src="imagens\gestante.jpg" class="img-fluid" alt="Responsive image">
        <br>
        <div id="titulo">
            <h3>Como funciona o cálculo da previsão do parto?</h3>
        </div>
        <br>
        <p>
            Para calcular a data prevista para o parto basta saber a data do 1º dia do último ciclo menstrual e
            acrescentar 7 dias e nove meses. Sendo assim caso a data da última menstruação tenha sido, por exemplo,
            no dia 12 se Setembro, o bebê deve nascer no dia 19 de Junho.
        </p>
        <p>
            A conta para calcular a data prevista para o parto é feita simplesmente diminuindo 3 meses da data da
            última menstruação e depois somando 7 dias.
        </p>
        <p>
            Medir a altura uterina com a mulher deitada numa maca, também pode indicar a data provável do parto, mas
            uma outra forma, mais segura de saber quando o bebê deve nascer é através da ultrassonografia realizada
            durante o pré-natal.
        </p>
        <div id="titulo">
            <h3>Como saber a data de previsão de parto pelo ULTRASSOM?</h3>
        </div>
        <br>
        <p>
            Durante o exame de <a href="ondas.html" id="link">ultrassom</a> o obstetra pode indicar a data prevista
            para o parto corrigida, que se
            refere à idade gestacional exata, que normalmente é de 1 à 2 semanas depois do dia encontrado pela data
            da última menstruação, porque afinal, a mulher estava menstruada e certamente não estava grávida nesses
            dias.
        </p>
        <p>
            O médico pode saber a idade gestacional do bebê ao observar certos parâmetros do seu crescimento, porque
            existe uma tabela que serve para indicar quais as características e quais tamanhos o bebê deve
            apresentar em cada semana de gestação.
        </p>
        <div class="figure">
            <img src="imagens\previsaoultra.jpg" class="imgy" width="500" height="350" alt="Clivagem">
            <figcaption>Demonstração de como é feita a ultrassonografia</figcaption>
        </div>
        <p>
            Essa é a data mais certa para calcular o dia do nascimento do bebê, mas quando a mulher opta pelo parto
            normal, essa data pode variar um pouco, porque quem decide o momento do nascimento é o próprio bebê.
            Assim, a data serve apenas de parâmetro, porque o bebê pode nascer a partir das 37 semanas, e não ser
            considerado pré-maturo, e até as 41 semanas de gestação, sem nenhum problema.
        </p>
        <div id="titulo">
            <h3>O cálculo de previsão é seguro?</h3>
        </div>
        <br>
        <p>
            Para responder a essas perguntas, primeiro é preciso entender o tempo de uma gestação normal. De acordo
            com a Organização Mundial de Saúde, a data provável do parto (DPP) é calculada para 40 semanas após o
            primeiro dia da última menstruação. Um bebê que nasce antes de 37 semanas é considerado prematuro e,
            após a 42a, pós-termo. Nos dois casos, os riscos de complicações aumentam muito. Mas, a partir da 40ª
            semana e um dia, os cuidados e o acompanhamento médico devem ser redobrados.
        </p>
        <p>
            Enfim, o cálculo em si não é 100% seguro, entretando, é bom para ter uma noção básica de quando seu
            filho poderá nascer, mas levando em conta que a ultrassonografia é mais segura e confiável.
        </p>
    </div>
    <!--
    <center>
        <div class="alert alert-success" id="cor" role="alert">

            <h4 class="alert-heading">Você está grávida?</h4>
            <p id="alerta">Se sim, quer saber quando o seu bebê poderá nascer?!</p>
            <hr>
            <p class="mb-0" id="alerta"> Se a resposta também for sim, faça o teste abaixo
                e boa sorte! :)</p>
        </div>
    </center>-->


    <!-- calculadora de parto-->
    <!-- <center>
        <form name="calculo">
            <h3 class="mod-title">1º Passo</h3>
            <p class="mod-desc">Qual foi o primeiro dia da sua menstruação?</p>
            <div class="col-4">
                <select class="custom-select">
                    <option selected>Selecione o dia</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
            </div>
            <br>
            <div class="col-4">
                <select class="custom-select">
                    <option selected>Selecione o mês</option>
                    <option value="1">Janeiro</option>
                    <option value="2">Fevereiro</option>
                    <option value="3">Março</option>
                    <option value="4">Abril</option>
                    <option value="5">Maio</option>
                    <option value="6">Junho</option>
                    <option value="7">Julho</option>
                    <option value="8">Agosto</option>
                    <option value="9">Setembro</option>
                    <option value="10">Outubro</option>
                    <option value="11">Novembro</option>
                    <option value="12">Dezembro</option>
                </select>
            </div>
            <br>
            <div class="col-4 col-offset">
                <select class="custom-select">
                    <option selected>Selecione o ano</option>
                    <option value="2020">2021</option>

                </select>
            </div>
            <br>
            <div>
                <input onsubmit="calcular()" type="button" class="btn btn-outline-dark" value="Calcular">

            </div>
        </form>


        </section>-->
    </center>
    <!--Reservação de direitos autorais-->
    <center>

        <small id=" copyright">
            &copy; Bootstrap. Todos os Direitos Reservados.
        </small>

    </center>

    <button onclick="topFunction()" id="myBtn" title="Ir ao topo">Topo</button>



    <script type="text/javascript" src="../js/script.js"></script>
    <script type="text/javascript" src="../js/calcular.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>