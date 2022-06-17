<?php
$db = mysqli_connect("localhost", "root", "root", 'mystoredb');

$result = mysqli_query($db, "SELECT * FROM catalog");

$catalog = [];

while ($row = mysqli_fetch_assoc($result))
{
    $catalog[] = $row;
}
?>

<!doctype html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Лаб11. Каталог товаров из БД.</title>
</head>
<body>
<h2>Каталог товаров</h2>
<?php foreach ($catalog as $item): ?>
    <div class = "itemcatalog">
        <img width="250px" src="img/<?= $item['image']?>" alt="<?= $item['image'] ?>"><br>
        <a href="/catalogitem.php?id=<?=$item['id']?>">
            <?= $item['name'] ?><br>
        </a class = "priceText">
        Цена: <?= $item['price'] ?> руб.
    </div>
<?php endforeach; ?>
</body>
</html>
