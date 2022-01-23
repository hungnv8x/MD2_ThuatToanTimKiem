<?php

session_start();

$arr = range(1, 100);
$_SESSION["left"] = 0 ;
$_SESSION["right"] = 99;

if ($_SERVER["REQUEST_METHOD"]=="POST"){

    if (isset($_REQUEST["nhohon"])){
        $_SESSION["right"]=$_REQUEST["number"];
        $_SESSION["right"] =$_SESSION["right"]-1;
    }
    if (isset($_REQUEST["lonhon"])){
        $_SESSION["left"]=$_REQUEST["number"];
        $_SESSION["left"] = $_SESSION["left"]-1;
    }
    if (isset($_REQUEST["dungroi"])){
        echo "chuan luon";

    }
    print_r($_SESSION);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="number" value="<?php echo $arr[rand($_SESSION["left"],$_SESSION["right"])]  ?>">
    <br>
    <button name="nhohon">Nhỏ Hơn</button>
    <button name="lonhon">Lớn Hơn</button>
    <button name="dungroi">Chuẩn luôn</button>
</form>
</body>
</html>
