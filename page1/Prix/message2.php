  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="reservation/styelpage.css">
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
  <div class="panel-heading"> <h1>Tarif de voyage</h1></div>
  <div class="panel-body"><h1>Votre Sélectionnement</h1><br>
<table class="table">
    <thead>
      <tr>
        <th>Ville départ</th>
        <th>Ville d'arriver</th>
        <th>Option</th>
         <th>Nombre de place</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo "<strong>$value1 </strong>"; ?></td>
        <td><?php echo "<strong>$value2 </strong>";?></td>
        <td><?php echo "<strong>$option</strong>";?></td>
        <td><?php echo "<strong>$nbplace</strong>"; ?></td>
      </tr>
    </tbody>
  </table>
     <h4><strong>le prix total</strong> de voyage sélectionné est :</h4>
          <div class="panel panel-default">
      <div class="panel-body"><?php echo $prix ?> DH</div>
    </div>
  </div>
</div>
</div>

  <ul class="pager">
  <li><a href="../">Previous</a></li>
</ul>

