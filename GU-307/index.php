<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Таблица с товарами</title>
</head>
<body>
<header></header>
<div id="task"><b>Задание</b><p>Подключиться к БД.
        Получить список всех товаров.
        Вывести их на экран в алфавитном порядке. В виде таблицы.
        Добавить сслыки на редактирование товара и его удаление.
        Так же добавить возможность создания товара, с выбором владельца этого товара.</p></div>

<table>
    <style>
        #task{
            margin-top: 20px;
            padding: 20px;
            border:1px dashed darkgrey;
            border-radius: 5px;
            width: 60%;
            text-align: center;
        }
        #task p{
            font-size: 1.3em;
            font-weight: normal ;
        }
        #task b{
            font-size: 2em;
        }
        td>a{
            background-color: greenyellow;
            padding: 3px;
        }
        body {
            margin: 0;
            padding: 0;
            color: black;
            background-color: ghostwhite;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        header{
            margin-top: 0;
            width: 100%;
            height: 50px;
            background-color: mediumslateblue;
        }
        td{
            padding:5px;
            border:1px solid black;
        }
        table{
            margin-top: 20px;
            border-collapse: collapse;
        }
        #new_item{
            margin-top: 30px;
            padding:10px 30px 10px 30px;
            border:1px solid blanchedalmond;
            background-color: greenyellow;
            border-radius: 5px;
        }
    </style>
    <tr><td>Название</td><td>Стоимость</td><td>Имя владельца</td><td>Фамилия владельца</td><td>Номер владельца</td><td>Редактировать</td><td>Удалить</td></tr>
<?php
    $connection = new mysqli('localhost','root','','shops');
    $m = $connection->query('SELECT * FROM items INNER JOIN sellers on items.owner_id = sellers.id ORDER BY name');
    while($rs = $m->fetch_assoc()){
        ?>
        <tr><td><?=$rs['name']?></td><td><?=$rs['price']?></td><td><?=$rs['owner_name']?></td><td><?=$rs['surname']?></td><td><?=$rs['phone']?></td><td>
                <a href="edit.php?id=<?=$rs['id_item']?>">Редактировать</a></td><td><a href="edit.php?id=<?=$rs['id_item']?>&action=delete">Удалить</a></td></tr>
        <?php
    }
?>
</table>
<a id = 'new_item' href="new_item.php">Добавить новый продукт</a>
</body>
</html>