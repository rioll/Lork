<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Lork, n'hésitez pas à nous contacter pour toutes demandes d'informations ou de devis." name=
          "description">
    <meta content="Fargeaudou - Flamein - Picarony" name="author">
    <title>Lork - Contact
    </title>
    <link href='https://fonts.googleapis.com/css?family=Dosis|Signika' rel='stylesheet' type=
          'text/css'>
    <link href="bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
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
    <header class="header-sticky">
      <?php $page = 'contact'; require 'menu.php';?>
    </header>
    <section id="information-equipe">
      <div class="row pad3 text-center">
        <h1 class="bleu">Nous contacter
        </h1>
      </div>
      <div class="row">
        <div class="col-md-4 col-md-offset-2">
          <p class="orange right">Vous pouvez nous contacter pour toute demande de devis ou tout simplement si vous désirez avoir des informations complémentaires concernant LORK et ses services.</p>
          <p class="orange right">En fonction de votre demande vous serez orienté vers le membre de LORK le plus à même de vous répondre. Un unique interlocuteur sera attribué pour chaque projet
            afin de faciliter les échanges</p>
        <section id="contact-geo">
           <p class="text-center pad2 img-responsive">
               <img src="images/carte-contact.png" alt"carte_freelance">
           </p>
        </section>
                <p class="bleu right">Répartis dans plusieurs villes, nous pouvons ainsi facilement venir à
                 votre rencontre dans plusieurs départements et pays francophones.
                </p>
         </div>

         <div class="col-md-4">
          <p class="bleu">Téléphone : 06.29.61.84.72</p>
          <p class="bleu">Mail : lork.freelance@gmail.com</p>
          <p class="bleu">Facebook : <a href="https://www.facebook.com/LORK-1705174766410481/" target="blank">Lork</a>
          </br>
                <div class="container-fluid pad0">
            <form id="contactForm" name="contactForm" novalidate="">
              <div class="form-group wow bounceInDown animated">
                <input class="form-control"
                       data-validation-required-message="Nom, requis" id="name" placeholder="Nom *"
                       required="" type="text">
                <p class="help-block text-danger">
                </p>
              </div>
              <div class="form-group wow bounceInRight animated">
                <input class="form-control"
                       data-validation-required-message="Email, requis" id="email" placeholder="Email *" required="" type="email">
                <p class="help-block text-danger">
                </p>
              </div>
              <div class="form-group wow bounceInLeft animated">
                <input type="tel" class="form-control" placeholder="Téléphone *" id="phone" required data-validation-required-message="Votre numéro de téléphone s'il vous plaît">
                <p class="help-block text-danger">
                </p>
              </div>
              <div class="form-group wow bounceInUp animated">
                <textarea class="form-control"
                          data-validation-required-message="Un peu de texte svp" id="message"
                          placeholder="Message *" required=
                          "">
                </textarea>
                <p class="help-block text-danger">
                </p>
              </div>
              <div class="clearfix">
              </div>
              <div class="col-lg-12 text-center">
                <div id="success">
                </div>
                <button id="btn-contact" class="marg10" type="submit">Envoyer
                </button>
              </div>
            </form>
          </div>
           </div>
      </div>
    </section>

    <footer class="bg-gray">
      <?php require 'footer.php';?>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
    </script> 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js">
    </script> 
    <!--<script src="js/sticky.js"></script>-->
    <script src="js/jqBootstrapValidation.js">
    </script> 
    <script src="js/contact_me.js">
    </script> 
    <script src="js/appear.js">
    </script>
  </body>
</html>
