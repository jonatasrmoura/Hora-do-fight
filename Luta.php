<?php
    require_once "Lutador.php";
    class Luta
    {
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        public function marcarLuta($l1, $l2) {
            
        }

        public function lutar() {

        }

        // Metodos especiais
        public function setDesafiado($lutador) {
            $this->desafiado = $lutador;
        }

        public function getDesafiado() {
            return $this->desafiado;
        }
    }
?>