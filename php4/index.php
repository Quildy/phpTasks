<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Каталог товаров phpFour</title>
    <link href="style.css" rel="stylesheet">
    <script src="index.js" type="module"></script>
</head>
<body>
<div class="list-items" id="list-items">
<?php 
    define("HOST", "localhost");
    define("USER", "root");
    define("PASS", "root");
    define("DB", "10labdb");
    $connectDB =mysqli_connect(HOST, USER, PASS, DB);
    $mass = [];
    $query= mysqli_query($connectDB, "SELECT * from catalogphp");
    foreach ($query as $row){
        $mass[$row['id']]['main']=$row['mainID'];
        $mass[$row['id']]['text']=$row['textName'];
        if(!is_null($row['mainID'])) {
            $mass[$row['mainID']]['inside'][$row['id']]=$row['id'];
        }
    }
    mysqli_close($connectDB);
    
    foreach ($mass as $items){
        if($items['main']=="")
        {
            catalogRender($mass,$items);
        }
}
    
    function catalogRender($mass, $items) {
        if(count($items['inside'])>0){
            echo("<div class=\"list-item \" data-parent>". 
                "<div class=\"list-item__inner\">". 
                "<img class=\"list-item__arrow\" src=\"./assets/img/chevron-down.png\" alt=\"chevron-down\" data-open>". 
                "<img class=\"list-item__folder\" src=\"./assets/img/folder.png\" alt=\"folder\">". "<span>".$items['text']."</span>". 
                "</div>". "<div class=\"list-item__items\">");
        foreach ($items['inside'] as $renIns){
            catalogRender($mass,$mass[$renIns]);
        }
        echo('</div> </div>');
    }
    else{
        echo("<div class=\"list-item__inner\">". "<img class=\"list-item__folder\" src=\"./assets/img/folder.png\" alt=\"folder\">".
            "<span>".$items['text']."</span>".
            "</div>");
    }
}
?>
</div>
</body>
</html>