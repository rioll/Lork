<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="Lork, collectif freelance, web developpeur et web design" name="description">
        <meta content="Fargeaudou - Flamein - Picarony" name="author">
    <title>Lork - Equipe</title>

    <link href='https://fonts.googleapis.com/css?family=Dosis|Signika' rel='stylesheet' type='text/css'>
    <link href="bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">

    <link href="css/main.css" rel="stylesheet">

    <link href="images/ico.png" rel="shortcut icon">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <header class="header-sticky">
       <?php $page = 'equipe'; require 'menu.php';?>
    </header>

    <section id="information-equipe">

      <div class="row pad3 text-center">
        <h1 class="bleu">Notre équipe</h1>
      </div>  
      <div class="row pad2 text-center">
        <div class="col-md-4 col-sm-12 air">
          <img src="images/emilien.jpg" class="roundedO ">
          <h3 class="orange">Emilien</h3>
          <p class="text-vingt">Référenceur</p>
          <p class="pad2 wow bounceInUp animated text-dix quiquequoi">
       Venant du Nord, Emilien pourra optimiser votre site web afin d'acquérir la meilleure position sur les moteurs de recherche. 
       Il vous accompagnera et conseillera afin d'obtenir un site optimisé, et vous permettra de visualiser en temps réel le traffic que génère votre dispotif.
       Sa double compétence en intégration web lui permettra de vous accompagner sur tout type de projets allant de la créations de sites vitrine, au site e-commerce ...
          </p>
          <a href="http://lork.fr/emilien-flamein" class="btn-orange-light" target="blank">En voir plus</a>
        </div>
        <div class="col-md-4 col-sm-12 air">
        <img src="images/Sacha.jpg" class="roundedV" >
          <h3 class="vert">Sacha</h3>
          <p class="text-vingt">Développeur</p>
          <p class="pad2 wow bounceInUp animated text-dix quiquequoi">
           Habitant de l'Ain, son objectif est de vous proposer un code simple, fonctionnel et maintenable dans le temps. Il saura vous guider pour définir au mieux vos besoins et contraintes techniques pour vos projets. En effet sa double compétence en développement et en design, lui permet de comprendre les enjeux d'un site attrayant, tant sur le plan esthétique que technique.
          </p>
          <a href="http://sachafargeaudou.fr" class="btn-vert-light" target="blank">En voir plus</a>
        </div>
        <div class="col-md-4 col-sm-12 air">
        <img src="images/achille.jpg" class="roundedB ">
          <h3 class="bleu">Achille</h3>
          <p class="text-vingt">Graphiste</p>
          <p class="pad2 wow bounceInUp animated text-dix quiquequoi">
            Originaire de Corrèze, Achille est en charge de la partie graphisme et vous accompagnera dans
la création d’une identité visuelle qui corresponde à votre image. Son objectif est de parvenir à retranscrire
 au mieux votre message et votre identité et ses compétences en design lui permettront de vous proposer
des solutions esthétiques et ergonomiques sur vos projets print, web et mobile.
          </p>
          <a href="http://achillepicarony.ultra-book.com" class="btn-bleu-light" target="blank">En voir plus</a>
        </div>
      </div>
      <div class="row pad2">
          <div class="col-md-12 col-sm-12 text-center air">
            <p class="orange text-sept">Pour toute demande de devis ou d'informations complémentaire, n'hésitez pas à nous contacter.</p>
          </div>
          <div class="col-md-12 col-sm-12 text-center pad2">
            <a href="contact.php" class="btn-devis">Faire une demande de devis</a>
          </div>
      </div>
    </section>

    <footer  class="bg-gray">
       <?php require 'footer.php';?>
    </footer>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/appear.js"></script>


   
  </body>
</html>