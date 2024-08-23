<?php
require_once 'Veiculo.php';
class Carro extends Veiculo {
    private $motor;

    public function getMotor() {
        return $this->motor;
    }

    public function setMotor($motor) {
        $this->motor = $motor;
    }
    public function velocidade() {
        return '<p>Velocidade de 100Km/h</p>';
    }
}
?>