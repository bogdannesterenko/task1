<?php
    $n = unlink('file.txt');
    if(!$n){
        die('Ошибка удаления файла');
    }
    else{
        die('Файл успешно удалён');
    }
?>
