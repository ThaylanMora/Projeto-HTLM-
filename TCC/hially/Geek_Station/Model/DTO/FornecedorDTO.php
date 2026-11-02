<?php
    class FornecedorDTO{
        private $idFor;
        
        private $nomeFor;
        private $telefoneFor;
        private $emailFor;
        private $prodOfereFor;
        private $senhaFor;
        private $cnpjFor;
         private $ufFor;

    public function setidFor($idFor){
            $this->idFor = $idFor;
        }
        public function getidUsu(){
            return $this->idFor;
        }
    
       ////
        public function setnomeFor($nomeFor){
            $this->nomeFor = $nomeFor;
        }
        public function getnomeFor(){
            return $this->nomeFor;
        }
        public function settelefoneFor($telefoneFor){
            $this->telefoneFor = $telefoneFor;
        }
        public function gettelefoneFor() {
            return $this->telefoneFor;
       
    }

        public function setemailFor($emailFor){
            $this->emailFor = $emailFor;
        }
        public function getemailFor() {
            return $this->emailFor;
       
    }
        public function setemailUsu($emailUsu){
            $this->emailUsu = $emailUsu;
        }
        public function getemailUsu() {
            return $this->emailUsu;
       
    }
        public function setsenhaUsu($senhaUsu){
            $this->senhaUsu = $senhaUsu;
        }
        public function getsenhaUsu() {
            return $this->senhaUsu;
    }
        public function setufUsu($ufUsu){
            $this->ufUsu = $ufUsu;
        }
        public function getufUsu() {
            return $this->ufUsu;
       
    }


}
?>