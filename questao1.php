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
<p>1°)Construir um algoritmo que leia 2 números e efetue a adição. Caso o valor somado seja
maior que 20, este deverá ser apresentando somando-se a ele mais 8; caso o valor
somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5.</p>
<br><br>
<div class="q1">
<center><br>
<form method="post" action="index.php">
<h3>Resposta</h3>
<label><input name="valor1" type="text" placeholder="Digite o 1° valor"><br><br></label>
<label><input name="valor2" type="text" placeholder="Digite o 2° valor"></label><br><br>
<input class="btn" name="botao" type="submit" value="Somar">
</form>
</center>
</div>
</body>
</html>
<?php
if($_POST){
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$soma = $valor1+$valor2;
echo "<br><br>";
if($soma>20){
echo "Resultado da soma ".$valor1." + ".$valor2." = ".$soma."<font color='green'> maior que 20</font>";
echo "<br>Soma de ".$soma." + 8 = ".$soma+8;
}else{
echo "Resultado da soma ".$valor1." + ".$valor2." = ".$soma."<font color='#FF0000'> menor que 20</font>";
echo "<br>Resultado da subtração ".$soma." - 5 = ".$soma-5;
}
}
?>