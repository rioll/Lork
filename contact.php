<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="utf-8">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="Lork, collectif freelance, web developpeur et web design" name=
        "description">
        <meta content="Fargeaudou - Flamein - Picarony" name="author">
        <title>Lork - Contact</title>
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
        <header class="header-sticky">
                <?php $page = 'contact'; require 'menu.php';?>
        </header>
        <section id="information-equipe">
                <div class="row pad3 text-center">
                        <h1 class="bleu">Nous contacter</h1>
                </div>
                <div class="container-fluid">
                        <div class="row pad2">
                                <div class="col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4">
                                        <form id="contactForm" name="contactForm" novalidate="">
                                                <div class="form-group wow bounceInUp animated">
                                                        <input class="form-control"
                                                        data-validation-required-message=
                                                        "Nom, requis" id="name" placeholder="Nom"
                                                        required="" type="text">
                                                        <p class="help-block text-danger"></p>
                                                </div>
                                                <div class="form-group wow bounceInRight animated">
                                                        <input class="form-control"
                                                        data-validation-required-message=
                                                        "Email, requis" id="email" placeholder=
                                                        "Email" required="" type="email">
                                                        <p class="help-block text-danger"></p>
                                                </div>
                                                <div class="form-group wow bounceInLeft animated">
                                                        <textarea class="form-control"
                                                        data-validation-required-message=
                                                        "Un peu de texte svp" id="message"
                                                        placeholder="Message" required=
                                                        ""></textarea>
                                                        <p class="help-block text-danger"></p>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-lg-12 text-center">
                                                        <div id="success"></div><button id=
                                                        "btn-contact" type=
                                                        "submit">Envoyer</button>
                                                </div>
                                        </form>
                                </div>
                        </div>
                </div>
        </section>
        <section id="contact-geo">
                <div class="row pad2 text-center">
                        <h2>Répartis dans plusieurs villes, nous pouvons ainsi facilement venir à
                        votre rencontre dans plusieurs départements et pays francophones.</h2>
                </div>
                <p class="text-center pad2"><img class="" src="images/carte-contact.png"></p>
        </section>
        <footer>
                <?php require 'footer.php';?>
        </footer><!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
        </script> 
        <!-- Include all compiled plugins (below), or include individual files as needed -->
         
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js">
        </script> <!--<script src="js/sticky.js"></script>-->
         
        <script src="js/jqBootstrapValidation.js">
        </script> 
        <script src="js/contact_me.js">
        </script> 
        <script src="js/appear.js">
        </script>
</body>
</html>