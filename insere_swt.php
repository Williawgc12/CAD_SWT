<?php 


session_start();

include_once('conn.php');

$id = 0;
$marca 				= 	$_POST['marca'];
$modelo 			= 	$_POST['modelo'];
$numero				= 	$_POST['numero'];	 	
$portas				= 	$_POST['portas'];
$velocidade			= 	$_POST['velocidade'];
$tempo				= 	$_POST['tempo'];	 	
$estado 			=   $_POST['estado'];

$sql = "INSERT INTO cad_bdsw (
	marca, 
	modelo,
	numero,
	portas,
	velocidade,
	tempo,
	estado

) VALUES (
	'$marca', 
	'$modelo', '$numero', 
	'$portas', '$velocidade', 
	 '$tempo', 
	'$estado'
	)";


if ($conexao->query($sql) === TRUE) {
	echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
	echo "<br>";echo "<br>";echo "<br>";echo "<br>";
	echo  "<center><p>USUÁRIO CADASTRADO COM SUCESSO!</p></center>";
} else {
	echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();

