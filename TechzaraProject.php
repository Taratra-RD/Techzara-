<?php
interface Car
{
    public function getTires();
    public function getWheel();
    public function getDoors();
}

class WolksWagen implements Car
{
    /*----------------------------------------VARIABLES----------------------------------------*/
    public $Tires = "4";
    protected $Wheel = "1";
    private $Doors = "2";
    /*----------------------------------------VARIABLES----------------------------------------*/
    /*----------------------------------------METHODS----------------------------------------*/
    public function display(){
        echo "This a WolksWagen car, which has $Tires tires, $Wheel wheel, $Doors doors.";
    }
    /* 
    //WARING ON DISPLAY METHODS
    //I've got some errorwarnings on this method saying that my variables is not defined,
    //however it's already declared inside this class and I've given to each of them a default value (Thanks :p) 

    Warning: Undefined variable $Tires in C:\Users\taratra\Documents\Projet\TechzaraProject.php on line 18
    PHP Warning:  Undefined variable $Wheel in C:\Users\taratra\Documents\Projet\TechzaraProject.php on line 18

    Warning: Undefined variable $Wheel in C:\Users\taratra\Documents\Projet\TechzaraProject.php on line 18
    PHP Warning:  Undefined variable $Doors in C:\Users\taratra\Documents\Projet\TechzaraProject.php on line 18

    Warning: Undefined variable $Doors in C:\Users\taratra\Documents\Projet\TechzaraProject.php on line 18
    This a WolksWagen car, which has  tires,  wheel,  doors.
     */
    /*----------------------------------------METHODS----------------------------------------*/
    /*----------------------------------------GET&SET----------------------------------------*/
    public function getTires()
    {
        return $this->Tires;
    }
    public function setTires($tires)
    {
        $this->Tires = $tires;
        return  $this;
    }
    /*--------------------------------------------------------------------------------*/
    public function getWheel()
    {
        return $this->Wheel;
    }
    public function setWheel($wheel)
    {
        $this->Wheel = $wheel;
        return  $this;
    }
    /*--------------------------------------------------------------------------------*/
    public function getDoors()
    {
        return $this->Doors;
    }
    public function setDoors($doors)
    {
        $this->Doors = $doors;
        return  $this;
    }
    /*----------------------------------------GET&SET----------------------------------------*/
}

class Passat extends WolksWagen
{
    /*----------------------------------------VARIABLES----------------------------------------*/
    public $Speed;
    protected $Fuel;
    private $Ride;
    /*----------------------------------------VARIABLES----------------------------------------*/
    /*----------------------------------------GET&SET----------------------------------------*/
    public function getSpeed()
    {
        return $Speed;
    }
    public function setSpeed($speed)
    {
        $this->Speed = $speed;
        return  $this;
    }
    /*--------------------------------------------------------------------------------*/
    public function getFuel()
    {
        return $Fuel;
    }
    public function setFuel($fuel)
    {
        $this->Fuel = $fuel;
        return  $this;
    }
    /*--------------------------------------------------------------------------------*/
    public function getRide()
    {
        return $Ride;
    }
    public function setRide($ride)
    {
        $this->Ride = $ride;
        return  $this;
    }
    /*----------------------------------------GET&SET----------------------------------------*/
}

$car1 = new Passat();
$car1->setTires("four\n");
$car1->setWheel("one\n");
$car1->setDoors("two\n");
echo $car1->getTires();
echo $car1->getWheel();
echo $car1->getDoors();

$car1->display();

?>