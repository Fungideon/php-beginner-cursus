<?php
    include "login.php";
    if(isset($_POST["knop"])) {
        if(login($_POST["inlognaam"], $_POST["wachtwoord"])){
            session_start();
            $_SESSION["username"] = $_POST["inlognaam"];
            $_SESSION["password"] = $_POST["wachtwoord"];
            header("Location: projectcontent.php");
        }else {
            $message = "Verkeerde gerbruikersnaam / wachtwoord";
        }
    }
?>
<html>
    <body>
        <h1><?php echo $message; ?></h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            Inlognaam <input type="text" name="inlognaam" value="">
            Wachtwoord <input type="password" name="wachtwoord" value="">
            <input type="submit" name="knop" value="verstuur">
        </form>
    </body>
</html>