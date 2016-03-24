<?php
    function toFahrenheit($a){
        $b = $a * 1.8 + 32;
        return $b;
    }
    function checkDeelDrie($c){
        if($c % 3 == 0){
            return true;
        }else{
            return false;
        }
    }
    function reverseString($str){
        return strrev("".$str);
    }
    function maakAlbumArray(){
        $albums["25"] = "Adele";
        $albums["Best Of Bowie"] = "David Bowie";
        $albums["Time of my life"] = "Ronan Keating";

        return $albums;
    }