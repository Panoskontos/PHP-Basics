<?

// Class is a blueprint that you can use multiple times
class Car{
    public $power = 100;
    private $cost = 22000;
    // constructor
    public function __construct($brand){
        echo "Constructor triggered";
        $this->power = 99;
        $this->brand = $brand;
    }
    // methods
    public function introduce(){
        echo "This is a new ",$this->brand;
    }
}


$c1 = new Car("Honda");
echo "<br>";
echo $c1->brand;
echo $c1->power;
$c1->introduce();
echo var_dump($c1);
echo "<br>";

// Extending classes (Inheritance)
class Benz extends Car{
    public $year=2001;
    public function date_created(){
        echo "It was created $this->year";
    }
}

$b1 = new Benz("Merecedes");
echo "<br>";
echo var_dump($b1);
echo "<br>";
$b1->date_created();