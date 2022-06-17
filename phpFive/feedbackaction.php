<?php
    if( isset( $_POST['addRev'] ) )
    {
        $name = $_POST["name"];
        $page_id = $_POST["page_id"];
        $text_comment = $_POST["text_comment"];
        if (empty($name) || empty($text_comment))
        {
            exit('Необходимо заполнить все поля');
        }
        else
        {
            $name = htmlspecialchars($name);
            $text_comment = htmlspecialchars($text_comment);
            $mysqli = new mysqli("localhost", "root", "root", "mystoredb");
            $mysqli->query("INSERT INTO storecomments (`name`, `page_id`, `text_comment`) VALUES ('$name', '$page_id', '$text_comment')");
            header("Location: ".$_SERVER["HTTP_REFERER"]);
        }
    }

    if ( isset( $_POST['delRev'] ) )
    {
        $name = $_POST["nameDel"];
        if (empty($name))
        {
            exit('Необходимо указать комментарий для удаления');
        }
        else
        {
            $mysqli = new mysqli("localhost", "root", "root", "mystoredb");
            $mysqli->query("DELETE FROM `storecomments` WHERE id = '$name'");
            header("Location: ".$_SERVER["HTTP_REFERER"]);
        }
    }

if ( isset( $_POST['updRev'] ) )
{
    $nameupd = $_POST["nameUpd"];
    $name = $_POST["name"];
    $page_id = $_POST["page_id"];
    $text_comment = $_POST["text_comment"];
    $name = htmlspecialchars($name);
    $text_comment = htmlspecialchars($text_comment);
    if (empty($nameupd))
    {
        exit('Необходимо указать комментарий для обновления'); 
    }
    else if (empty($name) && empty($text_comment))
    {
        exit('Необходимо указать имя и/или комментарий для обновления');
    }
    else if (empty($name))
    {
        $mysqli = new mysqli("localhost", "root", "root", "mystoredb");
        $mysqli->query("UPDATE storecomments SET text_comment = '$text_comment' WHERE id = '$nameupd'");
        header("Location: ".$_SERVER["HTTP_REFERER"]);
    }
    else if (empty($text_comment))
    {
        $mysqli = new mysqli("localhost", "root", "root", "mystoredb");
        $mysqli->query("UPDATE storecomments SET name = '$name' WHERE id = '$nameupd'");
        header("Location: ".$_SERVER["HTTP_REFERER"]);
    }
    else
    {
        $mysqli = new mysqli("localhost", "root", "root", "mystoredb");
        $mysqli->query("UPDATE storecomments SET name = '$name', text_comment = '$text_comment' WHERE id = '$nameupd'");
        header("Location: ".$_SERVER["HTTP_REFERER"]);
    }
}
?>
