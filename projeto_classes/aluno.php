<?php
    require_once "Usuario.php";

    class Aluno extends Usuario {
        private $matricula;
    

        public function __construction($nome, $email, $matricula) {
            parent::__construction($nome, $email);
            $this->matricula = $matricula;
        }
        
        public function getMatricula() {
            return $this->matricula;
        }

        public function exibirInfo() {
            return parent::exibirInfo() . " | Matricula: {$this->matricula}";
        }

        public function estudar() {
            return "{$this->nome} está estudando...";
        }
    }
    


?>