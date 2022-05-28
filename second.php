<?PHP
echo "This is a second page";

$first = "panos";
$last = "konτos";
define("name","$first $last");

// Strings Functions
$word = "Now i show you the Kaiken";
echo "<br>";
echo strlen($word);
echo "<br>";
echo str_word_count($word);
echo "<br>";
echo strrev($word);
echo "<br>";
echo strpos($word, "Kaiken");
echo "<br>";
echo str_replace("Kaiken","Garlic Gun",$word);
echo "<br>";
// Find str methods at PHP Reference
// https://www.w3schools.com/php/php_ref_string.asp
echo str_shuffle($word);
// int and float points
$num = 8;
$num2 = 10.2345;
echo "<br>";

echo $num * $num2;
echo "<br>";
// floor returns the nearest int but the type remain float
echo floor($num2);
echo var_dump(floor($num2));
echo "<br>";
echo " GO TO ",M_LOG2E;
echo "<br>";

// PHP math is pretty accurate
$blocks = 230;
$block = sqrt($blocks);
echo $block;
echo "<br>";

// Operators
$result = var_dump(3>=3);
$result = var_dump((3>=3) && (3==3));
// if == returns true
$result = var_dump(('3'===3));
echo $result;
echo "<br>";

// 
$test = (26 * 8)-3;
echo var_dump($test>12);
echo "<br>";

// Conditionals
if ($test<12){
    echo "All good in the hood";
} elseif ($test<1000){
    echo "god damn";
} else {
    echo "Something didn't work";
}

// switch
// More than 3 cases or spesific items e.g. day of week
$name = "Panos";
switch ($name){
    case "Panos":
        echo "Developer";
        break;
        case "Nick":
            echo "Waiter";
            break;
            case "Leo":
                echo "WWE";
                break;
            }
            
// Arrays
// 2 ways array or []
echo "<br>";
$names = ["Goku","vegeta","gohan",23, array(1,2)];
echo $names[0];
echo var_dump($names);

echo "<br>";

// DICT
// assosiated array (hashmap)
$names = [
    "city" => "ATH",
    "population" => "80 dow"
];
echo var_dump($names);
echo "<br>";
echo $names["city"];
echo $names["population"];


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
    <?php
    echo "$first";
    echo "$last<br>";
    echo "<h1>",name,"</h1>";
    ?>
</body>
</html>