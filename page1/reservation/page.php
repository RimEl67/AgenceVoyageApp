
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Réservation en Ligne</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styelpage.css">
  <link rel="stylesheet" type="text/css" href="bootstrap-datepicker.css">
  <script type="text/javascript" rel="stylesheet" src="bootstrap-datepicker.js"></script>
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
        <div class="NomPage">Réserver Maintenant!<span class="orange">.</span></div>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#reservation">RESERVATION</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- Container (About Section) -->
<div id="reservation" class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-8">
      <!-- Nav tabs -->
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#VO">Réservation en ligne</a>
      </li>
    </ul>
<!-- Tab panes -->
  <div class="tab-pane container active" id="VO">
    <h4>Réservation en ligne</h4>
<form action="reservationEnLinge.php" method="post">
        <div class="form-group col-md-6">
          <label for="sel1">Ville de départ:</label>
         <!--<input type="text" class="form-control" name="sel1" placeholder="Ville de départ">-->
         <select class="form-control" name="sel1">
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
            <option value="Safi">Safi</option>
            <option value="Laayoun">Laayoun</option>
            <option value="Dakhla">Dakhla</option>
            <option value="Eljadida">El-jadida</option>
            <option value="Zagora">Zagora</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="sel2">Ville d'arrivée:</label>
         <!--<input type="text" class="form-control" name="sel2" placeholder="Ville d'arrivée">-->
         <select class="form-control" name="sel2">
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
          <label for="sel3">Option de voyage:</label>
          <select class="form-control" name="sel3">
            <option selected="selected" value="basic">Basic</option>
            <option value="pro">Pro</option>
            <option value="premium">Premium</option>
          </select>
        <!-- <input type="text" class="form-control" name="sel3" placeholder="Option de voyage">-->
        </div>
        <div class="form-group col-md-3">
          <label for="Nbplace">Nombre de palces:</label>
          <select class="form-control" name="Nbplace">
            <option value="1">1</option>
            <option selected="selected" value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
         <!--<input type="text" class="form-control" name="Nbplace" placeholder="nombre de place">-->
        </div>
      <div class="form-group col-md-3">
      <label for="inputdate">Date de voyage</label>
          <div class='input-group' id="dates">
            <input type="text" class="form-control" autocomplete="off" id="datetimepicker2" name="inputdate" placeholder=" yyy-mm-dd" >
            <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
            </span>
           </div>
      </div>
    <script type="text/javascript">
      $(function(){
        $('#dates #datetimepicker2').datepicker({
          'format':'yyyy-mm-dd',
          'autoclose': true
        });
      });
</script>
      <div class="form-group col-md-3">
      <label for="horaire">Heures</label>
       <select class="form-control" name="horaire">
            <option value="08">08:00</option>
            <option selected="selected" value="09">09:00</option>
            <option value="10">10:00</option>
            <option value="13">13:00</option>
            <option value="14">14:00</option>
            <option value="15">15:30</option>
            <option value="16">16:30</option>
            <option value="18">18:00</option>
            <option value="20">20:20</option>
          </select>
      </div>
        <div class="form-group col-md-6">
          <label for="sel4">Votre Nom :</label>
          <input type="text" class="form-control" name="sel4" placeholder="Nom">
        </div>
        <div class="form-group col-md-6">
          <label for="nomUser">Votre Prénom:</label>
         <input type="text" class="form-control" name="nomUser" placeholder="Prénom">
        </div>
      <div class="form-group col-md-6">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control"  name="inputEmail" placeholder="Email">
     </div>
    <div class="form-group col-md-6">
      <label for="inputPassword">Password</label>
      <input type="password" class="form-control" name="inputPassword" placeholder="Password">
    </div>
     <div class="form-group ">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Accèpter les régles
      </label>
    </div>
  </div>
  <input type="submit" name="valide" class="btn btn-primary " value="Validé">
  </form>
<?php include('reservationEnLinge.php'); ?>

</div>
  </div>
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