<?php

include 'assets/conectar.php';

$select = "select * from controle_de_chamadas";
$result = mysqli_query($sql, $select);
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
    background-color: rgba(80,110,240,255);
  }
</style>

<body>
<div class="table-container">
  <table class="table" id="financeiro">
      <thead>
        <tr>
          <th>Data</th>
          <th>Nome</th>
          <th>Idade</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody class="table">
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td data-label = "Data"><?php echo $row['data'] ?></td data-label = "">
            <td data-label = "Nome"><?php echo $row['nome'] ?></td data-label = "">
            <td data-label = "Idade"><?php echo $row['idade'] ?></td data-label = "">
            <td data-label = "Status"><?php echo ($row['status'] == "Presente") ? '<b style="background-color: green; color: #fff; padding: 5px; border-radius: 5px;">Presente</b>' 
            : ($row['status'] == "Falta" ? '<b style="background-color: red; color: #fff; padding: 5px; border-radius: 5px;">Falta</b>' : '')?></td data-label = "">
          </tr>
        <?php
        }
        ?>

      </tbody>
</table>
</div>

<a href="index.php" target="_blank" class="controle-btn">Chamadas</a>
    
</body>
</html>