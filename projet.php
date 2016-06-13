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
      <div class="row pad2 ">
        <h1 class="bleu text-center">Nos projets</h1>
      </div> 

    <div class="container">

      <ul id="filters" class="clearfix">
        <li><span class="filter active" data-filter=".app, .site, .divers, .logo, .web">All</span></li>
        <li><span class="filter" data-filter=".app">Application</span></li>
        <li><span class="filter" data-filter=".site">Site</span></li>
        <li><span class="filter" data-filter=".divers">Divers</span></li>
        <li><span class="filter" data-filter=".logo">Logo</span></li>
        <li><span class="filter" data-filter=".web">Web</span></li>
      </ul>

      <div id="portfoliolist">
        
        <div class="portfolio web" data-cat="web">
          <div class="portfolio-wrapper">           
            <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal"> <img src="images/portfolios/web/4.jpg" alt="" /></a>
            <div class="label">
              <div class="label-text">
                <a class="text-title">Sonor's Design</a>
              </div>
              <div class="label-bg"></div>
            </div>
          </div>
        </div>        
        
        <div class="portfolio card" data-cat="card">
          <div class="portfolio-wrapper">     
            <img src="images/portfolios/card/1.jpg" alt="" />
            <div class="label">
              <div class="label-text">
                <a class="text-title">Typography Company</a>
               <!-- <span class="text-category">Business card</span>-->
              </div>
              <div class="label-bg"></div>
            </div>
          </div>
        </div>  
              
                           
        
      </div>
    
  </div>
      </div>  
      
    </section>
    <footer class="bg-white">
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
            filter: '.web'  
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

