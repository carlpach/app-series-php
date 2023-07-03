<?php

    namespace Carlos\AppSeries\Productions;

    class Temporada {

        public int $number;
        public int $year;
        public array $capitulosList = [];

        public function __construct(int $number, int $year) {
            $this->number = $number;
            $this->year = $year;
        }

        public function addCapitulo(Capitulo $capitulo) {
            // array_push($this->capitulosList, $capitulo);
            // o hacer esto. Es mas habitual:
            $this->capitulosList[] = $capitulo;
 
        }

        public function getCapitulos() {
            return $this->capitulosList;
        }

    }
