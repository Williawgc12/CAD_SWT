<?php

    session_start();

    include_once('conn.php');

    $id                 = $_POST['id'];
    $marca              = $_POST['marca'];
    $modelo             = $_POST['modelo'];
    $numero             = $_POST['numero'];
    $portas             = $_POST['portas'];
    $velocidade         = $_POST['velocidade']; 
    $tempo              = $_POST['tempo'];
    $estado             = $_POST['estado'];

    $update_swt = "UPDATE cad_bdsw SET marca = '$marca', modelo = '$modelo',
    numero = '$numero',portas = '$portas', velocidade = '$velocidade', 
    tempo = '$tempo', estado = '$estado' WHERE id = '$id'";

    $resultSql = mysqli_query($conexao, $update_swt);

    if (mysqli_affected_rows($conexao)) {
            header('Location: list_swt.php');
            exit;
    } else {
        echo "Erro: " . $update_swt . "<br>" . $conexao->error;
    }

   
?>