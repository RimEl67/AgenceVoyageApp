<?php
$dbname='id8162116_voyagelibre';
$user='id8162116_reservation';
$servername='localhost';
$password='admin';
$value1=$_POST['tarif1'];
$value2=$_POST['tarif2'];
$option=$_POST['tarif3'];
$nbplace=$_POST['tarif4'];
 //dbname1='voyagelibre';
 //user='root';
try{
					$conn=new PDO("mysql:host=$servername;dbname=voyagelibre","root","");
					//$conn=new PDO("mysql:host=$servername;dbname=$dbname",$user,$password);
						if(isset($_POST['valide'])){
								if($_POST['tarif1']==$_POST['tarif2']) {
								header('location:Error.html');
						     }else {
									$Query1=$conn->query("SELECT PrixU FROM prixvoyage WHERE Ville='$value1'");
					    			$PrixT=$Query1->fetch()['PrixU'];
					    			$Query2=$conn->query("SELECT PrixU FROM prixvoyage WHERE Ville='$value2'");
					    			$PrixT+=$Query2->fetch()['PrixU'];
								 if($option=='basic')
							        $prix=(250+$PrixT)*$nbplace;
								 if($option=='pro')
							        $prix=(400+$PrixT)*$nbplace;
					           	 if($option=='premium')
							        $prix=(600+$PrixT)*$nbplace;
							   include('message2.php');
						  
						  }
						}

    		
	}catch(PDOException $e){
		echo"connection failed".$e->getMessage();
	}
?>