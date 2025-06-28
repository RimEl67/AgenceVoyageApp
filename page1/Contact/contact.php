
<?php
 $servername='localhost';
 $dbname='id8162116_voyagelibre';
 $user='id8162116_reservation';
 $password='admin';
  //dbname1='voyagelibre';
 //user='root';
	try{
		$conn=new PDO("mysql:host=$servername;dbname=voyagelibre","root","");
		//$conn=new PDO("mysql:host=$servername;dbname=$dbname",$user,$password);
		if(isset($_POST['envoyer'])){
			if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['comments'])){
				echo "Echec d'envoie";
				header('location:../Prix/Error.html');
			}
			else {
				$name=$_POST['name'];
				$email=$_POST['email'];
				$comments=$_POST['comments'];
				$state=$conn->prepare("INSERT INTO boitemail values(:name,:email,:comments)");
	          $state->bindValue(":email",$email,PDO::PARAM_STR);
	          $state->bindValue(":comments",$comments,PDO::PARAM_STR);
	          $state->bindValue(":name",$name,PDO::PARAM_STR);
	          $state->execute();

	                     include('Valide.html');
						 // header('location:../index.php#contact');
				 }
		}else
		{ 
			echo "Envoyer votre Message";

		}
	}
	catch(PDOException $e){
		echo"connection failed".$e->getMessage();
	}
?>

		
