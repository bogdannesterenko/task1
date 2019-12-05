<!doctype html>
<html>
<head>
    <meta charset = 'utf-8'>
    <title>Заголовок</title>
    
</head>
<body>
<header>
    <h1 id="header_text">Tasks</h1>
</header>
<style>
header{
            margin-top: 0;
            padding: 0;
            width: 100%;
            height: 15vh;
            background-color: #e9ecef;
            margin-bottom: 20px;
            
        }
     #header_text {
        text-align: center; 
        font-size: 3em;
    }
    body{
        display:flex;
        flex-direction: column;
        align-items: center;
    }
   
    a{
        display:inline-block;
        color:black;
        padding:20px;
        border: 1px solid green;
        font-size: 18px;
        text-decoration: none;
        margin-top: 20px;
        margin-right: 50px;
        border-radius: 10px;
    }

    a:hover{
    color:white;
    background-color:green;
    text-decoration: none;
    transition:.5s;
    }
 [data-tooltip] {
    position: relative; 
   }
   [data-tooltip]::after {
    content: attr(data-tooltip); 
    position: absolute; 
    width: 300px; 
    left: 0; top: 0; 
    background: #394639; 
    color: #fff; 
    padding: 0.5em; 
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); 
    pointer-events: none; 
    opacity: 0; 
    transition: 1s; 
   } 
   [data-tooltip]:hover::after {
    opacity: 1; 
    top: 2em; 
   }
</style>
<div id="links">
<div>
    <a href="GU-299/" data-tooltip="Написать функцию, которая принимает два числа. И определяет, какое из этих чисел больше и возвращает разницу между этими числами в процентном соотношении">GU-299</a>
    <a href="GU-302/" data-tooltip="Создать функцию которая будет экранировать значения при необходимости, в зависимости от других значений">GU-302</a>
    <a href="GU-303" data-tooltip="Создать форму, с несколькими типами элементов формы. Вывести данные, заполненные в форме на страницу под этой формой">GU-303</a>
    </div>
    <div>
    <a href="GU-304/" data-tooltip="Создать файл и записать в него какой-то текст, потом прочитать этот файл на другой странице и удалить его.">GU-304</a>
    <a href="GU-305/" data-tooltip="Создать выпадающий список с 10 странами. При выборе страны, отображаем какое сейчас там время. Допускается перезагрузка страницы. Но лучше без перезагрузки.">GU-305</a>
    <a href="GU-306" data-tooltip="Создать форму в которую пользователь будет вводить два числа, выбирать из выпадающего списка математическую операцию («+» «-» «*» «/») и на экране должен получать результат. На стороне php дописать валидацию на вводимые значения. Должны быть только числа. В противном случае выводить сообщение об ошибке.">GU-306</a>
    </div>
    <div>
    <a href="GU-307" data-tooltip="Подключиться к БД. Получить список всех товаров. Вывести их на экран в алфавитном порядке. В виде таблицы. Добавить сслыки на редактирование товара и его удаление. Так же добавить возможность создания товара, с выбором владельца этого товара.">GU-307</a>
    <a href="GU-308"data-tooltip="Сделать кастомный чекбокс и радио баттон.">GU-308</a>
    <a href="GU-309" data-tooltip="Добавить на страницу всплывающее окно с каким-либо уведомлением. Окно должно всплывать вместе с фоном, полностью затемняющим весь контент. Окно должно быть отцентрировано по вертикали и горизонтали. Появляется при клике на кнопку и закрываться при клике на close btn">GU-309</a>
    </div>
</div>
</body>
</html>