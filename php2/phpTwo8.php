<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задание 8</title>
</head>
<body>
<h1 align="center">Автомобили разных стран</h1>
<?php
$cars = [
    'Германия' => ['Mercedes', 'Porsche', 'BMW'],
    'США' => ['Tesla', 'Mustang', 'Ford'],
    'Чехия' => ['Skoda', 'Tatra', 'Praga'],
    'Россия' => ['Lada', 'UAZ', 'GAZ'],
    'Франция' => ['Renault', 'Peugeot', 'Bugatti']
];

foreach($cars as $keys => $values)
{
    echo "<ul>";
    echo "<li>" . $keys . "</li>";
    foreach($values as $keys)
    {
        echo "<ul>" . $keys . "</ul>";
    }
    echo "</ul>";
}
?>
</body>
</html>