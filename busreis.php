<?php
/**
 * Created by PhpStorm.
 * User: Timo
 * Date: 2-2-2016
 * Time: 12:37
 */
    $leeftijd = $_POST["leeftijd"];

    //hiervoor had nog een input check kunnen komen die controleert of de posted waarde wel werkelijk een int is.
    if($leeftijd < 3){
        echo "u mag gratis mee ";
        echo  "kosten: niks";
    }elseif($leeftijd >= 3 && $leeftijd <= 12){
        echo "U krijgt 50% korting ";
        echo "Kosten: 5 euro ";
    } else if($leeftijd > 65){
        echo "U krijgt 50% korting ";
        echo "Kosten: 5 euro";
    } else {
        echo "U krijgt geen korting ";
        echo "Kosten: 10 euro";
    }
?>