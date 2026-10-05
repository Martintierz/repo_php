<?php
    class plato{
        public $nombre;
        public $precio;
        public $ingredientes;
        public $tipo;

        function __construct($nombre = 'migas', $precio = 0, $ingredientes='pan', $tipo = 'primero'){
            $this->nombre = $nombre;
            $this->precio = $precio;
            $this->tipo = $tipo;
        }
    }
?>