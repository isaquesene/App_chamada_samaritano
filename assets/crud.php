<?php
    include 'conectar.php';

    if(isset($_POST['submit'])){
        $datanow = $_POST['data'];
        $nome = $_POST['nome'];
        $idades = $_POST['idade'];
        $status = $_POST['status'];
        


        $chamada = "insert into controle_de_chamadas(data, nome, idade, status) values ('$datanow', '$nome','$idades', '$status' )";


        mysqli_query($sql, $chamada);

        
    }else{
    }


?>