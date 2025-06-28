
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Infos-Circuits</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styleInfos.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  <script src="bootstrap-datepicker.fr.min.js"></script>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">
        <div class="NomPage">Infos circuit <span class="orange">.</span></div>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#e1">Envie de s'evader</a></li>
        <li><a href="#e2">Partez en famille</a></li>
        <li><a href="#e3">Partir seule</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- Tab panes -->
  <div id="e1" class="container-fluid bg-grey"><h1>Envie de s'evader</h1>
      <?php include('SlideShow.html'); ?>
      <div class="panel panel-default">
      <div class="panel-heading"><h1>Voyager pour le plaisir de s’évader</h1></div>
      <div class="panel-body"><p>
      Vous aimez dans les voyages rompre avec un quotidien perçu parfois comme monotone. Ces parenthèses vous donnent la sensation d’être un explorateur de contrées sauvages et magnifiques. Des images qui font sans doute partie de vos représentations du voyage. Ce n’est pas tant de repos et de farniente que vous avez besoin, mais bien d’être en route, de parcourir des kilomètres, à pieds, sur l’eau… en toute sécurité. Ce sentiment d’émerveillement intense vous procure une forte sensation d’exister.<br>
      <strong>Nos conseils</strong>: nous proposons des voyages combinant aventure et sécurité, des circuits qui vous garantissent sensations et surprises, tout en étant bien encadré. Faites-vous plaisir. Perdez-vous dans la nature sur des îles demaroc, plongez à la recherche de nouvelles cultures. Rencontrez tous chez notre agence… Ces voyages vous régénèreront. !Ne ratez pas l'occasion
      </p></div>
  </div>
</div>
  <div id="e2" class="container-fluid bg-grey"><h1>Partez en famille</h1>
    <?php include('SlideShow1.html'); ?>
       <div class="panel panel-default">
      <div class="panel-heading">
        <h1>Vivez l'expérience en famille</h1></div>
      <div class="panel-body"><p>Les vacances en famille : un moment attendu toute l’année ! Parce qu’on n’a pas envie de la même chose à 2 ou 12 ans, notre sélection de voyages vise à satisfaire tous les goûts et tous les âges : des chauffe-biberons pour les plus jeunes, des activités encadrées pour les turbulents ou de l’aventure douce pour les intrépides. Et pour les parents ? Le bonheur d’avoir trouvé l’adresse et la formule qu’il leur faut pour un voyage sans fausse-note.<strong>Contactez-nous ou bien réservez votre voyage en ligne!</strong></p></div>
  </div>
</div>
  <div id="e3" class="container-fluid bg-grey"><h1>Partir seule</h1>
    <?php include('SlideShow2.html'); ?>
        <div class="panel panel-default">
      <div class="panel-heading">
        <h1>Partir seule c'est encore plus un avantage</h1></div>
      <div class="panel-body">
        <p>Vous êtes là, à regarder les offres de voyages pas cher chez nous .
Vous avez beau affirmer que vous êtes tombée sur ce site « un peu par hasard », personne n’est dupe : vous rêvez de partir seule en voyage.
Vous rêvez de choisir la destination de vacances qui vous sied, de construire votre itinéraire, de sélectionner les différents hôtels et auberges de jeunesse sans rendre de compte à personne… 
Le but inavoué de ce voyage ? Prendre confiance en vous, apprendre à aller plus facilement vers les autres et revenir le cœur rempli d’une multitude de beaux moments. <strong>Réservez maintenant</strong> !</p>
      </div>
    </div>
</div>

<!--Pager-->
<ul class="pager">
  <li><a href="../">Previous</a></li>
</ul>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <center> 
      <img src="logoPage.png" title="le voyage libre">
    </center>
    <h1> Le voyage libre <span class="orange">.</span></h1>
    <div class="copyright">
      Copyright (C) 2025 .powerd byRim EL ABBASSI
    </div>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>