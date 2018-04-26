<?php
session_start();
try 
 {
 	$bdd =new PDO ('mysql:host=localhost;dbname=login','root','');
 }
 catch (Exception $e)
 {
 	die('erreur :'.$e->getMessage());
 }
 $cin=$_POST['cin'];

 $bdd->exec("INSERT INTO registration VALUES ('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['mail']."' ,  '".$_POST['cin']."','".$_POST['class']."','".$_POST['club']."')");
 $req=$bdd->query("SELECT * FROM registration where cin='".$cin."' " );
 if ($req && $req->rowCount()==1) {
 		$t=$req->fetch();
 		$_SESSION['lastname']=$t['lastname'];
 		$_SESSION['class']=$t['classe'];
 		$_SESSION['club']=$t['club'];
 		$_SESSION['adr']=$t['mail'];

 	#
 }
   
   header('Location:home.php');
  

?>