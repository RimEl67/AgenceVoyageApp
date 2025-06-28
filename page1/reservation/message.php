 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styelpage.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  <script src="bootstrap-datepicker.fr.min.js"></script>

  <div class="well">
    <div class="panel panel-default">
  <div class="panel-heading"><h1>Mr/Mme <?php echo " : ".$Nomcomplet."    ".$cate  ?></h1></div>
  <div class="panel-body"><h1>Votre réservation est bien récupérer . </h1><br>
    vous aver réserver 
<table class="table">
    <thead>
      <tr>
        <th>Nombre de place</th>
        <th>Ville départ</th>
        <th>Ville d'arriver</th>
        <th>Option</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo "<strong> $nbplace </strong>"; ?></td>
        <td><?php echo "<strong>$villedep </strong>";?></td>
        <td><?php echo "<strong>$villeA</strong>";?></td>
        <td><?php echo "<strong>$option</strong>"; ?></td>
      </tr>
    </tbody>
  </table>
     <h4><strong>le prix total</strong> de votre voyage est</h4>
          <div class="panel panel-default">
      <div class="panel-body"><?php echo $prix;?> DH</div>
    </div><br> 
     <h4>Votre réservation est en progression....Verser à nous le prix désigner pour bien compléter votre réservation</h4>
     <div class="progress">
  <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
  aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
    En progression
  </div>
</div>
    Vous trouver <strong>ci-dessous</strong> le code de notre <strong>compte bancaire</strong> <br>
   <div class="panel panel-default">
   <div> <h3>1456 BF5GH 145CC 00 </h3></div></div> 
   Merci pour votre résevation !
   <strong>NB</strong>: si vous serez en retard lors de départ de voyage vous pouvez consulter notre agence pour récuperer votre argent!  
  </div>
  </div>

  

