<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>

    <form action="index.php" method="get">
        <input type="number" name="number" required>
        <input type="submit" value="Submit">
    </form>

</body>

</html>


<?php
if (isset($_GET['number']) && $_GET['number'] <= 1000){
$num = $_GET['number'];
$birlik = $num % 10;
$onlik = (($num%100) - $birlik) / 10;
$yuzlik = ($num - ($num%100))/100;
// echo $onlik;
// echo $birlik;

switch ($yuzlik) {
    case '1':
        echo 'biryuz ';
        break;
    case '2':
        echo 'ikkiyuz ';
        break;
    case '3':
        echo 'uchuz ';
        break;
    case '4':
        echo 'tortyuz ';
        break;
    case '5':
        echo 'beshyuz ';
        break;
    case '6':
        echo 'oltiyuz ';
        break;
    case '7':
        echo 'yetiyuz ';
        break;
    case '8':
        echo 'sakkizyuz ';
        break;
    case '9':
        echo 'toqizyuz ';
        break;
    case '10':
        echo 'ming';
        break;
}

switch ($onlik) {
    case '1':
        echo 'O\'n ';
        break;
    case '2':
        echo 'Yigirma ';
        break;
    case '3':
        echo 'O\'ttiz ';
        break;
    case '4':
        echo 'Qirq ';
        break;
    case '5':
        echo 'Ellik ';
        break;
    case '6':
        echo 'Oltmish ';
        break;
    case '7':
        echo 'Yetmish ';
        break;
    case '8':
        echo 'Sakson ';
        break;
    case '9':
        echo 'To\'qson ';
        break;
    case '10':
        echo 'Yuz ';
        break;
}

switch ($birlik) {
    case '1':
        echo 'bir';
        break;
    case '2':
        echo 'ikki ';
        break;
    case '3':
        echo 'uch';
        break;
    case '4':
        echo 'tort';
        break;
    case '5':
        echo 'besh';
        break;
    case '6':
        echo 'olti';
        break;
    case '7':
        echo 'yetti';
        break;
    case '8':
        echo 'sakkiz';
        break;
    case '9':
        echo 'to\'qqiz';
        break;
}
}
?>