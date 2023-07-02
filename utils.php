<?php

    function getCapitulos($temporada) {

        // get all capitulos of a serie in a given season
        $capitulos = [];
        foreach ($temporada->getCapitulos() as $key => $capitulo) {
            array_push($capitulos, $capitulo);
        }
        return $capitulos;
    }
        