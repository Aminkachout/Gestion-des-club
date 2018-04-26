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
    
    <link rel="stylesheet" type="text/css" href="slider.css">
    <title></title>
</head>

<body>


    <section id="slid">
        <ul>
        <li><img class="img2"  src="epi1.jpg" width="900px"></li>
        <li><img class="img2" src="epi2.jpg" width="900px"></li>
        <li><img class="img2" src="epi3.jpg" width="900px"></li>
        <li><img class="img2" src="epi5.jpg" width="900px"></li>
        <li><img class="img2" src="epi7.jpg" width="900px"></li>
       
    </ul>
</section>

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
        <li><a class="active" href="news.php">News</a></li>
        <li><a href="registration1.php">Registration</a></li>
        <li><a  href="contact.php">Contact</a></li>
    </ul>
    
 <div class="footer"> 
    <p>© 2017 My club  -  all rights reserved - Kachout Amine </p></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="slider.js"></script>
    
</body>

</html>
