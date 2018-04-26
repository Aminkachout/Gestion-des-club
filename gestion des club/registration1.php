<?php 
session_start(); 
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="registration.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css.map">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css.map">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css.map">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css.map">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title></title>
    
    
</head>

<body>
    <div id="b">
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
        <li><a href="home.php">Home</a></li>
        <li><a href="news.php">News</a></li>
        <li><a class="active" href="registration.html">Registration</a></li>
        <li><a href="contact.php"> Contact</a></li>
    </ul>
    <h3>Registration</h3>
    <div id="erreur"><h3> missed Iformation </h3></div>
    <div id="c">
        <center>
            <form id="form" method="post" action="registration.php" >
                <label> First Name </label>
                <input type="text" id="fname" name="firstname" class="champ">
                <label> Last Name </label>
                <input type="text" id="lname" name="lastname" class="champ">
                <label> Mail </label>
                <input type="email" id="mail" name="mail" class="champ" >
                <label for="text"> CIN </label>
                <input type="text" id="cin" pattern="^[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]$" class="champ" name="cin">
                <label> Class </label>
                <select name="class">
                    <option> 1 Prepa </option>
                    <option> 2 Prepa </option>
                    <option> 3 Genie Informatique </option>
                </select>
                <label> Club </label>
                <select name="club">
                    <option> EPI Arts Club </option>
                    <option> EPI Startup factory </option>
                    <option> EPI Google Club </option>
                </select>
                <input type="submit" id="send" value="Submit">
            </form>
        </center>
    </div>
     <div class="footer"> 
    <p>© 2017 My club  -  all rights reserved - Kachout Amine </p></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="registration.js"></script>
</body>
</html>
