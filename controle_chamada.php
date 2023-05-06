<?php

include 'assets/conectar.php';

$select = "select * from controle_de_chamadas";
$result = mysqli_query($sql, $select);
?>

<table class="table" id="financeiro">
      <thead>
        <tr>
          <th>Data</th>
          <th>Nome</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody class="table">
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row['data'] ?></td>
            <td><?php echo $row['nome'] ?></td>
            <td><?php echo $row['status'] ?></td>
            </td>
          </tr>
        <?php
        }
        ?>

      </tbody>
    </table>