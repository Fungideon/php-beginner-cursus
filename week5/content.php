<body>
    <article>
        <h3>Mijn Favo Albums</h3>
        <table>
                <?php
                    include "functies.php";
                    $albums = maakAlbumArray();
                foreach ($albums as $label => $waarde) {
                    echo "<tr>";
                    echo "<td>".$label."</td><td>".$waarde."</td>";
                    echo "</tr>";
                }
                ?>
        </table>
    </article>
    <article>
        <h3>Celcius naar Fahrenheit</h3>
        <?php
        echo "32 graden celcius is ".toFahrenheit(32)." graden fahrenheit";
        ?>
    </article>
    <article>
        <h3>Is deelbaar door drie?</h3>
        <?php
        echo "is 6 deelbaar door drie? ";
        if(checkDeelDrie(6)){
            echo "waar";
        }else {
            echo "nietwaar";
        }
        ?>
    </article>
    <article>
        <h3>Tekst Omkeren</h3>
        <?php
        echo "\"Hello World!\" is omgedraait: ".reverseString("Hello World!");
        ?>
    </article>
