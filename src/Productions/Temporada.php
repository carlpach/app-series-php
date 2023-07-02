<?php

    namespace CarloWa5x\ExerSeries\Productions;

    class Temporada {

        public int $number;
        public int $year;
        public array $capitulosList = [];

        public function __construct(int $number, int $year) {
            $this->number = $number;
            $this->year = $year;
        }

        public function addCapitulo($capitulo) {
            array_push($this->capitulosList, $capitulo); 
        }

        public function getCapitulos() {
            return $this->capitulosList;
        }

    }
