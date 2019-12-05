<!doctype html>
<html>
<head>
    <meta charset = 'utf-8'>
    <title>Функция с двумя числами</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
    <body>
    <style>
        body{
            margin: 0;
            padding: 0;
            color:black;
            background-color: ghostwhite;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        body>*{
            margin-top: 30px;
        }
        #inputs{
            margin-top: 30px;
            width: 50%;
            margin-left: auto;
            margin-right: auto;
            display: grid;
            grid-template-areas: "flabel slabel"
        "sinput finput";

        }
        #inputs>*{
            justify-self: left;
        }
        #inputs>input{
            width:80%;
            position: relative;
            display: block;
            border:1px solid darkgrey;
            padding:10px;
            border-radius: 5px;
        }
        #inputs>label:nth-child(1){
            grid-area: flabel;
        }
        #inputs>label:nth-child(2){
            grid-area: slabel;
        }
        #inputs>input:nth-child(1){
            grid-area: finput;
        }
        #inputs>input:nth-child(2){
            grid-area: sinput;
        }
        #submit{
            width: 100%;
            background-color: limegreen;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
            padding:10px;
            border-radius: 5px;
            display: block;
        }

        #box{
            width: 80%;
        }
        #task{
            color:black;
            width: 80%;
            font-size: 1.2em;
        }
#result{
    width: 80%;
    background-color: lightgreen;
    text-align: center;
    border-radius: 5px;
    padding:20px 0 20px 0;
}
        header{
            margin-top: 0;
            width: 100%;
            height: 50px;
            background-color: mediumslateblue;
        }
    </style>
    <header></header>
    <span id = 'task'>Написать функцию, которая принимает два числа. И определяет, какое из этих чисел больше и возвращает разницу между этими числами в процентном соотношении</span>
    <div id="box">
        <div id="inputs">
            <label for="fval">Первое значение</label>
            <input type="number" id = 'fval' name = 'fval' placeholder="Число A">
            <label for="sval">Второе значение</label>
            <input type="number" id = 'sval' name = 'sval' placeholder="Число B">
        </div>
    <button id = 'submit'>Обчислить</button>
    </div>
    <div id="result">
        Результат: <p></p>
    </div>
    <script>
        $('#submit').click(function(){
            let fval = $('#fval').val();
            let sval = $('#sval').val();
            if(!fval||!sval){
                alert('Введите числа');
                return;
            }
            $.ajax({
                url:'calculator.php',
                method:'post',
                data:{
                    fval:fval,
                    sval:sval
                },
                success:function(data){
                    $('#result').find('p').text(data);
                },
                error:function(){
                    alert('Ошибка');
                    $('#result').find('p').text(' ');
                }
            })
        })
    </script>
    </body>
</html>