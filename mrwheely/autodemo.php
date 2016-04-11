<!doctype HTML>
<html>
    <head>
        <?php include "auto.php" ?>
        <?php
            $autolijst = new autoOverzicht();
            $autos = $autolijst->getList();
            $merken = array();
            $selectie = array();
            foreach($autos as $auto){
                $merken[] = $auto->getMerk();
            }
            $merken = array_unique($merken);
            setlocale(LC_MONETARY, 'nl_NL');
        ?>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    </head>
    <body>
    <h1 style="text-align: center; background-color: lightblue;">Mrwheely Autoshop</h1>
    <div style="max-width: 870px; background-image: url(maxresdefault.jpg); background-size: cover; display: flex; flex-wrap: wrap; margin: auto;">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET" style="margin:auto;">
                <table>
                    <thead>
                        <tr>
                            <td colspan="2" style="text-align:center;">Auto Verkoop</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="number" name="minimum"></td>
                            <td><input type="number" name="maximum"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <select name="merk">
                                    <option value="Alle Merken">Alle Merken</option>
                                    <?php
                                    foreach($merken as $merk){
                                        ?>
                                    <option name="<?php echo $merk; ?>"><?php echo $merk; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit" name="knop">Versturen</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
    <br>
            </div>
            <div style="max-width: 870px; background-color: #00CCFF; display: flex; flex-wrap: wrap; margin: auto;">
            <?php
                if(isset($_GET['knop'])) {
                    $minimumprijs = (int) 0;
                    $maximumprijs = PHP_INT_MAX;

                    if(!$_GET["minimum"] == ""){
                        $minimumprijs = $_GET["minimum"];
                    }
                    if(!$_GET["maximum"] == ""){
                        $maximumprijs = $_GET["maximum"];
                    }
                    foreach($autos as $auto){
                        if($_GET["merk"] === "Alle Merken"){
                            if($auto->getPrijs() >= $minimumprijs && $auto->getPrijs() <= $maximumprijs){
                                $selectie[] = $auto;
                            }
                        }else{
                            $merk = $_GET["merk"];
                            if($auto->getPrijs() >= $minimumprijs && $auto->getPrijs() <= $maximumprijs && $auto->getMerk() === $merk){
                                $selectie[] = $auto;
                            }
                        }
                    }
                }else{
                    $selectie = $autos;
                }
                foreach($selectie as $auto){
                    ?>
                    <table style="background-color:lightblue; border:5px solid lightblue; border-radius: 20px; color: #000033; margin: 10px;">
                        <thead>
                            <tr>
                                <td style="text-align:center; background-color: #00CCFF; border:5px solid #00CCFF; border-radius: 20px;" colspan="2"><?php echo $auto->getMerk(); ?> <?php echo $auto->getModel(); ?></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="<?php echo $auto->getUrl(); ?>" style="width:250px;"></td>
                            </tr>
                            <tr>
                                <td style="text-align:center;">&euro; <?php echo $auto->getPrijsFormat(); ?></td>
                            </tr>
                        </tbody>
                    </table>
                <?php
                }
                if(empty($selectie)){
                    ?>
                    <h3 style="margin:auto;">Geen Auto('s) Gevonden</h3>
                <?php
                }
            ?>
        </div>
    </body>
</html>