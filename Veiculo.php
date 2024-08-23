<?php
class Veiculo {
    private $rodas;
    public function getRodas() {
        return $this->rodas;
    }

    public function setRodas($rodas) {
        $this->rodas = $rodas;
    }

    public function velocidade() {
        return '<p>velocidade de 50km/h</p>';
    }
}
?>
