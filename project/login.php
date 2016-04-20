<?php
    function login($username, $password){
        $gebruikers["hoi"] = "doei";
        $gebruikers["piet@worldonline.nl"] = "doetje123";
        $gebruikers["klaas@carpets.nl"] = "snoepje777";
        $gebruikers["truushendriks@wegweg.nl"] = "arkiearkie201";

        if(isset($gebruikers[$username])
            && $gebruikers[$username] == $password) {
            return true;
        }else {
            return false;
        }
    }