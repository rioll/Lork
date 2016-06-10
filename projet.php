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
       <?php $page = 'projet'; require 'menu.php';?>
    </header>

   
    <section id="information-projets">
      <div class="row pad2 ">
        <h1 class="bleu text-center">Nos projets</h1>
      </div> 
      <div class="row pad1 right">
        <h2>web</h2>
      </div>  
      <div class="row pad1 projet-container bg-gray">
         <div class="col-md-3">
            <div class="card">
              <img src="images/oby.png"  class="vignette-projet">
              <p>card title</p>
            </div>      
         </div> 
         <div class="col-md-3">
            <div class="card">
              <img src="images/oby.png"  class="vignette-projet">
              <p>card title</p>
            </div>      
         </div> 
         <div class="col-md-3">
            <div class="card">
              <img src="images/oby.png"  class="vignette-projet">
              <p>card title</p>
            </div>      
         </div> 
         <div class="col-md-3">
            <div class="card">
              <img src="images/oby.png"  class="vignette-projet">          
              <p>card title</p>
            </div>      
         </div> 


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
    <script type="text/javascript">
          $(".modal-transparent").on('show.bs.modal', function () {
            setTimeout( function() {
              $(".modal-backdrop").addClass("modal-backdrop-transparent");
            }, 0);
          });
          $(".modal-transparent").on('hidden.bs.modal', function () {
            $(".modal-backdrop").addClass("modal-backdrop-transparent");
          });

          $(".modal-fullscreen").on('show.bs.modal', function () {
            setTimeout( function() {
              $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
            }, 0);
          });
          $(".modal-fullscreen").on('hidden.bs.modal', function () {
            $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
          });
    </script>

   
  </body>
</html>

<!-- 
<div class="row pad1">
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-fullscreen">
          Obygo
        </button>

        <div class="modal modal-fullscreen fade" id="modal-fullscreen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fermer</span></button>
                <h4 class="modal-title" id="myModalLabel">Oby</h4>
              </div>
              <div class="modal-body">
                <p>Projet réalisé en 2015, angularJS, Cordova.</p>
                <img src="images/oby.png">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
              </div>
            </div>
          </div>
        </div>
      </div> -->