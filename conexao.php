<html>
<h1> MEU DEUS DEU CERTO </h1>
<body>

<form>

<a href="inicio.php"><input type="button" value="inicio"></a>
<a href="exibir.php"><input type="button" value="exibir"></a>
<a href="editar.php"><input type="button" value="editar"></a>
<a href="excluir.php"><input type="button" value="excluir"></a>

</form>

</body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "biblioteca";

$conexao = mysqli_connect ("localhost", "root", "", "biblioteca");

?>
</html>