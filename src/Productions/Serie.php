<?php

    namespace Carlos\AppSeries\Productions;

    class Serie {

        public array $temporadaList = [];
        public string $name;
        public string $genero;

        public function __construct(string $name, string $genero)
        {
            $this->name = $name;
            $this->genero = $genero;
            
        }

        public function addTemporada($temporada) {
            array_push($this->temporadaList, $temporada); 
        }

        public function getTemporadas() {
            return $this->temporadaList;
        }

    }