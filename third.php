<?PHP 
// Array methods
$nums = [4,2,6,12,76,2,7];
sort($nums);
array_push($nums,"New");
array_push($nums,"Go");
array_pop($nums);
echo var_dump($nums);

echo "<br>";

$chars = [
    "goku" => [
        "power"=>100,
        "pride"=>0,
        "fun"=>100,
    ],
    "vegeta" => [
        "power"=>99,
        "pride"=>1000,
        "fun"=>0.001,
    ],
    "krillin" => [
        "power"=>9,
        "pride"=>4,
        "fun"=>78,
    ],
];

$chars["goku"]["power"] = 101;
echo $chars["goku"]["power"];

echo "<br>";

// Loops
// For loop
for ($i =0; $i<10; $i++){
    echo "$i ";
}

// while loop
$i=0;
while ($i < 10){
    echo "<h3> $i </h3>";
    $i++;
}

// Loop through array
$anime = ["Naruto", "one piece","Death Note"];
$j = 0;
while ($j<count($anime)){
    echo "<p>",$anime[$j],"</p>";
    $j++;
}

// For each loop | EASIER OPTION
foreach ($anime as $a){
    echo "<hr>";
    echo "<p>$a</p>";
}
echo "<hr>";


// Functions
function sayHello($name){
    // this is a function used for saying hi
    echo "Hello {$name} ";
};

function math($a,$b){
    return ($a*$b)+($a/$b);
};

sayHello("Mark");
sayHello("Dennis");
sayHello("Raul");

echo math(3,6);


// Require
// Use file functions.php
// LIKE IMPORT 
require('functions.php');
printAge(26);


// <!-- SUPER GLOBALS -->
// <!-- Variables that are always accessible, regardless of scope and you can access from anywhere -->
$car = "Honda";

function echoCar(){
    // say you are using global var
    global $car;
    echo $car;

    // Or instead do this
    echo $GLOBALS["car"];

    // Others you can try
    // visit superglobals to see
    echo $_SERVER["HTTP_HOST"];
}
echoCar();

// Usefull when you want to pull or pass data from url
// GET
if(isset($_GET["username"])){
    echo "GET <h1>username: {$_GET["username"]}</h1>";
}

// POST
// You need form to do this
if(isset($_POST["username"])){
    echo "POST <h1>username: {$_POST["username"]}</h1>";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- // POST -->
    <form action="third.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username">
        <button type="submit">Submit</button>
    </form>
</body>
</html>