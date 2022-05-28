<h1>Perdao, estamos passando por dificuldades tecnicas :(<h1>

<?php

include "ligaçao.php";

$nome=$_POST['nome20'];
$senha=$_POST['senha20'];

$sql="SELECT * FROM dadosfuncionarios";
$conta = mysqli_query($ligaçao, $sql);

while ($array = mysqli_fetch_array($conta)){
	
$nome2 = $array ['NOME'];
$senha2 = $array ['SENHA'];
	
if ($nome == $nome2 && $senha == $senha2){
	header('location: inicio.php');
}
}
?>