<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Всплывающее окно</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
<header></header>
<div id="task"><b>Задание</b><p>Добавить на страницу всплывающее окно с каким-либо уведомлением.
Окно должно всплывать вместе с фоном, полностью затемняющим весь контент. Окно должно быть отцентрировано по вертикали и горизонтали.
Появляется при клике на кнопку и закрываться при клике на close btn</p></div>
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

	#myBtn{
		margin-top: 25px;
		font-size: 200%;
		padding: 10px;
		border-radius:15px;
		border:dashed 2px #32cd32;
		background-color: #90ee90;
	}
	.modal{
  display:none;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background:rgb(0,0,0,.7);
}
.modalContent{
 background-color: #fefefe;
   margin: 20% auto;
  padding: 20px;
  border: solid 1px #888;
  width: 60%;
  text-align: center;
  font-size: 40px;
}
.close{
  color:#aaa;
  float: right;
  top:0;
  font-size:28px;
  font-weight:bold;
  cursor:pointer;
}

</style>
<button id="myBtn">Open Modal</button>
<div id="myModal" class="modal">
  <div class="modalContent">
    <span class="close">&times;</span>
    <p>Всплывающее окно</p>
  </div>
</div>
	<script>
var modal= document.getElementById('myModal');
var btn = document.getElementById('myBtn');
var span = document.getElementsByClassName("close")[0];

btn.onclick  = function(){
	modal.style.display = "block";
}
span.onclick = function(){
	modal.style.display= "none";
}

window.onclick =  function(e){
	if (event.target == modal){
	modal.style.display = "none";
}
};
	</script>
</body>
</html>