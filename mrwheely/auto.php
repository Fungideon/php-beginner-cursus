<?php
class Auto {
    var $merk;
    var $model;
    var $prijs;
    var $url;
    //maakt een auto object aan met een merk, model, prijs en url voor de afbeelding
    function __construct($automerk, $automodel, $autoprijs, $autourl){
        $this->merk = $automerk;
        $this->model = $automodel;
        $this->prijs = $autoprijs;
        $this->url = $autourl;
    }
    function getMerk(){
        return $this->merk;
    }
    function getModel(){
        return $this->model;
    }
    function getPrijs(){
        return $this->prijs;
    }
    function getUrl(){
        return $this->url;
    }
    function setMerk($automerk){
        $this->merk = $automerk;
    }
    function setModel($automodel){
        $this->model = $automodel;
    }
    function setPrijs($autoprijs){
        $this->prijs = $autoprijs;
    }
    function setUrl($autourl){
        $this->url = $autourl;
    }
    function getPrijsFormat(){
        $tempprijs = number_format($this->prijs, 2, ',', '.');
        $tempprijs = substr_replace($tempprijs, '--', -2);
        return $tempprijs;
    }
}

class autoOverzicht{
    var $autos = array();
    //maakt een array aan met autos
    function __construct(){
        $ford1 = new Auto("Ford", "Fiesta", 23999, "images/autos/fordfiesta.jpg");
        $this->autos[] = $ford1;
        $ford2 = new Auto("Ford", "Focus", 18995, "images/autos/fordfocus.jpg");
        $this->autos[] = $ford2;
        $opel1 = new Auto("Opel", "Astra", 14895, "images/autos/opelastra.jpg");
        $this->autos[] = $opel1;
        $opel2 = new Auto("Opel", "Insignia", 65450, "images/autos/opelinsignia.jpg");
        $this->autos[] = $opel2;
        $subaru1 = new Auto("Subaru", "Forester", 34750, "images/autos/subaruforester.jpg");
        $this->autos[] = $subaru1;
        $subaru2 = new Auto("Subaru", "Impreza", 28345, "images/autos/subaruimpreza.jpg");
        $this->autos[] = $subaru2;
        $mercedes1 = new Auto("Mercedes", "E 63", 110995, "images/autos/mercedede63.png");
        $this->autos[] = $mercedes1;
        $mercedes2 = new Auto("Mercedes", "CLA 45", 190780, "images/autos/mercedescla45.jpg");
        $this->autos[] = $mercedes2;
        $ferrari1 = new Auto("Ferrari", "612 GTO", 350500, "images/autos/ferrari612.jpg");
        $this->autos[] = $ferrari1;
        $citroen1 = new Auto("Citroen", "2CV", 459, "images/autos/citroen2cv.jpg");
        $this->autos[] = $citroen1;
        $mini1 = new Auto("Mini", "Cooper", 34495, "images/autos/minicooper.jpg");
        $this->autos[] = $mini1;
    }
    function getList(){
        return $this->autos;
    }
}
