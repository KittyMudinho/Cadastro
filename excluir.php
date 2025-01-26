<?php
    $id=$_GET['id'] ?? '';
    include("conexao.php");
    $sqlDelete="DELETE FROM `corretores` WHERE `corretores`.`id` = '$id'";
    mysqli_query($conn,$sqlDelete);
    header('Location: '. "index.php");
    ?>