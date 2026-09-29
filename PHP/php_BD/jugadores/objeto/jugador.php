<?php
    class Jugador{
        public $dorsal;
        public $nombre;

        function __construct($dorsal = 10, $nombre = "Koke"){
            $this->dorsal=$dorsal;
            $this->nombre=$nombre;
        }
    }
?>