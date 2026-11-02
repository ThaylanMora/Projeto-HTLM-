<?php
//data transfer object - transferencia dos dados do formulario (view)
class UsuarioDTO{
    private $idUsu;
    private $nomeUsu;
    private $cpfUsu;
    private $dtNascimentoUsu;
    private $telefoneWhatsApp;
    private $emailUsu;
    private $senhaUsu;
    private $perfilUsu;
    private $situacaoUsu;
    

    public function setSituacaoUsu($situacaoUsu){
        $this->situacaoUsu = $situacaoUsu;

    }
    public function getSituacaoUsu(){
        return $this->situacaoUsu;
    }
    //
    public function setPerfilUsu($perfilUsu){
        $this->perfilUsu = $perfilUsu;

    }
    public function getPerfilUsu(){
        return $this->perfilUsu;
    }
    public function setSenhaUsu($senhaUsu){
        $this->senhaUsu = $senhaUsu;

    }
    public function getSenhaUsu(){
        return $this->senhaUsu;
    }
    
    public function setEmailUsu($emailUsu){
        $this->emailUsu = $emailUsu;

    }
    public function getEmailUsu(){
        return $this->emailUsu;
    }
    
    public function setTelefoneWhatsApp($telefoneWhatsApp){
        $this->telefoneWhatsApp = $telefoneWhatsApp;

    }
    public function getTelefoneWhatsApp(){
        return $this->telefoneWhatsApp;
    }

    public function setCpfUsu($cpfUsu){
        $this->cpfUsu = $cpfUsu;

    }
    public function getCpfUsu(){
        return $this->cpfUsu;
    }
    
    public function setNomeUsu($nomeUsu){
        $this->nomeUsu = $nomeUsu;

    }
    public function getNomeUsu(){
        return $this->nomeUsu;
    }

    public function setidUsu($idUsu){
        $this->idUsu = $idUsu;

    }
    public function getidUsu(){
        return $this->idUsu;
    }

    public function setDtNascimentoUsu($dtNascimentoUsu){
        $this->$dtNascimentoUsu = $dtNascimentoUsu;

    }
    public function getDtNascimentoUsu(){
        return $this->dtNascimentoUsu;
    }
}
?>
