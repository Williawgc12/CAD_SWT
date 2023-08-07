<?php

session_start();

include_once('conn.php');

//Pesquisa dos dados na lista php
if (!empty($_GET['search'])) {

    $data = $_GET['search'];
    //
    $sql = "SELECT * FROM cad_bdsw WHERE
        id LIKE '%$data%' 
        or marca LIKE '%$data%' 
        or modelo LIKE '%$data%'
        or numero LIKE '%$data%'
        or portas LIKE '%$data%'
        or velocidade LIKE '%$data%'
        or tempo LIKE '%$data%'
        or estado LIKE '%$data%'
        ";
} else {
    $sql = "SELECT * FROM cad_bdsw ORDER BY id ASC";
}

$result =  $conexao->query($sql); // consulta

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <title>BDSW </title>
    <meta charset="utf-8">
       <!--Colocando um icone-->
       <link rel="icon" href="img/officedatabase_104402.ico">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        td {
            color: #000;
        }
    </style>

</head>

<body id="fundoList" >
    <div>
        <CENTER>
        <div style="margin-top: -10px;background-color: rgb(0, 0, 0);height:100px;width:900px;">
        <br>    
        <h3>
                <a href="cadsw.html" style="text-decoration: none;margin-left:-700px;color: #FFF;margin-top:20px;"><i style="margin-top: -40px;" class="bi bi-arrow-left-circle"></i></a>
            </h3>    
            <h3 style="color: #FFF;">
                    <p style="margin-top: -38px;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">LISTA DE SWITCHES CADASTRADOS</p>
            </h3>
        </div>
        </CENTER>
    </div>
    <br>
        <!--Fazendo o guia de pesquisa-->
    <div class="box-search" style="margin-left: 450px;margin-top:20px;">
        <input type="search" class="form-control" id="pesquisar" style="width:400px;" placeholder="Pesquise.....">
        <button onclick="searchData()" class="btn btn-primary" style="margin-left: 410px;margin-top:-65px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
        </button>
    </div>
    <br>
    <br>
    <br>
    <!--tabela dos registros cadastrados--->
    <table class="table" style="width: 500px;margin-left:290px;">
        <thead class="thead-dark"> 
            <tr>
                <th scope="col">#ID </th>
                <th scope="col"> MARCA </th>
                <th scope="col"> MODELO </th>
                <th scope="col"> NÚMERO</th>
                <th scope="col"> PORTAS </th>
                <th scope="col"> VELOCIDADE </th>
                <th scope="col"> TEMPO</th>
                <th scope="col"> ESTADO </th>
                <th scope="col">....</th>

            </tr>

        </thead>
        <tbody>
            <?php
            while ($user_data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $user_data['id'] . "</td>";
                echo "<td>" . $user_data['marca'] . "</td>";
                echo "<td>" . $user_data['modelo'] . "</td>";
                echo "<td>" . $user_data['numero'] . "</td>";
                echo "<td>" . $user_data['portas'] . "</td>";
                echo "<td>" . $user_data['velocidade'] . "</td>";
                echo "<td>" . $user_data['tempo'] . "</td>";
                echo "<td>" . $user_data['estado'] . "</td>";
                echo "<td>
                <a class='btn btn-primary' style='margin-top:50px;' href='edit_swt.php?id=$user_data[id]'><i class='bi bi-pencil-square'></i></a></td>";
                /*BUTTON editar linha */
                echo "<td>
                <a class='btn btn-danger' style='margin-left:-66px;margin-top:-0px;' href='exclu_swt.php?id=$user_data[id]'><i class='bi bi-trash3'></i></a>
                </td>";
                /*BUTTON excluir linha */
                echo "</tr>";
              
            }
            
            ?>
        </tbody>
    </table>
    <br>
        <br>
    <br>
        <br>
    <br>
        <br>
    <br>
        <br>
    <br>
        <br>
    <br>
        <br>
    <br>
        <br>
    <br>
    <center>
        <div style="background-color: rgb(0, 0, 0);width:1750px;height:150px;margin-top: 150px;margin-left:-50px;">

            <hr style="background-color: #FFF;margin-top: 300px;">
            <center>
                <div style="margin-top: 95px;margin-left:-240px;">
                    <p style="font-size: 12px;color:#FFF;">Copyright © 07/08/2023 </p>
                </div>

            </center>
        </div>
    </center>

</body>


<script class="js">

  //Variavel constante abastecida com a classe do meu item - variavel de valor fixo, somente leitura
  const btn = document.querySelector(".btn-back-to-top");

  //Esse laço condicional If Else, traz o seguinte, se na posição Y, estiver == 0, vai tornar o btn
  //invisivel, se na posição Y retornar a outro valor não sendo 0, vai ficar visivel.
  window.addEventListener("scroll", function (event) {
    if (window.scrollY == 0) {
      btn.classList.remove("visible");//remove a propiedade visible
    } else {
      btn.classList.add("visible");//adiciona a propiedade visible
    }
  });

</script>

<!--Script JS neccessário para fazer a bsuca na url com os dados de uma lista 
php -->
<script>
    var search = document.getElementById('pesquisar');

    //Criando a ação de teclar a tecla enter para pesquisar
    search.addEventListener("keydown", function(evento) {
        if (evento.key == "Enter") {
            searchData();
        }
    });

    function searchData() {
        //Alterando a URl
        window.location = 'list_swt.php?search=' + search.value;
    }
</script>

</html>