<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title></title>
</head>

<body>

    <div class="login-page">
        <form class="form" action="login.php" method="post">
            <input type="text" placeholder="name" id="fname" name="name" class="champ" />
            <input type="password" placeholder="password" id="password" name="password" class="champ" />
            <input type="text" placeholder="email address" id="mail" name="adr" class="champ" />
            <button>create</button>
            <p class="message">Already registered? <a href="loginm.php">Sign In</a></p>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="login2.js"></script>
</body>

</html>
