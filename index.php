<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="Lork est un collectif freelance pour vous aider à la création de votre projet, alliant developpeur, referenceur et web designer" name="description">
        <meta content="Fargeaudou - Flamein - Picarony" name="author">
    <title>Lork - Freelance</title>
    <link href='https://fonts.googleapis.com/css?family=Dosis:400,600|Signika' rel='stylesheet' type='text/css'>
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
        <script src="js/modernizr.custom.97074.js"></script>

    <link href="images/ico.png" rel="shortcut icon">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include_once("curieux.php") ?>
    <?php include_once("analyticstracking.php") ?>
    <header id="header-accueil">
       <?php $page = 'index'; require 'menu.php';?>
       <div id="slogan-accueil">
         <h1 class="gris">Vos projets sont les nôtres.</h1>
         <h2 class="white text-vingt">LORK, c'est un groupe de trois freelances passionés, qui mettent leurs compétences en commun pour réaliser tous vos projets de communication</h2>

       </div>
    </header>

    <section id="information-accueil">
      <div class="row info">
        <div class="col-md-4 col-sm-12 air">
        <h3 class="vert">Qui sommes nous ?</h3>
          <p class="quiquequoi air">
          LORK est féroce, LORK est un peu geek mais LORK est surtout motivé !
Natifs de trois régions différentes nous nous sommes rencontrés sur les bancs de l’université. Après avoir obtenu notre diplôme nous avons pris la décision de nous lancer dans l’aventure. Habitués à travailler ensemble nous faisons tout pour réaliser vos projets de communication. Pour cela nous avons créé LORK qui est pour nous l’occasion de promouvoir notre activité et de mettre en commun des compétences complémentaires.
          </p>
                      <a href="equipe.php" class="btn-orange-light">En savoir plus</a>

        </div>
        <div class="col-md-4 col-sm-12 air">
        <h3 class="vert">Que faisons nous ?</h3>
          <p class="quiquequoi air">
         Nous vous proposons de développer votre communication de la façon la plus en phase avec votre identité. Nous basons notre approche sur l’écoute et la collaboration afin de
coller au mieux avec vos attentes tout en apportant notre savoir faire et notre expertise.  Nos compétences vont du branding avec la création d’identité de marque, au développement de site web et d’application en passant par le graphisme avec la création de logo, d’affiche ou encore de bannières publicitaires.
          </p>
                      <a href="projet.php" class="btn-orange-light">En savoir plus</a>

        </div>
        <div class="col-md-4 col-sm-12 air">
        <h3 class="vert">Notre philosophie ?</h3>
          <p class="quiquequoi air">
          Basée sur l’écoute, notre approche place chacun de nos clients au centre des projets
sur lesquels nous travaillons. Notre approche stratégique vise l’adhésion de votre public et la réalisation de vos objectifs dans le respect de vos valeurs. Chez LORK, chaque projet est géré par un interlocuteur unique qui fera tout pour faciliter les échanges et vous procurer la satisfaction d’une communication réussie.
          </p>
                      <a href="services.php" class="btn-orange-light">En savoir plus</a>

        </div>
      </div>
    </section>
    <section id="services-accueil" class="air">
      <div class="row pad3">
        <div class="col-md-6 col-sm-12 colonne-centree text-center">
          <h2>Nos services</h2>
        </div>
      </div>
      
      <div class="row">
        <ul id="da-thumbs" class="da-thumbs">
          <li class="img-responsive">
            <a href="services.php">
                <img src="images/branding.jpg" width="430" height="270" alt="branding" >
                <div>
                <span><b class="vert">BRANDING</b> </br>Nom - Slogan - Charte Graphique</span>
                </div>
            </a>
          </li>
           <li  class="img-responsive">
            <a href="services.php">
                <img src="images/graphisme.jpg" width="430" height="270" alt="graphisme">
                <div>
                  <span><b class="vert">GRAPHISME</b> </br>Conception - Digital - Print</span>
                </div>
            </a>
          </li>
           <li class="img-responsive"> 
            <a href="services.php">
                <img src="images/programmation-web.jpg" width="430" height="270" alt="programmation" >
                <div>
                  <span><b class="vert">PROGRAMMATION</b> </br>Web - Mobile</span>
                </div>
            </a>
          </li>
           <li  class="img-responsive">
            <a href="services.php">
                <img src="images/seo.jpg" width="430" height="270" alt="referencement">
                <div>
                 <span><b class="vert">REFERENCEMENT</b> </br>Naturel - Adwords</span>
                </div>
            </a>
          </li>
        </ul>
        </div>
      <div class="row pad3">
          <div class="col-md-12 col-sm-12 text-center">
            <p class="orange text-vingt">LORK sait bien s'entourer, c'est pourquoi  il est aussi possible de répondre à vos besoins de production audiovisuelle et 3D</p>
          </div>
      </div>
      <div class="row padb5 ">
          <div class="col-md-12 col-sm-12 text-center">
            <a href="contact" class="btn-devis">Faire une demande de devis</a>
          </div>
      </div>

    </section>

    <footer class="bg-white">
       <?php require 'footer.php';?>
    </footer>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.hoverdir.js"></script>  

    <script type="text/javascript">
      $(function() {
      
        $(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

      });
    </script>
   
  </body>
</html>