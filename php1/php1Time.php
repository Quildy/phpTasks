<?php
$tittleName = "Актуальное Время";
$h1Text = "Отображение текущего времени";
$h2Text = "Сейчас: ";

$result = timeCheck();

function timeCheck()
{
    $hour = "Часы"; // date("H")
    $minutes = "Минуты"; // date("i")
    if (date("H") == 0 || (date("H") >= 5 && date("H")<=20))
    {
        $hour = " часов ";
    }
    elseif ((date("H") >= 2 && date("H")<= 4) || date("H") == 22 || date("H") 
        == 23)
    {
        $hour = " часа ";
    }
    else
    {
        $hour = " час ";
    }
    
    if (date("1") % 10 == 1)
    {
        $minutes = " минута";
    }
    elseif (date("i") > 5 && date("i") < 20)
    {
        $minutes = " минут ";
    }
    elseif (date("i") % 10 >= 2 && date("i") % 10 <= 4)
    {
        $minutes = " минуты";
    }
    else
    {
        $minutes = " минут";
    }
    return date("H") + 2 . $hour . date("i") . $minutes;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$tittleName?></title>
</head>
<body>
<h1 align = "center"><?=$h1Text?> </h1>
<h2><?=$h2Text . $result?></h2>
</body>
</html>