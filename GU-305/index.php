<!doctype html>
<html>
    <head>
        <meta charset = 'UTF-8'>
        <title>Выпадающий список с датами</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    </head>
    <body>
    <header></header>
    <div id="task"><b>Задание</b><p>Создать выпадающий список с 10 странами. При выборе страны, отображаем какое сейчас там время. Допускается перезагрузка страницы. Но лучше без перезагрузки.</p></div>
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
        body{
            margin: 0;
            padding: 0;
            color:black;
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
        .box {
            margin-top: 20px;
            width: 250px;

            background: #fff;
            border: 1px solid #d1d1d1;
            padding: 4px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
        }
        h3 {
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            padding: 5px;
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #efefef),color-stop(1, #e0e0e0));
            border: 1px solid #d1d1d1;
            color: black;
            font-size: 13px;
            font-weight: normal;
            text-shadow: 1px 1px 0px #fff;
        }
        ul {display:none; padding: 5px; overflow: hidden; }
        li span{
            margin-left: 10px;
        }
        ul li { font-size: 13px; list-style-type: square; list-style-position: inside; color: black; padding: 5px; }
    </style>
    <div class="box">
        <h3>Список стран</h3>
        <ul>
            <li>Исландия<span></span></li>
            <li>Австрия<span></span></li>
            <li>Финляндия<span></span></li>
            <li>Турция<span></span></li>
            <li>Грузия<span></span></li>
            <li>Пакистан<span></span></li>
            <li>Казахстан<span></span></li>
            <li>Таиланд<span></span></li>
            <li>Китай<span></span></li>
            <li>Япония<span></span></li>
        </ul>
        <script>
            let is_disp = 0;
            let timer;
            $('h3').click(function(){
                if(!is_disp){
                    is_disp = 1;
                    $('ul').css('display','block');
                    function settime() {
                        let r = $('ul').find('li');
                        let timezone = 0;
                        Array.from(r).forEach(function(arg){

                            let date = new Date();
                            let hours = date.getUTCHours();
                            let minutes = date.getMinutes();
                            let seconds = date.getSeconds();
                            if(minutes<10){
                                minutes = "0"+minutes;
                            }
                            if(seconds<10){
                                seconds = "0"+seconds;
                            }
                            hours = hours+timezone;
                            if(hours==24){
                                hours = "0";
                            }
                            if(hours==25){
                                hours = "1"
                            }
                            let time = hours+':'+minutes+':'+seconds;
                            $(arg).find('span').text(time);
                            timezone++;
                        })}
                    settime();
                    timer = setInterval(settime
                        ,1000)
                }
                else{
                    clearInterval(timer);
                    is_disp = 0;
                    $('ul').css('display','none');
                }
            })
        </script>
    </div>
    </body>
</html>