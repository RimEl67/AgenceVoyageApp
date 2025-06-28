
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Le voyage Libre</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        <div class="logoPage">
          <img src="images/logoPage.png">
        </div>
        <div class="NomPage">Le voyage libre <span class="orange">.</span></div>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">CIRCUIT</a></li>
        <li><a href="#tarif">TARIF</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>
<!--image main organisez votre voyage sur mesure-->
<section id="main-image">
      <div class="wrapper">
      <h2> organisez votre <br><strong> voyage sur mesure </strong></h2>
      <a href="reservation/page.php#reservation" class="button-1"> Par ici</a>
    </div>
</section>

<!-- Container (About Section) -->
<div id="about" class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-8">
      <h2>About de notre agence</h2><br>
      <p><strong>Le voyage libre</strong> est une agence marocaine haut de gamme, spécialisée dans l’organisation des circuits de voyages. Faisant partie des meilleures agences de voyages du Royaume du Maroc, elle est composée d’une sympathique équipe de professionnels ! Après des fantastiques années passées dans le domaine d'organisations des voyages en tant que des spécialistes, à aider des clients à trouver les circuits parfaits, nous sommes en mesure de vous fournir à coup sûrs le voyage ou les vacances de vos rêves !
      Notre ambition est de vous faire vivre des aventures et des moments inoubliables, en vous faisant partager les émotions de la découverte du Maroc profond, à travers ses multiples régions, tel que le Sahara, les montagnes de l’Atlas, ou encore les citées impériales et légendaires.</p>
    </div>
    <div class="col-sm-4">
        <span><img src="images/logoPage.png"></span>
    </div>
  </div>
</div>
<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>Ce que nous offrons!</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-road logo-small"></span>
      <h4>Les meilleurs itinéraires routiers</h4>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>Sécurité</h4>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-plane logo-small"></span>
      <h4>Les meilleures destinations</h4>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-euro logo-small"></span>
      <h4>Les meilleurs prix</h4>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-cutlery logo-small"></span>
      <h4>Hotellerie & Bon plats</h4>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-gift logo-small"></span>
      <h4 style="color:#303030;">Des bons surprises</h4>
    </div>
  </div>
</div>


<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Circuit</h2><br>
  <h4>Voyager c'est vivre le rêve en réalité</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images\article2.png" alt="Paris" width="400" height="300">
        <p><strong>ENIVE DE S'EVADER</strong></p>
        <p>Parfois un peu d'evasion serait le bienvenu et ferait le plus drand bien !</p>
        <a href="infos/infos.php#e1" class="button-2"> Plus d'infos</a>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images\article1.jpg" alt="New York" width="400" height="300">
        <p><strong>PARTEZ EN FAMILLE</strong></p>
        <p>Ofrrez le meilleur à ceux que vous aimez et partagez des moments fabulex !</p>
        <a href="infos/infos.php#e2" class="button-2"> Plus d'infos</a>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="images\article2.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>PARTIR SEULE</strong></p>
        <p>Rien n’est plus excitant que de partir seul en vacances. Se faire de nouveaux amis, découvrir le monde,..etc.</p>
        <a href="infos/infos.php#e3" class="button-2"> Plus d'infos</a>
      </div>
    </div>
  </div><br>
  
  <h2>Aller vivez l'expérience en plein joie</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"Qui voyage de nuit ne voit que des étoiles."<br><span>Les dictons d'oc et proverbes de Provence </span></h4>
      </div>
      <div class="item">
        <h4>"Informe-toi de tes compagnons de voyage avant de te mettre en route."<br><span>Les apologues et contes orientaux </span></h4>
      </div>
      <div class="item">
        <h4>"L'expérience que le voyageur acquiert dans ses courses a souvent pour effet de le guérir de la manie de voyager."<br><span>Les proverbes et dictons persans </span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Tarif Section) -->
<div id="tarif" class="container-fluid">
  <div class="text-center">
    <h2>Nos Options</h2>
    <h4>Découvrir les options de voyages </h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Basic</h1>
        </div>
        <div class="panel-body">
          <p><strong>Hotêle</strong> : 3 Etoiles</p>
          <p><strong>Transport</strong> : Medium Qualité</p>
          <p><strong></strong></p>
        </div>
        <div class="panel-footer">
          <h3>250 DH</h3>
          <h4>pour une place</h4>
         <!-- <button class="btn btn-lg" onclick="document.location.href='Abonnement/abonner.php';")>Sign Up</button>-->
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Pro</h1>
        </div>
        <div class="panel-body">
          <p><strong>Hotêle</strong> : 4 Etoiles</p>
          <p><strong>Transport</strong> : Medium Qualité</p>
        </div>
        <div class="panel-footer">
          <h3>400 DH</h3>
          <h4>pour une place</h4>
          <!--<button class="btn btn-lg" onclick="document.location.href='Abonnement/pro.php';")>Sign Up</button>-->
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Premium</h1>
        </div>
        <div class="panel-body">
          <p><strong>Hotêle</strong> : 5 Etoiles</p>
          <p><strong>Transport</strong> : High Qualité</p>
        </div>
        <div class="panel-footer">
          <h3>600 DH</h3>
          <h4>pour une place</h4>
          <!--<button class="btn btn-lg" onclick="document.location.href='Abonnement/premium.php';")>Sign Up</button>-->
        </div>
      </div>      
    </div>    
  </div>
  <!-- Container (tarif Section) -->
<form action="Prix/Prix.php" method="post"> 
    <div class="container-fluid text-center bg-grey">
       <div class="panel panel-default">
        <div class="panel-heading"><h1>Tarif</h1></div>
              <div class="panel-body">
                 <div class="form-group col-md-3">
                      <label for="tarif1">Ville départ:</label>
                      <select class="form-control" name="tarif1">
                      <option value="Casablanca">Casablanca</option>
                      <option value="Fes">Fès</option>
                      <option value="Sale">Salé</option>
                      <option value="Tanger">Tanger</option>
                      <option value="Marrakech">Marrakech</option>
                      <option value="Mekens">Meknès</option>
                      <option value="Rabat">Rabat</option>
                      <option value="Oujda">Oujda</option>
                      <option value="kenitra">Kénitra</option>
                      <option value="Agadir">Agadir</option>
                      <option value="Tetouan">Tétouan</option>
                      <option value="Temara">Temara</option>
                      <option selected="selected" value="Safi">Safi</option>
                      <option value="Laayoun">Laayoun</option>
                      <option value="Dakhla">Dakhla</option>
                      <option value="Eljadida">El-jadida</option>
                      <option value="Zagora">Zagora</option>
                      </select>
                    </div>

                    <div class="form-group col-md-3">
                      <label for="tarif2">Ville d'arriver:</label>
                      <select class="form-control" name="tarif2">
                        <option selected="selected" value="Casablanca">Casablanca</option>
                        <option value="Fes">Fès</option>
                        <option value="Sale">Salé</option>
                        <option value="Tanger">Tanger</option>
                        <option value="Marrakech">Marrakech</option>
                        <option value="Mekens">Meknès</option>
                        <option value="Rabat">Rabat</option>
                        <option value="Oujda">Oujda</option>
                        <option value="kenitra">Kénitra</option>
                        <option value="Agadir">Agadir</option>
                        <option value="Tetouan">Tétouan</option>
                        <option value="Temara">Temara</option>
                        <option selected="selected" value="Safi">Safi</option>
                        <option value="Laayoun">Laayoun</option>
                        <option value="Dakhla">Dakhla</option>
                        <option value="Eljadida">El-jadida</option>
                        <option value="Zagora">Zagora</option>
                      </select>
                    </div>
                    <!--------------------------------->
                    <div class="form-group col-md-3">
                      <label for="tarif3">Option de voyage:</label>
                      <select class="form-control" name="tarif3">
                        <option selected="selected" value="basic">Basic</option>
                        <option value="pro">Pro</option>
                        <option value="premium">Premium</option>
                      </select>
                    </div>
                     <!--------------------------------->
                          <div class="form-group col-md-3">
                            <label for="tarif4">Nombre de place</label>
                            <select class="form-control" name="tarif4">
                              <option selected="selected" value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                          </div>
        <input type="submit" name="valide" class="btn btn-primary " value="Chercher le prix">
      </div>
    </div>
  </div>
</div>
</form>




<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Chez Le voyage libre nous savons que voyager est une aventure humaine mais également un engagement financier important pour vous. C'est pourquoi nous mettons un point d'honneur à prendre en compte chacune de vos attentes pour vous aider dans la préparation de votre séjour, circuit ou voyage sur mesure.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Morocco</p>
      <p><span class="glyphicon glyphicon-phone"></span> +212 645 80 21 01</p>
      <p><span class="glyphicon glyphicon-envelope"></span> contact@levoyagelibre.ml</p>
    </div>
    <div class="col-sm-7 slideanim">
      <form action="Contact/contact.php" method="post">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" name="envoyer" type="submit">Envoyé</button>
          <?php include('Contact/contact.php');?>
        </div>
      </div>
    </form>
    </div>
  </div>
</div>

<ul class="pager">
  <li><a href="reservation/page.php">Next</a></li>
</ul>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <center> 
      <img src="images/logoPage.png" title="le voyage libre">
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