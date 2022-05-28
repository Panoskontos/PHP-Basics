<?php
// COOKIES go to applocation and see them 
// when something follows you is because of this
$key = "Panos_cookie";
$product = "M1 Pro";
setcookie($key,$product, time() + (86400*30),"/"); //86400 = 1 day

if(isset($_COOKIE["Panos_cookie"])){
    echo $_COOKIE["Panos_cookie"];
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