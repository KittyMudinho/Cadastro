<?php
      include("conexao.php");
          if(strlen(htmlspecialchars($_POST['fnome']))>=2 && strlen(htmlspecialchars($_POST['fcpf']))==11 && strlen(htmlspecialchars($_POST['fcreci']>=2))){
              $id=$_POST['id'];
              $nome =$_POST['fnome'];
              $cpf = $_POST['fcpf'];
              $creci = $_POST['fcreci'];
              $sqlUpdate="UPDATE `corretores` SET `nome`='$nome',`cpf`='$cpf',`creci`='$creci' WHERE `corretores`.`id` = '$id'";
              mysqli_query($conn,$sqlUpdate);
              header('Location: '. "index.php");
          }
      ?>