<?php
    $naam = $_POST["naam"];
    $adres = $_POST["adres"];
    $email = $_POST["email"];
    $wachtwoord = $_POST["wachtwoord"];
    if($naam=="" || $adres=="" || $email=="" || $wachtwoord==""){
        header("Location: registratie.php?error");
    }else{
        echo "Uw Naam : ".$naam."<br>";
        echo "Uw Adres : ".$adres."<br>";
        echo "Uw Email : ".$email."<br>";
        echo "Uw Wachtwoord : ".$wachtwoord."<br>";
    }
