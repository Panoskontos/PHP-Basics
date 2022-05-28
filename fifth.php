<?

// Class is a blueprint that you can use multiple times
class Car{
// Difference between private and protected is that private won't get passed down from inheritance
// Stays with the object

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

    // protected 
    protected function store(){
        echo "<hr>";
        echo "sold at the lady";
        echo "<hr>";
    }


    // static var
    public static $city = "ATH";
    // static method
    public static function Mycity(){
        return "My location is ATH";
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
        // use protected method
        $this->store();
        echo "It was created $this->year";
    }
}

$b1 = new Benz("Merecedes");
echo "<br>";
echo var_dump($b1);
echo "<br>";
$b1->date_created();

// You can access static variables any time
echo "<br>";
echo Car::$city;
// and functions
echo Car::Mycity();