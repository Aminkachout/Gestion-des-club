<?php
 try 
 {
 	$bdd =new PDO ('mysql:host=localhost;dbname=login','root','');
 	
 }
 catch (Exception $e)
 {
 	die('erreur :'.$e->getMessage());
 }

 $bdd->exec("INSERT INTO membre VALUES ('".$_POST['name']."','".$_POST['password']."','".$_POST['adr']."','".$_POST['name']."')");
   
  header('Location:loginm.php');
  
   ?>
