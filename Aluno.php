<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa{
    private $matricula;

    public function escrever(){
        echo '<p>Aluno está escrevendo</p> ';
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }
}
?>

