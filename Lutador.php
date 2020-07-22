<?php 
    class Lutador {
        private $nome;
        private $nacionalidade;
        private $sexo, $idade, $altura, $peso;
        private $categoria, $vitorias, $derrotas, $empates;


        /*====== Lutar ======== */
        public function apresentar() {
            if ($this->sexo == "M") 
            {
                echo "<h4>Apresentação do Lutador " .$this->getNome() ."</h4>";

                echo "<p>CHEGOU A HORA! O Lutador " .$this->getNome();
                echo " veio diretamente de " .$this->getNacionalidade();
                echo ", ele tem " .$this->getIdade() ." anos, pesa " .$this->getPeso() ." Kg ";
                echo "e com " .$this->getAltura() ." m de altura.";
                echo "<br>Com " .$this->getVitorias() ." vítorias, ";
                echo $this->getDerrotas() ." derrotas e ";
                echo $this->getEmpates() ." empates</p>";
            }
            elseif ($this->sexo == "F") 
            {
                echo "<h4>Apresentação da Lutadora " .$this->getNome() ."</h4>";

                echo "<p>CHEGOU A HORA! A Lutadora " .$this->getNome();
                echo " veio diretamente de " .$this->getNacionalidade();
                echo ", ela tem " .$this->getIdade() ." anos, pesa " .$this->getPeso() ." Kg ";
                echo "e com " .$this->getAltura() ." m de altura.";
                echo "<br>Com " .$this->getVitorias() ." vítorias, ";
                echo $this->getDerrotas() ." derrotas e ";
                echo $this->getEmpates() ." empates</p>";
            }
        }

        public function status() {
            if ($this->sexo == "M")
            {
                echo "<h4>Status do Lutador " .$this->getNome() ."</h4>";
                echo "<p>" .$this->getNome() ." é um peso " .$this->getCategoria();
                echo " e já ganhou " .$this->getVitorias() ." vezes,";
                echo " perdeu " .$this->getDerrotas() ." vezes e";
                echo " empatou " .$this->getEmpates() ." vezes!</p>";
            }
            elseif ($this->sexo == "F") 
            {
                echo "<h4>Status da Lutadora " .$this->getNome() ."</h4>";
                echo "<p>" .$this->getNome() ." é um peso " .$this->getCategoria();
                echo " e já ganhou " .$this->getVitorias() ." vezes,";
                echo " perdeu " .$this->getDerrotas() ." vezes e";
                echo " empatou " .$this->getEmpates() ." vezes!</p>";
            }
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

        public function __construct($no, $na, $sex, $id, $al, $pe, $vi, $de, $em)
        {
            $this->nome = $no;
            $this->nacionalidade = $na;
            $this->sexo = $sex;
            $this->idade = $id;
            $this->altura = $al;
            $this->setPeso($pe);
            $this->vitorias = $vi;
            $this->derrotas = $de;
            $this->empates = $em;
        }
        
        public function getNome() {
            return $this->nome;
        }
        
        public function getNacionalidade() {
            return $this->nacionalidade;
        }

        public function getSexo() {
            return $this->sexo;
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

        private function setSexo() {
            if ($this->sexo === "M") {
                $this->sexo = "Masculino";
            }
            elseif ($this->sexo === "F") {
                $this->sexo = "Feminino";
            }
            else {
                $this->sexo = "Sexo Inválido";
            }
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
        
        private function setCategoria() {
        
            if ($this->peso < 52.2) 
            {
                $this->categoria = "Inválido";
            } 
            elseif ($this->peso <= 70.3) 
            {
                $this->categoria = "Leve";
            } 
            else if ($this->peso <= 83.9) 
            {
                $this->categoria = "Médio";
            }
            else if ($this->peso <= 120.2)
            {
                $this->categoria = "Pesado";
            }
            else
            {
                $this->categoria = "Inválido";
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