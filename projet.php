<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="Lork, collectif freelance, web developpeur et web design" name="description">
        <meta content="Fargeaudou - Flamein - Picarony" name="author">
    <title>Lork - Projets</title>
    <link href='https://fonts.googleapis.com/css?family=Dosis|Signika' rel='stylesheet' type='text/css'>
    <link href="bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

  <link rel="stylesheet" href="css/layout.css">

    <link href="css/main.css" rel="stylesheet">

    <link href="images/ico.png" rel="shortcut icon">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <header class="header-sticky">
       <?php $page = 'projet'; require 'menu.php';?>
    </header>

   
    <section id="information-projets">
      <div class="row pad3 ">
        <h1 class="bleu text-center">Nos projets</h1>
      </div> 

    <div class="container">

      <ul id="filters" class="clearfix">
        <li><span class="filter active" data-filter=".app, .divers, .logoo, .web">Tous</span></li>
        <li><span class="filter" data-filter=".app">Application</span></li>
         <li><span class="filter" data-filter=".logoo">Logo</span></li>
        <li><span class="filter" data-filter=".web">Web</span></li>
        <li><span class="filter" data-filter=".divers">Divers</span></li>     
      </ul>

      <div id="portfoliolist">
        
          <div class="portfolio app" data-cat="app">
            <div class="portfolio-wrapper">           
              <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal"> <img src="images/oby.png" alt="" /></a>
              <div class="label">
                <div class="label-text">
                  <a class="text-title">Application / Obygo</a>
                </div>
                <div class="label-bg"></div>
              </div>
            </div>
          </div>        
          
         
          <div class="portfolio app" data-cat="app">
            <div class="portfolio-wrapper">           
              <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal"> <img src="images/noob2.png" alt="" /></a>
              <div class="label">
                <div class="label-text">
                  <a class="text-title">Application / Noob</a>
                </div>
                <div class="label-bg"></div>
              </div>
            </div>
          </div>   

          <div class="portfolio web logoo" data-cat="web logoo">
            <div class="portfolio-wrapper">           
              <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal"> <img src="images/jerome.png" alt="" /></a>
              <div class="label">
                <div class="label-text">
                  <a class="text-title">Site / Studio3delta</a>
                </div>
                <div class="label-bg"></div>
              </div>
            </div>
          </div>   

           <div class="portfolio divers" data-cat="divers">
            <div class="portfolio-wrapper">           
              <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal"> <img src="images/Wild-poster.jpg" alt="" /></a>
              <div class="label">
                <div class="label-text">
                  <a class="text-title">Poster / Wild</a>
                </div>
                <div class="label-bg"></div>
              </div>
            </div>
          </div>   

          <div class="portfolio logoo" data-cat="logoo">
            <div class="portfolio-wrapper">           
              <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal"> <img src="images/sport.jpg" alt="" /></a>
              <div class="label">
                <div class="label-text">
                  <a class="text-title">Logo / E-Sport</a>
                </div>
                <div class="label-bg"></div>
              </div>
            </div>
          </div>   
      
          <div class="portfolio divers" data-cat="divers">
            <div class="portfolio-wrapper">           
              <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal"> <img src="images/tatoo1.jpg" alt="" /></a>
              <div class="label">
                <div class="label-text">
                  <a class="text-title">Poster / Salon de tatouage</a>
                </div>
                <div class="label-bg"></div>
              </div>
            </div>
          </div>   
      
        <div class="portfolio divers" data-cat="divers">
            <div class="portfolio-wrapper">           
              <a href="#portfolioModal7" class="portfolio-link" data-toggle="modal"> <img src="images/Obygo-tript.jpg" alt="" /></a>
              <div class="label">
                <div class="label-text">
                  <a class="text-title">Triptyque / Obygo</a>
                </div>
                <div class="label-bg"></div>
              </div>
            </div>
          </div>   
      
      

        </div>                                  
      </div>       
    </section>
    <footer class="bg-gray">
       <?php require 'footer.php';?>
    </footer>
    
       <?php require 'modal.php';?>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
 

     
  <script type="text/javascript">
  $(function () {
    
    var filterList = {
    
      init: function () {
      
      
        $('#portfoliolist').mixItUp({
          selectors: {
            target: '.portfolio',
            filter: '.filter' 
          },
          load: {
            filter: '.app, .divers, .logoo, .web'  
          },
          animation: {
            duration: 1000,
            effects: 'fade translateZ(-360px) stagger(34ms) translateX(10%) rotateZ(173deg) scale(0.75)',
            easing: 'cubic-bezier(0.175, 0.885, 0.32, 1.275)'
          }     
        });               
      
      }

    };
    
    // Run the show!
    filterList.init();
    
    
  }); 
  </script>
  </body>
</html>

