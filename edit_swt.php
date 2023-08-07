<?php

//iniciar sessao de conexão 
session_start();

//Conexão com o banco de dados
include_once('conn.php');

$id = $_GET['id'];

$sql = "SELECT * FROM cad_bdsw WHERE id = '$id'";
$result_query = mysqli_query($conexao, $sql);
$result_user = mysqli_fetch_assoc($result_query);

//usado para ver se está pegando os dados para a exibição, no banco de dados
//print_r($result_user)

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <title>BDSW</title>
    <link rel="stylecheet" href="style.css">
    <meta charset="utf-8">
     <!--Colocando um icone-->
     <link rel="icon" href="img/officedatabase_104402.ico">
    <!--Link Boostrap CSS e JS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!--Link Icons Bootstrap -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <style>
        input {
            width: 100px;
        }

        body {
            background-color: #FFF;
        }
    </style>

</head>


<body>
    <div>
        <CENTER>
        <div style="margin-left:-45px; margin-top: -10px;background-color: rgb(0, 0, 0);height:100px;width:900px;">
        <br>    
        <h3>
                <a href="cadsw.html" style="text-decoration: none;margin-left:-700px;color: #FFF;margin-top:20px;"><i style="margin-top: -40px;" class="bi bi-arrow-left-circle"></i></a>
            </h3>    
            <h3 style="color: #FFF;">
                    <p style="margin-top: -38px;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">EDITAR CADASTRO SWITCHS</p>
            </h3>
        </div>
        </CENTER>
    </div>
    <br>


    <br>
    <br>

    <center>
    <form method="POST" action="proc_edit_swt.php" id="formCad"
            style="background-color:#000;width: 950px; height: 850px;border-radius: 20px;margin-left: -50px;">
            <!--form 01-->
            <br>
            <div style="margin-left: -400px;">
                <div>
                    <input type="hidden" name="id" value="<?php echo $result_user['id'] ?>">
                </div>
                <div class="form-group">
                    <label id="lname" style="color: #FFF;">
                        MARCA
                    </label>
                    <input style="width: 300px;" value="<?php echo $result_user['marca'] ?>" maxlength="20" type="text" class="form-control" name="marca"
                        placeholder="Digite o marca">
                </div>
                <br>
                <div class="form-group">
                    <label id="lidade" style="color: #FFF;">
                        MODELO 
                    </label>
                    <input style="width: 300px;" value="<?php echo $result_user['modelo'] ?>" type="text" class="form-control" name="modelo"
                        placeholder="Digite o modelo" >
                </div>
                <br>
                <div class="form-group">
                    <label id="lemail" style="color: #FFF;">
                        Nº SÉRIE 
                    </label>
                    <input value="<?php echo $result_user['numero'] ?>" style="width: 300px;" type="number" class="form-control" name="numero"
                        placeholder="Digite o número de série">
                </div>
                <div class="form-group">
                    <label id="ltele" style="color: #FFF;">
                       Portas
                    </label>
                    <input value="<?php echo $result_user['portas'] ?>" style="width: 300px;" type="number" class="form-control" name="portas"> 
                    <!--- 
                    <select class="form-control" name="portas" style="width: 300px;"> 
                        <option> Selecione </option>
                        <option name="portas"> 24 Portas </option>
                        <option name="portas"> 48 Portas </option>
                    </select>--> 
                </div>
            <br>
                <hr style="width: 200px;background-color: #FFF;">
            <!--checkbox 01-->
            <div class="form-group" style="margin-left: -34px;">
                <input  name="estado" type="checkbox" id="selectUso" value="<?php echo $result_user['estado'] ?>">
                <label style="color: #FFF;margin-left: -35px;">SWITCH COM USO</label>
            </div>
            <!--checkbox 02-->
            <div class="form-group" style="margin-left: -40px;">
                <input value="<?php echo $result_user['estado'] ?>" name="estado" type="checkbox" id="selectUso" value="OFFLINE">
                <label style="color: #FFF;margin-left: -35px;">SWITCH SEM USO</label>
            </div>
                <hr style="width: 200px;background-color: #FFF;">
            </div>
            <!--form 02-->
            <div style="margin-left: 300px;margin-top:-568px;">
                <div class="form-group">
                    <label id="lteleDois" style="color: #FFF;">
                        VELOCIDADE
                    </label>
                    <input value="<?php echo $result_user['velocidade'] ?>" style="width: 300px;" type="number" class="form-control" name="velocidade"
                    placeholder="Digite a velocidade (Mbps)">
                </div>
             </div>
            <!--form 04-->
            <div id="form03" style="margin-top:20px;margin-left:300px;">
                <div class="form-group">

                    <label id="lcpf" style="color: #fff;">
                        TEMPO DE USO
                    </label>
                    <input value="<?php echo $result_user['tempo'] ?>" type="text" style="width: 300px;" name="tempo" class="form-control"
                        placeholder="Digite o tempo de uso" >
                </div>
            </div>
                <br>
            <br>
                <br>
            <br>
            <!--Botão--->
            <div id="btn" style="margin-top: 350px; margin-left: -7px;">
                <button class="btn btn-secondary btn-lg btn-block"  style="width: 300px;">ATUALIZAR CADASTRADO</button>
            </div>
        </form>
        <br>
            <br>
        <br>
            <br>
        <br>
            <br>
        <br>
    </center>



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

</html>