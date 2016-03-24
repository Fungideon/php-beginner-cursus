<table>
    <?php
        $zwemclubs["De spartelkuikens"] = 25;
        $zwemclubs["De waterbuffels"] = 32;
        $zwemclubs["Plonsmderin"] = 11;
        $zwemclubs["Bommetje"] = 23;
    foreach ($zwemclubs as $label => $waarde){
        echo "<tr>";
        echo "<td>".$label."</td><td>".$waarde."</td><td>";
        for($i = 0; $i < $waarde; $i++) {
            if($i%5==4){
                echo "<img src='zwemmen-oefening_318-27630.png' style=\"height:50px;width:50px;\">";
            }
        }
        echo "</td>";
        echo "</tr>";
    }
    ?>

</table>
