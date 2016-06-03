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

    <header id="header-accueil">
       <?php $page = 'contact'; require 'menu.php';?>
       <div id="slogan-accueil">
         <h1>LORK, nos projets sont les vôtres.</h1>
         <p>LORK, c'est un groupe de trois freelances passioné, qui mettent leurs compétences en commun pour réaliser tous vos projets de communication</p>
       </div>
    </header>

    <section id="information-accueil">
      <div class="row">
        <div class="col-md-4 col-sm-12">
        <h3>Qui sommes nous ?</h3>
          <p>
           blablablablablablablablablablablablablablablablablablablablablabla 
          </p>
        </div>
        <div class="col-md-4 col-sm-12">
        <h3>Qui faisons nous ?</h3>
          <p>
           blablablablablablablablablablablablablablablablablablablablablabla 
          </p>
        </div>
        <div class="col-md-4 col-sm-12">
        <h3>Notre philosophie ?</h3>
          <p>
           blablablablablablablablablablablablablablablablablablablablablabla 
          </p>
        </div>
      </div>
    </section>
    <section id="services-accueil">
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <a href="services.php"><img src="http://placehold.it/350x200"></a>
        </div>
        <div class="col-md-6 col-sm-12">
          <a href="services.php"><img src="http://placehold.it/350x200"></a>
        </div>
      </div>  
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <a href="services.php"><img src="http://placehold.it/350x200"></a>
        </div>
        <div class="col-md-6 col-sm-12">
          <a href="services.php"><img src="http://placehold.it/350x200"></a>
        </div>
      </div> 
      <div class="row">
        <p>LORK sait bien s'entourer, c'est pouquoi  il est aussi possible de répondre à vos besoins de production audiovisuelle.</p>
        <button>Faire une demande de devis</button>
      </div>
    </section>

    <footer>
       <?php require 'footer.php';?>
    </footer>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
     <!-- Contact Form JavaScript -->

   
  </body>
</html>