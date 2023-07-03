<?php

    require_once "vendor/autoload.php";

    use Carlos\AppSeries\Productions\Serie;
    use Carlos\AppSeries\Productions\Temporada;
    use Carlos\AppSeries\Productions\Capitulo;
    require_once "utils.php";


    // init objects
    $serieFriends = new Serie("Friends", "Comedy");
    $tempUno = new Temporada(1, 2018);

    $serieFriends->addTemporada($tempUno);
    echo "<h1>Serie $serieFriends->name</h1>";
    echo "<h3>Temporadas</h3>";
    foreach ($serieFriends->getTemporadas() as $key => $temp) {
        echo "<p># $temp->number</p>";
        echo "<p>year $temp->year</p>";

    }

    require_once "index.html";

    // isempty() para arrays
    if (isset($_POST["titulo"])) {
        # code...
        $cap1 = new Capitulo($_POST["titulo"], new DateTime($_POST["fecha"]), floatval($_POST["valoracion"]), intval($_POST["number"]), intval($_POST["duration"]));

        $number = $_POST["fecha"];

        $tempUno->addCapitulo($cap1);

        // get all capitulos of a serie in a given season
        $allCapitulos = getCapitulos($tempUno);


        echo "<h3 class='b-section' >Capitulos de la temporada $tempUno->number de la serie $serieFriends->name</h3>";

        echo "<div class='capitulos'>";
        foreach ($allCapitulos as $key => $capi) {
            echo "<div class='capitulos__item'>";
                echo "<p>$capi->titulo</p>";
                $fechaTest = $capi->fecha->format('d F, Y');
                echo "<p>$fechaTest</p>";
                echo "<p>valoracio'n $capi->valoracion</p>";
            echo "</div>";

        }
        echo "</div>";
    }


