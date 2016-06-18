<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="utf-8">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="Lork vous propose différents services pour vous accompagner lors de la création de votre projet." name=
        "description">
        <meta content="Fargeaudou - Flamein - Picarony" name="author">
        <title>Lork - Services</title>
        <link href='https://fonts.googleapis.com/css?family=Dosis:400,600|Signika' rel='stylesheet'
        type='text/css'>
        <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="images/ico.png" rel="shortcut icon">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 
        elements and media queries -->
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
                <?php $page = 'services'; require 'menu.php';?>
        </header>
        <section id="information-services">
                <div class="row pad3">
                        <h1 class="bleu text-center">Nos services</h1>
                </div>
                <!--**************BRANDING************-->
                <div class="row pad2">
                        <div class="col-md-6 right wow bounceInRight animated"><img height="270" src="images/branding.jpg" width="430" alt"service-branding"></div>
                        <div class="col-md-4 wow bounceInLeft animated">
                                <h2 class="vert gras">Branding</h2>
                                <h3 class="orange">Charte graphique - Logo</h3>
                                <p class="body">Formés aux techniques de communication et de
                                marketing, notre équipe vous accompagnera dans la définition de
                                votre marque. Elle développera avec vous votre identité et saura
                                vous conseiller pour mettre en place une communication efficace et
                                adaptée à votre cible. Concevoir une identité visuelle et réussir à
                                traduire fidèlement la personnalité, les valeurs et l'histoire de
                                votre entreprise est au coeur de nos engagements.</p>
                        </div>
                </div>
                <!--**************GRAPHISME************-->
                <div class="row pad2">
                        <div class="col-md-4 col-md-offset-2 right wow bounceInRight animated">
                                <h2 class="vert gras">Graphisme</h2>
                                <h3 class="orange">Conception - Digital - Print</h3>
                                <p class="body">Notre graphiste prendra soin de dialoguer avec vous
                                afin de parvenir à un résultat à la fois personnalisé et
                                professionnel. Projet de site web, application mobile, de création
                                de logos ou encore d'affiches publicitaires. Nous accordons la même
                                attention à chacun er mettrons tout en oeuvre pour répondre à vos
                                exigences.</p>
                        </div>
                        <div class="col-md-6 wow bounceInLeft animated"><img height="270" src="images/graphisme.jpg" width="430" alt"service-graphisme"></div>
                </div>
                <!--**************DEV************-->
                <div class="row pad2">
                        <div class="col-md-6 right"><img height="270" src=
                        "images/programmation-web.jpg" width="430" alt="service-developpement"></div>
                        <div class="col-md-4">
                                <h2 class="vert gras">Développement</h2>
                                <h3 class="orange">Web - Mobile</h3>
                                <p class="body">Spécialiste du développement de sites web et
                                d'applications, notre développeur vous accompagne de la conception
                                au lancement de votre site internet. Site vitrine, e-commerce ou
                                même application mobile notre équipe saura vous accompagner et
                                définir avec vous un projet sur mesure en adéquation avec vos
                                besoins, objectifs et budget.</p>
                        </div>
                </div>
                <!--*************REFERENCEMENT************-->
                <div class="row pad2">
                        <div class="col-md-4 col-md-offset-2 right">
                                <h2 class="vert gras">Référencement</h2>
                                <h3 class="orange">SEO - Adwords</h3>
                                <p class="body">La présence sur les moteurs de recherche pouvant
                                conditionner la réussite d'un projet notre expert du référencement
                                identifiera avec vous vos besoins et la stratégie à adopter. Nous
                                rechercherons les mots clés à mettre en avant pour que votre site
                                puisse avoir la meilleure position possible. Le référencement est
                                le point final de tout projet mené à bien, et vous offre la visibilité que vous méritez.</p>
                                <p></p>
                        </div>
                        <div class="col-md-6"><img height="270" src="images/seo.jpg" width="430" alt="service-referencement"></div>
                </div>
                <div class="row pad2">
                        <div class="col-md-12 col-sm-12 text-center">
                                <p class="orange">Lork sait bien s'entourer, c'est pourquoi il est
                                aussi possible de répondre à vos besoins de production
                                audiovisuelle et 3D.</p>
                        </div>
                </div>
                <div class="row pad2">
                        <div class="col-md-12 col-sm-12 text-center pad2">
                                <a class="btn-devis" href="contact">Faire une demande de
                                devis</a>
                        </div>
                </div>
        </section>
        <footer class="bg-gray">
                <?php require 'footer.php';?>
        </footer><!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
        </script> 
        <!-- Include all compiled plugins (below), or include individual files as needed -->
         
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js">
        </script>
         <script src="js/appear.js">
        </script>
</body>
</html>