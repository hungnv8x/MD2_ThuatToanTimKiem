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
    <textarea name="phone"></textarea>
    <button>Phan loai</button>
</form>
</body>
</html>
<?php
$arrVT = [];
$arrMB = [];
$arrVN = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_REQUEST["phone"];
    $phones = explode(",", $str);
    for ($i = 0; $i < count($phones); $i++) {
        if (checkPhone($phones[$i]) == "VT") {
            $arrVT[] = $phones[$i];
        }elseif (checkPhone($phones[$i]) == "VN"){
            $arrVN[] = $phones[$i];
        }else{
            $arrMB[] = $phones[$i];
        }
    }
    if (!empty($arrVT)){
        echo "So Viettel : ";
        for ($i = 0; $i < count($arrVT) ;$i++){
            echo $arrVT[$i]." ";
        }
    }
    echo "<br>";
    if (!empty($arrVN)){
        echo "So Vinaphone la : ";
        for ($i = 0; $i < count($arrVN) ;$i++){
            echo $arrVN[$i]." ";
        }
    }
    echo "<br>";
    if (!empty($arrMB)){
        echo "So Mobifone : ";
        for ($i = 0; $i < count($arrMB) ;$i++){
            echo $arrMB[$i]." ";
        }
    }
}

function checkPhone($phone)
{
    $dauSo = substr($phone, 0, 3);
    switch ($dauSo) {
        case "096":
        case "097":
        case "098":
        case "086":
        case "032":
        case "033":
        case "034":
        case "035":
        case "036":
        case "037":
        case "038":
        case "039":
            return "VT";
        case "088":
        case "084":
        case "094":
        case "083":
        case "085":
        case "081":
        case "082":
            return "VN";
        case "090":
        case "093":
        case "089":
        case "070":
        case "076":
        case "077":
        case "078":
        case "079":
            return "MB";
    }
}

?>

