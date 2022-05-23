<!doctype html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Галерея</title>
</head>
<body>
<h1>Галерея изображений</h1>
<div>
    <?php
    function draw_images() {
        $filesCount = scandir('./images');

        for ($i = 2; $i < count($filesCount); $i++) {
            $path_image = './images' . DIRECTORY_SEPARATOR . $filesCount[$i];
            echo '<a href=' . $path_image .'><img src=' . $path_image . ' "></a>';
        }
    }

    draw_images();
    
    function logWrite()
    {
        $logNumber = file_get_contents(__DIR__ . '/logNum.txt'); // logNum - хранилище номера ласт лога
        // echo $logNumber . PHP_EOL;
        $stringCount = sizeof(file ('log.txt')) + 1;
        // echo $stringCount;

        if ($stringCount > 10)
        {
            rename(__DIR__ . '/log.txt', __DIR__ . '/log' . $logNumber . '.txt');
            
            $logNumber = $logNumber + 1;
            file_put_contents(__DIR__ . '/logNum.txt', $logNumber);
        }
        
        $date = date('[d:m:Y G:i:s]');
        file_put_contents(__DIR__ . '/log.txt', $date . " Выполнено подключение к странице" . PHP_EOL, 
        FILE_APPEND);
    }
    
    logWrite();
    ?>
</div>
</body>
</html>

