
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
		if(isset($_POST['valide']) && isset($_POST['gridCheck'])){
			if(empty($_POST['inputEmail']) || empty($_POST['inputPassword'])){
			echo '<script language="JavaScript">
			alert("Essai encore une fois");
			window.location.replace("page.php");
			</script>';
				if($_POST['sel1']==$_POST['sel2']){
					header('location:../Prix/Error.html');
				}
			}
			else { 
				$villedep=$_POST['sel1'];
				$villeA=$_POST['sel2'];
				$option=$_POST['sel3'];
				$nbplace=$_POST['Nbplace'];
				$horaire=$_POST['horaire'];
				$cate=$_POST['sel4'];
	            $email=$_POST['inputEmail'];
				$password=$_POST['inputPassword'];
				$Nomcomplet=$_POST['nomUser'];
				$dateV=$_POST['inputdate'];

				$Query1=$conn->query("SELECT PrixU FROM prixvoyage WHERE Ville='$villedep'");
    			$PrixT=$Query1->fetch()['PrixU'];
    			$Query2=$conn->query("SELECT PrixU FROM prixvoyage WHERE Ville='$villeA'");
    			$PrixT+=$Query2->fetch()['PrixU'];
			 if($option=='basic')
		        $prix=(250+$PrixT)*$nbplace;
			 if($option=='pro')
		        $prix=(400+$PrixT)*$nbplace;
           	 if($option=='premium')
		        $prix=(600*+$PrixT)*$nbplace;

              
		      $state=$conn->prepare("INSERT INTO reservation values(:villedep,:villeA,NULL,:option,:cate,:nbplace,:email,:password,:Nomcomplet,:dateV,:horaire)");
	          $state->bindValue(":email",$email,PDO::PARAM_STR);
	          $state->bindValue(":password",$password,PDO::PARAM_STR);
	          $state->bindValue(":Nomcomplet",$Nomcomplet,PDO::PARAM_STR);
	          $state->bindValue(":villedep",$villedep,PDO::PARAM_STR);
	          $state->bindValue(":villeA",$villeA,PDO::PARAM_STR);
	          $state->bindValue(":option",$option,PDO::PARAM_STR);
	          $state->bindValue(":nbplace",$nbplace,PDO::PARAM_STR);
	          $state->bindValue(":cate",$cate,PDO::PARAM_STR);
	          $state->bindValue(":dateV",$dateV,PDO::PARAM_STR);
	          $state->bindValue(":horaire",$horaire,PDO::PARAM_STR);
		      $state->execute();
		       include('message.php');

				}
		}
		elseif (isset($_POST['valide']) && empty($_POST['gridCheck'])) {
			echo '<script language="JavaScript">
			alert("Essai encore une fois");
			window.location.replace("page.php");
			</script>';

		}
	}
	catch(PDOException $e){
		echo"connection failed".$e->getMessage();
	}
?>