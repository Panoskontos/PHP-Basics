<?PHP
echo "This is a second page";

$first = "panos";
$last = "konτos";
define("name","$first $last");

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