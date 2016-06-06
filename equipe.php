<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="Lork, collectif freelance, web developpeur et web design" name="description">
    <meta content="Fargeaudou Sacha" name="author">
    <title>Accueil</title>

    <link href="bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
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

    <section id="information-accueil">
      <div class="row">
        <h1>Notre équipe</h1>
      </div>  
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <img src="images/emilien.png">
          <h3>Emilien</h3>
          <p>Réfèrenceur</p>
          <p>
           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <a href="" class="btn-vert">En savoir plus</a>
        </div>
        <div class="col-md-4 col-sm-12">
        <img src="images/Sacha.png">
          <h3>Sacha</h3>
          <p>Développeur</p>
          <p>
           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <a href="sachafargeaudou.fr" class="btn-vert">En savoir plus</a>
        </div>
        <div class="col-md-4 col-sm-12">
        <img src="images/achille.png">
          <h3>Achille</h3>
          <p>Graphiste</p>
          <p>
           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <a href="" class="btn-vert">En savoir plus</a>
        </div>
      </div>
    </section>
    <section id="services-accueil">
      <div class="row">
        <div class="col-md-6 col-sm-12 colonne-centree text-center">
          <h2>Nos services</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-sm-12 right">
          <a href="services.php"><img src="http://placehold.it/350x200"></a>
        </div>
        <div class="col-md-6 col-sm-12">
          <a href="services.php"><img src="http://placehold.it/350x200"></a>
        </div>
      </div>  
      <div class="row pad2">
        <div class="col-md-6 col-sm-12 right">
          <a href="services.php"><img src="http://placehold.it/350x200"></a>
        </div>
        <div class="col-md-6 col-sm-12 ">
          <a href="services.php"><img src="http://placehold.it/350x200"></a>
        </div>
      </div> 
      <div class="row">
          <div class="col-md-12 col-sm-12 text-center">
            <p class="orange">LORK sait bien s'entourer, c'est pouquoi  il est aussi possible de répondre à vos besoins de production audiovisuelle.</p>
          </div>
      </div>
      <div class="row">
          <div class="col-md-12 col-sm-12 text-center pad2">
            <a href="contact.php" class="btn-vert">Faire une demande de devis</a>
          </div>
      </div>

    </section>

    <footer>
       <?php require 'footer.php';?>
    </footer>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    
    <script src="js/sticky.js"></script>


   
  </body>
</html>