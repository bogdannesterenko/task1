<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Калькулятор</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    </head>
    <body>
    <header></header>
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
            color: black;
            background-color: ghostwhite;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        #calculator{
            margin-top: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 40%;
            margin-left: auto;
            margin-right: auto;
            border:2px solid black;
            padding:10px;
            border-radius: 5px;
        }
        #screen{
            font-size:2em;
            height: 4em;
            text-align: center;
            background-color: #90ee90;
            width: 90%;
            border-radius: 5px;
        }
        #buttons{
            display: flex;
            flex-direction: row;
            justify-content: center;
            width:80%;
            background-color: #d1d1d1;
            margin-top: 20px;
            border-radius: 7px;
        }
        #buttons>div{
            margin-left: 20px;
            margin-right: 20px;
            padding:5px;
            border-radius: 3px;
            cursor: pointer;
            border:1px solid black;
            width: 2em;
            text-align: center;
            background-color: #32cd32;
            font-size: 140%;
        }
        #inputs{
            margin-top: 20px;
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
    </style>
    <div id="task"><b>Задание</b><p>Создать форму в которую пользователь будет вводить два числа, выбирать из выпадающего списка математическую операцию («+» «-» «*» «/») и на экране должен получать результат. На стороне php дописать валидацию на вводимые значения. Должны быть только числа. В противном случае выводить сообщение об ошибке.</p></div>
        <div id="calculator">
            <div id="screen"><span>Введите числа</span></div>
            <div id="buttons">
                <div class = 'button' id = 'multi'>*</div>
                <div class = 'button' id = 'division'>/</div>
                <div class = 'button' id = 'addition'>+</div>
                <div class = 'button' id="difference">-</div>
            </div>
            <div id="inputs">
                <input type="number" id = 'fval'>
                <input type="number" id = 'sval'>
            </div>
        </div>
    <script>
        $('.button').click(function(){
            let fval = $('#fval').val();
            let sval = $('#sval').val();
            let action = $(this).attr('id');
            if(!(fval||sval)){
                alert('Заполните оба поля');
                return;
            };
                $.ajax({
                    url:'calculator.php',
                    method:'post',
                    data:({
                        fval:fval,
                        sval:sval,
                        action:action
                    }),
                    success:function (data) {
                        $('#screen').find('span').text(data);
                    },
                    error:function () {
                        $('#screen').find('span').text('Ошибка');
                    }
                })
        })
    </script>
    </body>
</html>
