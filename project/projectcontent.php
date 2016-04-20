<?php
    include 'login.php';
    session_start();
    if(login($_SESSION["username"], $_SESSION["password"])){
        ?>
        <h1>PHP Project Pagina</h1>
        Deze site hoor je alleen maar te kunnen zien als je ingelogt bent.
        <br>
        <a href="logout.php">Klik hier om uit te loggen</a>
        <?php
    }else{
        ?>
    U moet eerst inloggen om deze pagina te zien
    <a href="loginpagina.php">LOGIN</a>
        <?php
    }
        ?>