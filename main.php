    <?php
    // variables
    $txt = "Me";
    echo "i love $txt";

    $x = 4;
    $y = 10;
    echo $x + $y;
    echo 'i am ', $y, ' how old are you?';

    // PHP is case insencitive
    echo "My first PHP script boy!";
    echo "My first PHP script boy!";
    echo "My first PHP script boy!";

    // PHP Print embed html
    print "<br>This is fun";

    print "<br> <br>";

    // var_dump for type
    $x = 5985;
    $x = 10.365;
    $y = array("Volvo", "BMW");
    var_dump($x);
    print "<br>";
    var_dump($y);
    print "<br>";

    // Object
    class Car
    {
        public $color;
        public $model;
        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }
        public function message()
        {
            return "My car is a " . $this->color . " " . $this->model . "!";
        }
    }

    $c = new Car("WHITE", "Corvette");
    echo $c->message();

    // passing variables
    $name = "Panos Kontos"
    ?>


    <!DOCTYPE html>
    <html>

    <body>
        <br>
        <br>
        <br>
        <!-- Passing variables and html to php -->
        <div style="color:white; background: grey; width:300px; height:200px;">
            <?php echo "<h3> Name: $name </h3>"; ?>
        </div>

    </body>

    </html>