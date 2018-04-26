<?php
session_start(); 
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css.map">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css.map">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css.map">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css.map">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="contact.css">
    <title></title>
</head>

<body>
    <div id="b">
        <div>
        <?php  
         try 
 {
    $bdd =new PDO ('mysql:host=localhost;dbname=login','root','');
 }
 catch (Exception $e)
 {
    die('erreur :'.$e->getMessage());
 }

    $req=$bdd->query("SELECT * FROM membre where mail='".$_SESSION['adr']."' ");
    if ($req && $req->rowCount()==1) {
      $t=$req->fetch();
      $i=$t['image']; 
      echo "<img src='".$i."'  >";}
      

 ?>
        <p>NOM:<?php echo' '.$_SESSION['name']; ?></p>
        <?php 

        if(isset($_SESSION['lastname'] ) && isset($_SESSION['class']) && isset($_SESSION['club']))
        {
         echo'<p>prenom:'.$_SESSION['lastname'] .'</p> ';
         echo'<p>Class : '.$_SESSION['class'].'</p>';
         echo'<p>Club :'.$_SESSION['club'].'<p/>';
        }
        ?></div>
    </div>
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="registration1.php">Registration</a></li>
        <li><a class="active"  href="contact.php">Contact</a></li>
    </ul>
    <form>
        <div class="form-group">
            <label  for="exampleInputEmail1">Message : </label>
            <textarea class="form-control" rows="9" cols="60" id="exampleInputEmail1" placeholder="Message Here "></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-success">Send</button>
        </div>
    </form>
     <div class="footer"> 
    <p>© 2017 My club  -  all rights reserved - Kachout Amine </p></div>
</body>

</html>
