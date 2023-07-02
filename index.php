<?php

    require_once "vendor/autoload.php";

    use CarloWa5x\ExerSeries\Productions\Serie;
    use CarloWa5x\ExerSeries\Productions\Temporada;
    use CarloWa5x\ExerSeries\Productions\Capitulo;
    require_once "utils.php";

    // init objects
    $serieFriends = new Serie("Friends", "Comedy");
    $tempUno = new Temporada(1, 2018);
    echo $_POST["number"];
    echo gettype($_POST["number"]);
    echo is_string($_POST["number"]);
    $cap1 = new Capitulo($_POST["titulo"], new DateTime($_POST["fecha"]), floatval($_POST["valoracion"]), intval($_POST["number"]), intval($_POST["duration"]));

    $number = $_POST["fecha"];
    echo $cap1->fecha->format('d F, Y');

    $serieFriends->addTemporada($tempUno);
    echo "<h2>temporada de la serie $serieFriends->name</h2>";
    foreach ($serieFriends->getTemporadas() as $key => $temp) {
        echo "<p># $temp->number</p>";
        echo "<p>year $temp->year</p>";

    }
    
    $tempUno->addCapitulo($cap1);

    // get all capitulos of a serie in a given season
    $allCapitulos = getCapitulos($tempUno);

    require_once "index.html";