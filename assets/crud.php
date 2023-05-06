<?php
    include 'conectar.php';

    if(isset($_POST['submit'])){
        $datanow = $_POST['data'];
        $nome = $_POST['nome'];
        $status = $_POST['status'];


        $chamada = "insert into controle_de_chamadas(data, nome, status) values ('$datanow', '$nome', '$status' )";


        mysqli_query($sql, $chamada);

        
    }else{
    }


?>