<?php 
    require_once "Lutar.php";
    class Lutador implements Lutar {
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        public function apresentar() {
            echo "Lutador: " .$this->getNome();
            echo "Origem: " .$this->getNacionalidade();
            echo $this->getIdade() ." anos";
            echo $this->getAltura() ." m de altura";
            echo "Pesando: " .$this->getPeso();
            echo "Vítorias: " .$this->getVitorias();
            echo "Derrotas: " .$this->getDerrotas();
            echo "Empates: " .$this->getEmpates();
        }

        public function status() {
            echo $this->getNome();
            echo "do peso " .$this->getCategoria();
            echo $this->getVitorias() ." Vítorias";
            echo $this->getDerrotas() ."Derrotas";
            echo $this->getEmpates() ."Empates";
        }

        public function ganharLuta() {
            $this->setVitorias($this->getVitorias() + 1);
        }

        public function perderLuta() {
            $this->setDerrotas($this->getDerrotas() + 1);
        }

        public function empatarLuta() {
            $this->setEmpates($this->getEmpates() + 1);
        }

        // Métodos Especiais.
        public function __construct()
        {
            $this->nome = $no;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getNacionalidade() {
            return $this->nacionalidade;
        }

        public function getIdade() {
            return $this->idade;
        }

        public function getAltura() {
            return $this->altura;
        }

        public function getPeso() {
            return $this->peso;
        }

        public function getCategoria() {
            return $this->categoria;
        }

        public function getVitorias() {
            return $this->vitorias;
        }

        public function getDerrotas() {
            return $this->derrotas;
        }

        public function getEmpates() {
            return $this->empates;
        }

        // setMetodos
        public function setNome($no) {
            $this->nome = $no;
        }

        public function setNacionalidade($na) {
            $this->nacionalidade = $na;
        }

        public function setIdade($id) {
            $this->idade = $id;
        }

        public function setAltura($al) {
            $this->altura = $al;
        }

        public function setPeso($pe) {
            $this->peso = $pe;
            $this->setCategoria();
        }

        public function setCategoria($ca) {

            if ($this->getPeso() < 52.2) 
            {
                $this->setCategoria("Inválido");
            } 
            elseif ($this->getPeso() <= 70.3) 
            {
                $this->setCategoria("Leve");
            } 
            else if ($this->getPeso() <= 83.9) 
            {
                $this->setCategoria("Médio");
            }
            else if ($this->getPeso() <= 120.2)
            {
                $this->setCategoria("Pesado");
            }
            else
            {
                $this->setCategoria("Inválido");
            }
        }   

        public function setVitorias($vi) {
            $this->vitorias = $vi;
        }

        public function setDerrotas($de) {
            $this->derrotas = $de;
        }

        public function setEmpates($em) {
            $this->empates = $em;
        }
    }
?>