<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Кастомный чекбокс и радио баттон</title>
</head>
<body>
<header></header>
<div id="task"><b>Задание</b><p>Сделать кастомный чекбокс и радио баттон.</p></div>
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
 #block {
              margin-top: 30px;
            /*display: flex;*/
            /*flex-direction: column;*/
            align-items: center;
            width: 7%;
            margin-left: auto;
            margin-right: auto;
            border:2px solid black;
            padding:10px;
            border-radius: 5px;
        }

.container {
  display: block;
  position: relative;

  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  user-select: none;
}

.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

.container:hover input ~ .checkmark {
  background-color: #ccc;
}

.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

.container input:checked ~ .checkmark:after {
  display: block;
}

.container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}

.second_block{
	float:right;
}

.radio-toolbar-one input[type="radio"] {
    display:none; 
}

.radio-toolbar-one label {
    display:block;
    background-color:#ddd;
    padding:4px 11px;
    
    /*font-family:Arial;
    font-size:16px;*/
    margin-bottom: 7px;
    border-radius: 50%;
    height: 20px;
    width: 10px;
    border: 3px solid #f3f5f6;
    box-shadow: inset 2px 2px 10px #888888;
}

.text_radio{
	margin-left:30px;
	font-size: 22px;
	font-family: Times New Roman;
}

.radio-toolbar-one input[type="radio"]:checked + label { 
    background-color:#bbb;
    border: 3px solid #60adf0;
}

</style>
<div id="block">
	<label class="container">Один
  <input type="checkbox" checked="checked">
  <span class="checkmark"></span>
</label>

<label class="container">Два
  <input type="checkbox">
  <span class="checkmark"></span>
</label>

<label class="container">Три
  <input type="checkbox">
  <span class="checkmark"></span>
</label>

<div class="radio-toolbar-one">
   
    <input type="radio" id="radio1" name="radios-one" value="all" checked> <label for="radio1"><span class="text_radio">Один</span></label>

    <input type="radio" id="radio2" name="radios-one"value="false">
    <label for="radio2"><span class="text_radio">Два</span></label>

    <input type="radio" id="radio3" name="radios-one" value="true">
    <label for="radio3"><span class="text_radio">Три</span></label> 
 
</div>
</div>
</body>
</html>