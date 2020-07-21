<?php
    require_once "Lutador.php";
    class Luta
    {
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        public function marcarLuta($l1, $l2) {
            if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)) {
                $this->aprovada = true;
                $this->desafiado = $l1;
                $this->desafiante = $l2;
            } else {
                $this->aprovada = false;
                $this->desafiado = null;
                $this->desafiante = null;
            }
        }

        public function lutar() {
            if ($this->aprovada) {
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
                $vencedor = rand(0,2); // Número aléatorio entre 0 e 2.

                switch($vencedor) {
                    case 0: // EMPATE
                        echo "<p>Empatou!</p>";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                    break;

                    case 1: // Ganhou o desafiado
                        echo "<p>" .$this->desafiado->getNome() ." Venceu a luta!</p>";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                    break;

                    case 2: // Ganhou o desafiante
                        echo "<p>" .$this->desafiante->getNome() ." Venceu a Luta!</p>";
                        $this->desafiado->perderLuta();
                        $this->desafiante->ganharLuta();
                    break;
                }
            } else {
                echo "<p>Luta não pode acontecer!</p>";
            }
        }

        // Metodos especiais
        public function getDesafiado() {
            return $this->desafiado;
        }

        public function setDesafiado($d) {
            $this->desafiado = $d;
        }

        public function getDesafiante() {
            return $this->desafiante;
        }

        public function setDesafiante($de) {
            $this->desafiante = $de;
        }

        public function getRounds() {
            return $this->rounds;
        }

        public function setRounds($r) {
            $this->rounds = $r;
        }

        public function getAprovado() {
            return $this->aprovada;
        }

        public function setAprovado($a) {
            $this->aprovada = $a;
        }
    }
?>