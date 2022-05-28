<?

class Car{
    public $power = 100;
    private $cost = 22000;
    // constructor
    public function __construct($name){
        echo "Constructor triggered";
        $this->power = 99;
        $this->brand = $name;
    }
}


$c1 = new Car("Honda");
echo "<br>";
echo $c1->brand;
echo $c1->power;