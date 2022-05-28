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
    
</body>
</html>