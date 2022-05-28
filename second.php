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