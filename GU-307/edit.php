
<!DOCTYPE html>
<html>
    <head>
        <meta charset = 'utf-8'>
        <title>Редактировать запись</title>
    </head>
    <body>
    <?php
    $connection = new mysqli('localhost','root','','shops');
    if($connection->errno){
        die('Ошибка подключения к базе данных');
    }
    if($_GET['action']=='new'){
        $item_name = $_POST['item_name'];
        $price = $_POST['price'];
        $owner_name = $_POST['owner_name'];
        $phone = $_POST['phone'];
        $owner_surname = $_POST['owner_surname'];
        $rs = $connection->query("INSERT INTO `sellers`(owner_name,surname,phone) VALUES ('$owner_name','$owner_surname','$phone')");
        if(!$rs){
            die('Ошибка запроса');
        }
        $id = $connection->insert_id;
        $rs = $connection->query("INSERT INTO `items` (owner_id,name,price) VALUES ('$id','$item_name', '$price')");
        if(!$rs){
            die('Ошибка запроса');
        }
        ?>
        Товар успешно добавлен. Вы будете автоматически перенаправлены на главную страницу
        <script>
            setTimeout(function(){
                window.location.href='/';

            },3000)
        </script>
    </body>
</html>
        <?php

        die();
    }
    $id = $_GET['id'];
    $get_val = $connection->query("SELECT * FROM `items` WHERE id_item = $id");
    $get_val = $get_val->fetch_assoc();
    if($_GET['action']=='update'){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $rs = $connection->query("UPDATE `items` SET price = '$price', name = '$name' WHERE id_item = '$id'");
        if($rs){
            ?>
    <span>Запись успешно обновлена. Вы будете перенаправлены на главную страницу</span>
            <script>
                setTimeout(function() {
                    window.location.href = '/';
                },3000)</script>
    </body>
</html>
            <?php
            die();
        }
    }
    if($_GET['action'] == 'delete'){
        $e = $connection->query('DELETE FROM `items` WHERE id_item = '.$id);
        if($e){
            ?>
            <span>Запись успешно обновлена. Вы будете перенаправлены на главную страницу</span>
            <script>
                setTimeout(function() {
                    window.location.href = '/';
                },3000)</script>
            </body>
            </html>
            <?php
            die();
        }
    }
    ?>
    <style>
        body{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        span{
            text-align: center;
            font-size: 4em;
            font-weight: bold;
        }
        form{
            font-size: 1.3em;
            display: flex;
            flex-direction: column;
            margin-top: 50px;
            padding:90px;
            border:1px dashed black;
            background-color: navajowhite;
            border-radius: 10px;
        }
        form>label{
            margin-top: 20px;
        }
        input[type='submit']{
            display:block;
            color:black;
            padding:10px;
            border: 1px solid darkslategrey;
            margin-top: 30px;
            border-radius: 10px;
        }
    </style>
    <span>Редактирование записи</span>
    <form action="edit.php?id=<?=$id?>&action=update" method = 'post'>
        <label for="name">Название товара</label>
        <input type="text" name = 'name' id = 'name' value = "<?=$get_val['name']?>">
        <label for="price">Цена</label>
        <input type="number" name = 'price' value = "<?=$get_val['price']?>">
        <input type="submit" value = 'Обновить'>
    </form>
    </body>
</html>
