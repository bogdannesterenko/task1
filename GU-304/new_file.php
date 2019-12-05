<?php
    $create = fopen("file.txt", "w+");
    $text = $_POST['text'];
    $m = fwrite($create,$text);
    if(!$m){
        die('Ошибка записи файла');
    }
    ?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Создание и удаление записи</title>
    </head>
    <body>
        <span>
        <?php echo file_get_contents('file.txt');?>
        </span>
        <form action="delete.php">
            <input type="submit" value = 'Удалить файл'>
        </form>
    </body>
</html>

