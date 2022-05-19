<?php
class Calculadora {

    private float $n1;
    private float $n2;

    public function __construct($n1, $n2)
    {
        $this->n1 = $n1;
        $this->n2 = $n2;
    }

    public function soma()
    {
        return $this->n1 + $this->n2;
    }

    
    public function subtracao()
    {
        return $this->n1 - $this->n2;
    }

    public function __destruct()
    {
        echo "Obrigado pela visita!";
    }
}
