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
if (isset($_FILES['aaa']) AND $_FILES['aaa']['error']== 0)
{
        if ($_FILES['aaa']['size'] <= 1000000)
        {
        $infosfichier =pathinfo($_FILES['aaa']['name']);
        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = array('jpg', 'jpeg', 'gif','png');
    if (in_array($extension_upload,$extensions_autorisees))
        {
        move_uploaded_file($_FILES['aaa']['tmp_name'], 'uploads/' .basename($_FILES['aaa']['name']));
        }
        }
        $r='uploads/' .basename($_FILES['aaa']['name']);
        $bdd->exec("UPDATE membre SET image='".$r."' where mail='".$_SESSION['adr']."'");
}

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
    <link rel="stylesheet" type="text/css" href="home.css">
    <title> Home</title>
</head>

<body> 
    <div id="b">
        
        <form method="post" action="home.php" enctype="multipart/form-data">


            <input id="file" type="file" name="aaa" value="take photo" >
            <input id="submit" type="submit" name="upload" value="upload" style=" background-color: transparent; border-color: transparent; ">

        </form>
        
        <?php  

                $req=$bdd->query("SELECT * FROM membre where mail='".$_SESSION['adr']."' ");
    if ($req && $req->rowCount()==1) {
      $t=$req->fetch();
      $i=$t['image']; 
      echo "<img   src='".$i."'  >";}
      

 ?>

      
        <div>
        <p>NOM:<?php echo' '.$_SESSION['name']; ?></p>
        <?php 

        if(isset($_SESSION['lastname'] ) && isset($_SESSION['class']) && isset($_SESSION['club']))
        {
         echo'<p>prenom:'.$_SESSION['lastname'] .'</p> ';
         echo'<p>Class  '.$_SESSION['class'].'</p>';
         echo'<p>Club '.$_SESSION['club'].'<p/>';
        }
        ?>
        </div>
    </div>


    <ul>
        <li><a class="active" href="home.php">Home</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="registration1.php">Registration</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="logout.php">Deconnection</a></li>
    </ul>
    
    <iframe id="d" width="600" height="400" src="https://www.youtube.com/embed/ltM9cGl0DzQ" frameborder="0" allowfullscreen></iframe>
    <div class="footer"> 
    <p>© Copyright 2017 My club  -  all rights reserved- Kachout Amine </p></div>
</body>

</html>
