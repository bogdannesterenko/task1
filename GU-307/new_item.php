<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Новый товар</title>
</head>
<body>
<style>
    header{
        margin-top: 0;
        width: 100%;
        height: 50px;
        background-color: mediumslateblue;
    }
    body{
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    form{
        margin-top: 30px;
        padding:20px 50px 20px 50px;
        border-radius: 10px;
        border: 1px dashed grey;
        background-color: whitesmoke;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    form>*{
        margin-top: 20px;
    }
    input[type='submit']{
        padding:10px;
        background-color: greenyellow;
        border: 1px dashed grey;
        border-radius:5px;
    }
</style>
<header></header>
<form action="edit.php?action=new" method = 'post'>
    <label for="item_name">Название товара</label>
    <input type="text" name = 'item_name' required>
    <label for="price">Цена</label>
    <input type="number" name = 'price'>
    <label for="owner_name">Имя владельца</label>
    <input type="text" name="owner_name" required>
    <label for="owner_surname">Фамилия владельца</label>
    <input type="text" name = 'owner_surname'>
    <label for="phone">Номер владельца</label>
    <input type="text" name = 'phone'>
    <input type="submit" value = 'Добавить'>
</form>
</body>
</html>
