<?php 

session_start();

include_once('conn.php');

$id = $_GET['id'];

$sqlDel = "DELETE FROM cad_bdsw WHERE id =  '$id'";
$result_del = mysqli_query($conexao, $sqlDel);

if ($conexao->query($sqlDel) === TRUE) {
	header('Location:list_swt.php');
} else {
	echo "Erro: " . $sqlDel . "<br>" . $conexao->error;
}

$conexao->close();

?>