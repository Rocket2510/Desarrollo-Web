<?php include 'includes/header.php';

//INTERFACES
/**
 * Las interfaces te van a permitir agrupar una serie de declaraciones, de funciones pero no se van a implementar 
 * 
 */

interface TransporteInterface{
    public function getInfo() : string;
    public function getRuedas() : int;
    public function getColor() : string;

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


include 'includes/footer.php';