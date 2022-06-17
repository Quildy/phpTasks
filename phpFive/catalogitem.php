<?php
$id = $_GET['id'];
$page_id = $_GET['page_id'];

$db = mysqli_connect("localhost", "root", "root", 'mystoredb');

$result = mysqli_query($db, "SELECT * FROM catalog WHERE id = '$id'");

$catalogItem = [];

while ($row = mysqli_fetch_assoc($result))
{
    $catalogItem[] = $row;
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
    <title>Информация о товаре</title>
</head>
<body>
<h2>Информация о товаре</h2>
<?php foreach ($catalogItem as $item): ?>
    <div class = "itemcataloginside">
        <a href="http://phpfive:8080/">Вернуться в каталог</a><br>
        <img width="250px" src="img/<?= $item['image']?>" alt="<?= $item['image'] ?>"><br>
        <?= $item['name'] ?><br>
        Цена: <?= $item['price'] ?> руб.<br><br>
        <?= $item['desription'] ?>
        
    </div>
<?php endforeach; ?>

<form name="comment" action="feedbackaction.php" method="post">
    <p class = "hiText">
        Оставьте отзыв о товаре! <br><br>
    </p>
    <p>
        <label>Ваше имя:</label>
        <input class = "insertText" type="text" name="name" />
    </p>
    <p>
        <label>Комментарий:</label>
        <br>
        <textarea class = "insertText" name="text_comment" cols="100" 
                  rows="5"></textarea>
    </p>
    <p>
        <input type="hidden" name="page_id" value="<?= $id ?>" />
        <input class="btnClass" name = "addRev" type="submit" 
               value="Отправить"/>
    </p>
    <p>
        <text class="delText"> Комментарий для удаления </text> 
        <input class = "insertText" type="text" name="nameDel"/>
        <input type="hidden" name="page_id" value="<?= $id ?>" />
        <input class="btnClass" name = "delRev" type="submit" value="Удалить" />
    </p>
    <p>
        <text class="updText"> Комментарий для обновления </text> 
        <input class = "insertText" type="text" name = "nameUpd"/>
        <input type="hidden" name="page_id" value="<?= $id ?>" />
        <input class="btnClass" name = "updRev" type="submit" value="Обновить"/>
    </p>
</form>

<?php
$mysqli = new mysqli("localhost", "root", "root", "mystoredb");
$result_set = $mysqli->query("SELECT * FROM `storecomments` WHERE page_id ='$id'");
echo '<p style="font-size:20px; font-weight: bold; text-align: center">' . "Комментарии к продукту";
echo "<br />";
while ($row = $result_set->fetch_assoc()) {
    echo '<p style="font-size:20px">' . $row['name'] . " [" . $row['id'] . "]:";
    echo " " . $row['text_comment'];
    echo "<br />";
}
?>
</body>
</html>
