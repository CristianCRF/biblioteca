<html>
<meta charset="utf-8">

<head>

<title>exibir</title>

</head>
<body>
<center>
<table border="5">

<th>id</th>
<th>titulo</th>
<th>preço</th>

<tr>
<?php
include "conexao.php";

$sql = "SELECT * from livros";
$buscar = mysqli_query($conexao, $sql);

while ($array = mysqli_fetch_array($buscar)){
	
$id = $array['ID'];
$titulo = $array['TITULO'];
$preço = $array['PREÇO'];

?>
<td><?php echo $id; ?></td>
<td><?php echo $titulo; ?></td>
<td><?php echo $preço; ?></td>

</tr>
</center>
<?php } ?>
</body>
</html>