<?php include 'includes/header.php';

//POLIMORFISMO
/**
 * 
 * 
 */

interface TransporteInterface{
    public function getInfo() : string;
    public function getRuedas() : int;
    //public function getColor() : string;

}

class Transporte implements TransporteInterface{
    protected $ruedas;
    protected $capacidad;

    public function __construct(int $ruedas, int $capacidad){
        $this -> ruedas = $ruedas;
        $this -> capacidad = $capacidad;
    }

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas";
    }

    public function getRuedas():int{
        return $this->ruedas;
    }

    
}

class Automovil extends Transporte implements TransporteInterface{
    protected $color;
    public function __construct(int $ruedas, int $capacidad, string $color){
        $this -> ruedas = $ruedas;
        $this -> capacidad = $capacidad;
        $this->color = $color;
    }

    public function getInfo() : string {
        return "El transporte AUTO tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas y
        tiene el color " . $this->color;
    }

    public function getColor() : string {
        return "El color es: " . $this->color;
    }
}

echo "<pre>";
var_dump($transporte = new Transporte(8, 20));
var_dump($auto = new Automovil(4, 4,"azul"));

echo $transporte->getInfo(). "<br>";
echo $auto->getInfo(). "<br>";
echo $auto->getColor();
echo "</pre>";


include 'includes/footer.php';