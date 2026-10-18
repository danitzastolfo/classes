<?php
class Triangulo{
    public float $base;
    public float $altura;
    public float $area;

    public function calculo(){
        return ($this->base*$this->altura)/2;
    }
    
    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
        $this->area = $this->calculo();
    }
}
$triangulo = new Triangulo(10, 5);
echo "<pre>";
print_r($triangulo);
echo "</pre>";

?>