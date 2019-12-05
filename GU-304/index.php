<!doctype html>
    <html>
        <head>
            <meta charset = 'UTF-8'>
            <title>Создание файла</title>
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
            form{
                display: flex;
                flex-direction: column;
                align-items: flex-start;
            }
            form>*{
                margin-top: 20px;
            }
            input{
                width: 100%;
                background-color: limegreen;
                margin-left: auto;
                margin-right: auto;
                margin-top: 20px;
                padding:10px;
                border-radius: 5px;
                display: block;
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
        </style>
        <header></header>
        <div id="task"><b>Задание</b><p>Создать файл и записать в него какой-то текст, потом прочитать этот файл на другой странице и удалить его.</p></div>
        <form action="new_file.php" method="post">
            <label for="text">Введите какой-то текст</label>
            <textarea name="text" id="text" cols="60" rows="20" placeholder="Введите текст"></textarea>
            <input type="submit" value = 'Создать файл'>
        </form>
        <script>
            $("input[type='submit']").click(function (event) {
                let text = $('textarea').val();
                if(!text){
                    alert('Введите текст!');
                    event.preventDefault();
                }
            })
        </script>
        </body>
    </html>