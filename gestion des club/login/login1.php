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
$adr=$_POST['adr'];
$pass=$_POST['passwd'];
if (($_POST['adr']== "") AND ($_POST['passwd']=="")) 
	{echo "les champ sont vides";}
else
	{

 $req=$bdd->query("SELECT * FROM membre where mail='".$adr."' AND password='".$pass."' ");
 if($req && $req->rowCount()>0)
 	{ 	$m = $req->fetch();
 		$_SESSION['name']=$m['name'];
 		$_SESSION['adr']=$m['mail'];

        echo 'Username and Password Found'; 
    	header('Location: ..\home.php');

    }
    else
    {
    header('Location:.\login.php');
    }
}

?>