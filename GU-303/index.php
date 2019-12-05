<!doctype html>
<html>
    <head>
        <meta charset = 'utf-8'>
        <title>Создать форму</title>
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
        #inputs{
            display: flex;
            flex-direction: column;
        }
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
        input[type='text'] {
            display: block;
            width: 100%;
            height: calc(1.5em + .75rem + 2px);
            padding: .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }
        #inputs>*{
            margin-top: 20px;
        }
        #result{
            color:white;
            opacity: 0.7;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>

    <header></header>
    <div id="task"><b>Задание</b><p>Создать форму, с несколькими типами элементов формы.
            Вывести данные, заполненные в форме на страницу под этой формой</p></div>
    <div id="inputs">
        <label for="name">Введите ваше имя</label>
        <input type="text" name = 'name' id = 'name'>
        <label for="surname">Введите вашу фамилию</label>
        <input type="text" name = 'surname' id = 'surname'>
        <fieldset id = 'level'>
            <legend>Какой ваш уровень?</legend>
            <input type="radio" value = 'Junior' id = 'junior' name = 'checkbox' checked>
            <label for="junior">Junior</label>
            <input type="radio" value = 'Middle' id = 'middle' name = 'checkbox'>
            <label for="middle">Middle</label>
            <input type="radio" value = 'Senior' id = 'senior' name = 'checkbox'>
            <label for="senior">Senior</label>

        </fieldset>
        <div><label for="is_dev">Вы разработчик?</label>
            <input type="checkbox" id = 'is_dev' name = 'is_dev'></div>
        <button>Узнать кто вы</button>
        <script>
            $('button').click(function(){
                let fval = $('#name').val();
                let sval = $('#surname').val();
                if(!sval||!fval){
                    alert('Введите все данные');
                    return;
                }
                if(!$('#is_dev').prop('checked')){
                    $('#result').css('background-color','#721c24');
                    $('#result').text('Вы не разработчик!!!');
                    return;
                }
                $('#result').css('background-color','#155724');
                $('#result').text('Привет, '+fval+' '+sval+', ты - '+$('input[name="checkbox"]:checked').attr('id'));

            })
        </script>
    </div>
    <div id = 'result'></div>
    </body>
</html>
