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
        return self::$city;
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


// What if you want to pass a class to a class
class Inventory{
    public function carTotal($company){
        $companies = [
            "BMW"=> 240,
            "HONDA"=>177
        ];
        return $companies[$company];
    }
}

class HONDA{
    public function __construct(Inventory $inventory){
        echo "Dependency injection";
    }
}

$i = new Inventory;
$h = new HONDA($i);

// Interfaces | Rules for class
interface HumanInterface{
    // which methods we need
    public function carsSold();
    // if it not used give error
}

class Human implements HumanInterface{
    public function __construct($name){
        $this->$name = $name;
    }
    // We need to create this method otherwise we have an error
    public function carsSold(){
        echo "Have sold some cars";
    }
}

$h1 = new Human("Panos");
$h1->carsSold();

// Abstract Classes | Similar to Interface
abstract class Story{
    public function start(){
        echo "story begins";
    }
    public function end(){
        echo "story ends";
    }
}

class Book extends Story{

}
echo "<br>";
$b1 = new Book();
$b1->start();