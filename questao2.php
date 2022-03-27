<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercícios de Fixação</title>
<style>        
body{
background-color: rgb(42, 189, 189);
}
.q1{
height: 200px;
width: 300px;
background-color: yellowgreen;
border-radius: 4%;
}
h3{
color: white;
}
.q1 input{
height: 15px;
width: 130px;
background-color: white;
border-radius: 5%;
border-color: white;
box-shadow: 0 0 0 0;
outline: 0;
border:0;
font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
font-size: 13px;
}
.q1 .btn{
height: 20px;
width: 90px;
background-color: white;
border-radius: 5%;
border-color: white;
box-shadow: 0 0 0 0;
outline: 0;
border:0;
font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
</style>
</head>
<body>
<h2>Olá Bem vinda/o a Lista de Exercícios de PHP!<br></h2>
<p>2°)Entrar com um número e informar se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes</p>
<br><br>
<div class="q1">
<center><br>
<form method="post" action="questao2.php">
<h3>Resposta</h3>
<label><input name="valor" type="text" placeholder="Digite o valor"><br><br></label>
<input class="btn" name="botao" type="submit" value="Somar">
</form>
</center>
</div>
</body>
</html>
<?php
if($_POST){
$valor = $_POST['valor'];
echo "<br><br>";
if(($valor%10)==0){
echo "<br>valor divisivel por 10";
}else{
echo "<br>O valor ".$valor." nao e divisivel por 10";
}
if(($valor%5)==0){
echo "<br>valor divisivel por 5";
}else{
echo "<br>O valor ".$valor." nao e divisivel por 5";
}
if(($valor%2)==0){
echo "<br>valor divisivel por 2";
}else{
echo "<br>O valor ".$valor." nao e divisivel por 2";
}
}
?>