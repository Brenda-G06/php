<?php
require_once 'Veiculo.php'; 
class Bicicleta extends Veiculo {
    private $pedal; 
    public function getPedal() {
        return $this->pedal;
    }
    public function setPedal($pedal) {
        $this->pedal = $pedal;
    }
    public function velocidade() {
        return 'Velocidade de 25Km/h';
    }
}
?>