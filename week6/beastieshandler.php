<?php
    $optiesArray = $_POST["chk_group"];
    $keuzes = array("dog", "cat", "bird");
    if (isset($_POST['chk_group'])) {
        foreach ($optiesArray as $opties) {
            for ($i = 0; $i < sizeof($keuzes); $i++) {
                if ($keuzes[$i] == $opties) {
                    echo "<img src=\"" . $keuzes[$i] . ".jpg\">";
                }
            }
        }
    }