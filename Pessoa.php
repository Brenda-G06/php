<?php
class Pessoa{ 
 public $nome;
 private $email;
 protected $telefone;

    public function falar(){
    echo '<p>Pessoa está falando</p>';
}

public function getNome() {
    return $this->nome;
}

public function setNome($nome) {
    $this->nome = $nome;
}


public function getEmail() {
    return $this->email;
}

public function setEmail($email) {
    $this->email = $email;
}


public function getTelefone() {
    return $this->telefone;
}

public function setTelefone($telefone) {
    $this->telefone = $telefone;
}
}
?>
