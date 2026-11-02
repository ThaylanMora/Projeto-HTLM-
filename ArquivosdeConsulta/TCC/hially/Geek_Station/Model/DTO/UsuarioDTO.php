<?php
    class UsuarioDTO{
        private $idUsu;
        private $nomeUsu;
        
        private $cpfUsu;
        // private $dtNascimentoUsu;
       
        private $enderecoUsu;
        private $complementoUsu;
        private $cidadeUsu;
        private $teleWhatsAppUsu;
        private $emailUsu;
        private $senhaUsu;
        private $ufUsu;

    public function setidUsu($idUsu){
            $this->idUsu = $idUsu;
        }
        public function getidUsu(){
            return $this->idUsu;
        }
    
       ////
        public function setnomeUsu($nomeUsu){
            $this->nomeUsu = $nomeUsu;
        }
        public function getnomeUsu(){
            return $this->nomeUsu;
        }
        public function setCpfUsu($cpfUsu){
            $this->cpfUsu = $cpfUsu;
        }
        public function getCpfUsu() {
            return $this->cpfUsu;
       
    }
        public function setenderecoUsu($enderecoUsu){
            $this->enderecoUsu = $enderecoUsu;
        }
        public function getenderecoUsu() {
            return $this->enderecoUsu;
       
    }
    //     public function setdtNascimentoUsu($dtNascimentoUsu){
    //         $this->dtNascimentoUsu = $dtNascimentoUsu;
    //     }
    //     public function getdtNascimentoUsu() {
    //         return $this->dtNascimentoUsu;
       
    // }
        public function setcomplementoUsu($complementoUsu){
            $this->complementoUsu = $complementoUsu;
        }
        public function getcomplementoUsu() {
            return $this->complementoUsu;
       
    }

        public function setcidadeUsu($cidadeUsu){
            $this->cidadeUsu = $cidadeUsu;
        }
        public function getcidadeUsu() {
            return $this->cidadeUsu;
       
    }
        public function setteleWhatsAppUsu($teleWhatsAppUsu){
            $this->teleWhatsAppUsu = $teleWhatsAppUsu;
        }
        public function getteleWhatsAppUsu() {
            return $this->teleWhatsAppUsu;
       
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