<?php
		
        $host = "localhost";
        $user = "root";
        $pass = "";
        $database = "dba_swt";

        $conexao = mysqli_connect($host, $user, $pass, $database);

        
        if(!$conexao){
            die("Houve um erro: " . mysqli_connect_error());
        }else{
            //echo "Conexão estabelecida com sucesso";
        }

?>
		

