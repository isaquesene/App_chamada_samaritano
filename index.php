<?php
    include 'assets/conectar.php';
    include 'assets/crud.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.scss">
    <title>Document</title>
</head>

<style>
    body{
        background: #fbb938;
    }
</style>

<body>
    <!--Page--> 
    <h3>App Chamadas</h3>
    <form method="post" class="form">  
        <input type="date" name="data" id="data_hoje" class="texto">
        <input type="text" name="nome" class="texto">
        <input type="number" name="idade" class="texto">
        <select name="status" class="texto">
            <option value="">Selecione...</option>
            <option value="Presente">Presente</option>
            <option value="Falta">Falta</option>
        </select>
        <button type="submit" name="submit">salvar</button>
        <a href="controle_chamada.php" target="_blank">controle</a>
    </form>

    <!--DATA REGISTRO-->
    <script type="text/javascript">
        var hoje = new Date().toISOString().substr(0, 10);
        document.getElementById("data_hoje").value = hoje;
    </script>
    
</body>
</html>