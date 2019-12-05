<!doctype html>
<html>
    <head>
        <meta charset = 'utf-8'>
        <title>Экранирование запросов</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    </head>
    <body>
    <header></header>
    <div id="task"><b>Задание</b><p>Создать функцию которая будет экранировать значения при необходимости, в зависимости от других значений.</p></div>
    <style>
        header{
            margin-top: 0;
            width: 100%;
            height: 50px;
            background-color: mediumslateblue;
        }
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
        input, textarea{
            width:80%;
            position: relative;
            display: block;
            border:1px solid darkgrey;
            padding:10px;
            border-radius: 5px;
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
        body>input, body>textarea{
            margin-top:20px;
            width:30em;
        }
        body>label{
            margin-top: 20px;
        }
        button{
            margin-top: 20px;
            padding:10px;
            width:20em;
            border-radius: 5px;
            display: block;
        }
        p{
            font-size: 4em;
            font-weight: bold;
            margin: 20px;
        }

    </style>
    <label for="table">Введите название поля</label>
    <input type="text" name = 'table' id = 'table'>
    <label for="values">Вводите названия таблиц, разделяйте их через ;</label>
    <textarea name="values" id="query" cols="30" rows="10"></textarea>
    <button>Экранировать</button>
    <p>Результат</p>
    <textarea name="res" style = 'resize:none'id="res" cols="30" rows="10" readonly></textarea>
    <script>
        $('button').click(function(){
            let table = $('#table').val();
            let query = $('#query').val();
            if(!(table||query)){
                alert('Введите информацию ');
                return;
            }
            $.ajax({
                url:'shielder.php',
                method:'post',
                data:{
                    table:table,
                    query:query
                },
                success:function(data){
                    $('#res').text(data);
                },
                error:function () {
                    $('#res').text('Ошибка');
                }
            })
        })
    </script>
    </body>
</html>