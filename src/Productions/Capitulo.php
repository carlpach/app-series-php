<?php

    namespace Carlos\AppSeries\Productions;

    use Carlos\AppSeries\MultimediaElement;
    use DateTime;

    class Capitulo  extends MultimediaElement {
        public string $titulo;
        public DateTime $fecha;
        public float $valoracion;
        public int $number;
        public float $duration;

        public function __construct(string $titulo, DateTime $fecha, float $valoracion, int $number, float $duration)
        {
            $this->titulo = $titulo;
            $this->fecha = $fecha;
            $this->valoracion = $valoracion;
            $this->number = $number;
            $this->duration = $duration;   
        }

    }

