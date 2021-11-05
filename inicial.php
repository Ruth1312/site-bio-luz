<?php
//TESTE DE VALIDAÇÃO DO LOGIN
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="shortcut icon" type="image/x-icon" href="imagens/favicon.ico">

  <title>Embriologia</title>
</head>

<body>

  <div class="container">

    <nav class="navbar navbar-expand-lg navbar fixed-top navbar-dark bg-dark" id="navbar">

      <!-- Imagem e texto do navbar para ícone -->
      <nav class="navbar bg-dark">
        <a class="navbar-brand" href="#">
          <img src="imagens\maternidade.png" width="35" height="35" class="d-inline-block align-top" alt="">
          Bioluz
        </a>
      </nav>



      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="inicial.php">Embriologia<span class="sr-only">(current)</span></a>
          </li>


          <li class="nav-item active">

            <a class="nav-link" href="ondas.php">Como funcionam as ondas do Ultrassom?</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="previsaoparto.php">Previsão do Parto</a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="index.php">Sair da Conta</a>
          </li>
        </ul>
      </div>
    </nav>
    <br>
    <br>


    <div id="site">
      <div id="cabecalho">
        <div id="menu-principal">
          <img src="imagens\louca.jpg" class="img-fluid" alt="Responsive image">
          <br>
          <br>
          <!--Âncora-->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#embriologia" id="ancora">O que é embriologia?</a></li>
              <li class="breadcrumb-item"><a href="#humana" id="ancora">Embriologia humana</a></li>
              <li class="breadcrumb-item"><a href="#fecundacao" id="ancora">Fecundação</a></li>
              <li class="breadcrumb-item"><a href="#segmentacao" id="ancora">Segmentação ou Clivagem</a></li>
              <li class="breadcrumb-item"><a href="#blastulacao" id="ancora">Blastulação</a></li>
              <li class="breadcrumb-item"><a href="#gastrulacao" id="ancora">Gastrulação</a></li>
              <li class="breadcrumb-item"><a href="#folhetos" id="ancora">Folhetos Embrionários</a></li>
              <li class="breadcrumb-item"><a href="#neurulacao" id="ancora">Neurulação</a></li>
              <li class="breadcrumb-item"><a href="#organo" id="ancora">Organogênese</a></li>
              <li class="breadcrumb-item"><a href="#anexos" id="ancora">Anexos Embrionários</a></li>
            </ol>
          </nav>
          <!--Conteúdo principal da página-->
          <div id="titulo">

            <h3 id="embriologia">O que é Embriologia?</h3>
          </div>
          <br>

          <p>
            A Embriologia é uma área da biologia que estuda o desenvolvimento embrionário dos organismos vivos, ou seja,
            o processo de formação do embrião a partir de uma única célula, o zigoto, que originará um novo ser vivo.

          </p>
          <p>
            A Embriologia estuda todas as fases do desenvolvimento embrionário desde a fecundação, formação do zigoto
            até que todos os órgãos do novo ser estejam completamente formados. Também são consideradas as etapas
            anteriores à gestação do embrião, uma vez que influenciam no processo.
          </p>
          <p>
            O estudo da Embriologia se divide em dois: Embriologia humana e Embriologia animal. Abordaremos nesse site a
            Embriologia humana.
          </p>
          <div class="figure">
            <iframe width="500" height="350" src="https://www.youtube.com/embed/j0ckprzQnuw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <figcaption>Quer saber mais sobre Embriologia? Entenda como funciona.</figcaption>
          </div>
          <br>
          <div id="titulo">
            <h3 id="humana">Embriologia humana</h3>
          </div>
          <br>
          <p>
            A embriologia humana trata da gametogênese, ou seja, fertilização (união das células sexuais),
            desenvolvimento do embrião e da gravidez.

            Até estar completamente formado o embrião passa por diversas etapas: segmentação, blastulação, gastrulação,
            neurulação, e organogênese.
          </p>
          <div id="titulo">
            <h3 id="fecundacao">Fecundação</h3>
          </div>
          <br>
          <p>
            A Fecundação ou fertilização é o processo que ocorre quando os gametas masculinos e femininos encontram-se e
            o espermatozoide penetra o óvulo. Quando isto acontece, os nucléolos dessas células haploides (1n) fundem-se
            num só, formando a primeira célula diploide (2n) do novo ser vivo, o ovo ou zigoto.
            Ao penetrar o óvulo, o espermatozoide perde seu flagelo e passa a ser chamado pronúcleo masculino.
            A união dos pronúcleos masculinos e femininos chama-se cariogamia ou anfimixia (do grego amphi, dois, mixis,
            mistura).
          </p>
          <div class="figure">
            <img src="imagens\fecundacao.png" class="imgy" width="500" height="350" alt="Clivagem">
            <figcaption>Processo de Fecundação</figcaption>
          </div>
          <div id="titulo">
            <h3 id="segmentacao">Segmentação ou Clivagem</h3>
          </div>
          <br>

          <p>
            Segmentar significa dividir. Desse modo, a fase de segmentação, ou clivagem, refere-se às primeiras divisões
            celulares mitóticas pelas quais passa o zigoto.
          </p>
          <p>
            A clivagem normalmente ocorre enquanto o zigoto atravessa a tuba uterina, rumo ao útero. O zigoto ainda se
            encontra contido pela substância gelatinosa muito espessa, a zona pelúcida, deste modo, ocorre um aumento no
            número de células sem que aumente a massa citoplasmática.
          </p>
          <p>
            A divisão do zigoto em blastômeros começa cerca de 30 horas após a fertilização. Divisões subsequentes vão
            se seguindo e formam blastômeros progressivamente menores. Os blastômeros mudam de forma e se alinham,
            apertando-se uns contra os outros para formar uma esfera compacta de células conhecida como mórula. Este
            fenômeno, chamado de compactação, é provavelmente mediado por glicoproteínas de adesão da superfície
            celular.
          </p>
          <p>
            Observe a imagem abaixo que mostra como funciona a clivagem:
          </p>

          <div class="figure">
            <img src="imagens\clivagem.jpg" class="imgy" width="500" height="350" alt="Clivagem">
            <figcaption>Processo da Clivagem</figcaption>
          </div>
          <br>
          <div id="titulo">
            <h3 id="blastulacao">Blastulação</h3>
          </div>
          <br>
          <p>
            A blástulação é o estágio de desenvolvimento embrionário em que, após sucessivas clivagens, centenas de
            células
            da mórula reorganizam-se agregadas e formam uma espécie de bola, com uma cavidade central repleta de líquido
            que denomina-se blastocele. Essas células formam uma camada celular chamada blastoderme.
          </p>
          <p>
            A blástula sucede a mórula e antecede a gástrula. É, portanto, umas das primeiras fases de formação, antes
            que o embrião seja propriamente constituído.
          </p>
          <p>
            A implantação ocorre normalmente na parede posterior do corpo do útero, no espaço entre a abertura de
            glândulas do endométrio. Não é raro, porém, o blastocisto implantar-se em locais anormais, fora do corpo do
            útero. Em geral isso leva à morte do embrião, e a mãe sofre severa hemorragia durante o primeiro ou segundo
            mês de gestação.
          </p>

          <div class="figure">
            <img src="imagens\blastula.jpg" width="500" height="350" alt="blástula">
            <figcaption>Fases da Blastulação</figcaption>
          </div>
          <div id="titulo">
            <h3 id="gastrulacao">Gastrulação</h3>
          </div>
          <br>
          <p>
            Gastrulação é o nome do processo pelo qual ocorre uma invaginação nos tecidos do embrião, formando os
            folhetos embrionários. Em humanos, a gastrulação dá origem a um disco embrionário com três lâminas, ou três
            folhetos germinativos: endoderma, mesoderma e ectoderma, sendo caracterizados como triblásticos.
          </p>

          <div class="figure">
            <img src="imagens\gastrula.gif" width="500" height="350" alt="Grástula">
            <figcaption>Processo da Grástula</figcaption>
          </div>
          <div id="titulo">
            <h3 id="folhetos">Folhetos embrionários</h3>
          </div>
          <br>
          <h5><b>Endoderma</b></h5>
          <p>
            A endoderme ou endoderma é o folheto embrionário localizado mais internamente, formado durante o processo de
            gastrulação.

            Este folheto irá dar origem ao arquêntero (intestino primitivo), responsável pela formação do tubo digestivo
            que se comunica com o exterior através do blastóporo.
          </p>
          <h5><b>Mesoderma</b></h5>
          <p>
            A mesoderme ou mesoderma é um folheto embrionário formado durante a neurulação embrionária dos animais que
            possui três folhetos embrionários (chamados de triploblásticos). Localiza-se entre os outros dois folhetos,
            a endoderme e a ectoderme e, através de multiplicação e diferenciação celular, a mesoderme dá origem, por
            exemplo, ao esqueleto, músculos, sistema circulatório, excretor e reprodutor.
          </p>
          <h5><b>Ectoderma</b></h5>
          <p>
            A ectoderme ou ectoderma é um folheto embrionário exterior que reveste o embrião. Após ocorrer a
            fertilização, o ovo irá sofrer várias divisões mitóticas, e na fase de gastrulação, será gerado um embrião
            didérmico, que irá apresentar-se formado por duas camadas de células: a endoderme (interna) e a ectordeme
            (externa).
          </p>
          <p>
            Sua função não se limita a revestir o embrião. Este folheto dá origem a diversas estruturas como aos
            componentes do sistema nervoso. Na etapa final da gastrulação, começa a ser formada a placa neural, na parte
            dorsal da ectoderme havendo a formação da notocorda e do tubo neural. Em seguida, o tudo neural irá gerar os
            tecidos componentes do sistema nervoso através de divisão e diferenciação celular.
          </p>

          <div class="figure">
            <img src="imagens\folheto.jpg" width="500" height="350" alt="Folhetos">
            <figcaption>Folhetos Embrionários</figcaption>
          </div>
          <div id="titulo">
            <h3 id="neurulacao">Neurulação</h3>
          </div>
          <br>
          <p>
            Aos processos envolvidos na formação da placa neural, das pregas neurais e no fechamento delas para formar o
            tubo neural dá-se o nome de neurulação. Estes processos estão completados pelo fim da quarta semana, quando
            ocorre o fechamento do neurósporo caudal. Durante a neurulação, o embrião pode ser chamado de neurula.
          </p>

          <div class="figure">
            <img src="imagens\neurulacao.jpg" width="500" height="350" alt="Neurulação">
            <figcaption>Processos envolvidos na formação da placa neural</figcaption>
          </div>
          <div id="titulo">
            <h3 id="organo">Organogênese</h3>
          </div>
          <br>
          <p>
            A Organogênese é parte do processo de desenvolvimento embrionário no qual os três folhetos germinativos
            (ectoderme, mesoderme e endoderme) se diferenciam e dão origem aos órgãos internos do organismo.
            Durante a organogênese, ocorrem divisões e especializações celulares. Os três processos embrionários dão
            origem a órgãos e estruturas do corpo do embrião, além dos anexos embrionários (folhetos embrionários).
            Nessa perspectiva, é válido afirmar que:
          </p>
          <p>
            - A ectoderma origina a epiderme e seus anexos (pelos, unhas,etc.), outras três são: mucosas corpóreas
            (oral, anal e nasal), o esmalte dos dentes, o sistema nervoso (através do tubo neural), nos olhos (retina,
            cristalino e a córnea) a hipófise, entre outros;
          </p>
          <p>
            - A mesoderma, por sua vez, é dividida em epímero, mesômero e hipômero. O epímero forma o esqueleto axial, a
            derme (tecido conjuntivo) e o tecido muscular. O mesômero, rins, gônadas e ureteres. Por fim, o hipômero,
            que origina os músculos lisos e cardíacos, além de três serosas: pleura (reveste externamente o pulmão), o
            pericárdio (revestimento cardíaco) e peritônio (abdomem).
          </p>
          <p>
            - Já a endoderma é o processo do qual surgem os alvéolos pulmonares e as seguintes glândulas: fígado,
            tireóide, paratireóide; também é a básica formação do revestimento interno dos tratos digestório e
            respiratório.
          </p>

          <div class="figure">
            <img src="imagens\organo.jpg" width="500" height="350" alt="Organogênese">
            <figcaption> Processo de desenvolvimento embrionário </figcaption>
          </div>
          <div id="titulo">
            <h3 id="anexos">Anexos embrionários</h3>
          </div>
          <br>
          <p>
            Anexos embrionários são estruturas que derivam dos folhetos embrionários do embrião mas que não fazem parte
            do corpo desse embrião.

            Os anexos embrionários são: vesícula vitelina (saco vitelínico), âmnio (ou bolsa amniótica), cório e
            alantoide e placenta.
          </p>
          <h5><b>Vesícula vitelina</b></h5>
          <p>
            Apresenta aspecto de uma bolsa e surge da endoderma. A vesícula vitelina está ligada ao intesto do embrião.
            Sua função é: nutrir o embrião.
          </p>
          <h5><b>Alantoide</b></h5>
          <p>
            É uma bolsa que surge da endoderma, como a vesícula vitelina, está ligado ao intestino do embrião. Sua
            função é: armazenar excretas.
          </p>
          <h5><b>Âmnio</b></h5>
          <p>
            Tem o aspecto de uma bolsa e envolve todo o embrião. Surge da ectoderma e da mesoderma. Sua função é:
            garantir a hidratação e proteção do embrião.
          </p>
          <h5><b>Cório</b></h5>
          <p>
            Se localiza na parte exterior do embrião. Sua função é: garantir a respiração do embrião.
          </p>
          <h5><b>Placenta</b></h5>
          <p>
            É um órgão formado por associação entre tecidos embrionários. Sua função é: garantir a passagem de
            nutrientes da mãe para o feto, a troca gasosa (respiração) e a remoção das excretas.
          </p>

          <div class="figure">
            <img src="imagens\anexos.jpg" width="500" height="350" alt="Anexos embrionários">
            <figcaption> Imagem dos Anexos embrionários</figcaption>
          </div>

        </div>
        <!--Reservação de direitos autorais-->
        <center>

          <small id="copyright">
            &copy; Bootstrap. Todos os Direitos Reservados.
          </small>

        </center>
      </div>
    </div>

    <button onclick="topFunction()" id="myBtn" title="Ir ao topo">Topo</button>










    <script src="../js/script.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</body>

</html>