<?php include 'includes/header.php';
//CLASES ABSTRACTAS
/**
 * Son clases que no se pueden instanciar, solamente se pueden heredar
 */
class Transporte{
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

class Bicicleta extends Transporte{
    public function getInfo(): string{
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas y NO GASTA GASOLINA";
    }

}

class Automovil extends Transporte{
    protected $transmision;

    public function __construct(int $ruedas, int $capacidad, string $transmision){
        $this -> ruedas = $ruedas;
        $this -> capacidad = $capacidad;
        $this -> transmision = $transmision;
    }

    public function getTransmision():String{
        return $this->transmision;
    }
    

}

$trasporte = new Transporte(1, 3);
echo $trasporte->getInfo();

echo "<hr>";

$bicicleta = new Bicicleta(2, 1);

echo $bicicleta->getInfo() . "<br>";
echo $bicicleta->getRuedas();
echo "<hr>";

$auto = new Automovil(4, 5, "Manual");
echo $auto -> getInfo();
echo $auto -> getTransmision();

include 'includes/footer.php';