<?php
echo "1) ";
$a = -3;
$b = 4;
if ($a > 0 && $b > 0)
{
    echo $a - $b;
}
elseif($a < 0 && $b < 0)
{
    echo $a * $b;
}
else
{
    echo $a + $b;
}

echo "<br/> 2) ";
$a = 7; // Чтобы не делать 15 кейсов по одному и тому же принципу
// взял число ближе к концу интервала
switch($a)
{
    case 7: echo 7 . " ";
    case 8: echo 8 . " ";
    case 9: echo 9 . " ";
    case 10: echo 10 . " ";
    case 11: echo 11 . " ";
    case 12: echo 12 . " ";
    case 13: echo 13 . " ";
    case 14: echo 14 . " ";
    case 15: echo 15;
        break;
}

echo "<br/> 3) ";
function operationGo($arg1, $arg2, $operation)
{
    switch($operation)
    {
        case "Сложение":
            echo $arg1 + $arg2;
            break;
        case "Вычитание":
            echo $arg1 - $arg2;
            break;
        case "Произведение":
            echo $arg1 * $arg2;
            break;
        case "Деление":
            echo $arg1 / $arg2;
            break;
    }
}

operationGo(6, 4, "Произведение");

$tittlePHP = "Задания по PHP";
$checkYear4 = "<br/> 4) Сейчас год: " . date("o");

echo "<br/> 5)";
$num = 1;

echo "<br/> 0 - это ноль <br/>";
do {
    if ($num%2==0)
    {
        echo "$num - четное число <br>";
    }
    else
    {
        echo "$num - нечетное число <br>";
    }
    $num++;
} while ($num <= 10);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $tittlePHP; ?></title>
</head>
<body>
<H3><?php echo $checkYear4; ?></h3>
</body>
</html>
