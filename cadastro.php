<?php
      include("conexao.php");
      $sqlExpor="SELECT * FROM corretores";
      $dados=mysqli_query($conn,$sqlExpor);
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if(strlen($_POST['fnome'])>=2 && strlen($_POST['fcpf'])==11 && strlen($_POST['fcreci']>=2)){
            $nome = htmlspecialchars($_POST['fnome']);
              $cpf = htmlspecialchars($_POST['fcpf']);
              $creci = htmlspecialchars($_POST['fcreci']);
              $sqlInsert="INSERT INTO `corretores`(`nome`,`cpf`,`creci`) VALUES ('$nome','$cpf','$creci')";
              mysqli_query($conn,$sqlInsert);
              echo "<script>alert('Cadastro realizado com sucesso!');</script>";
              header("Refresh:0");
          }
          else{;
            echo "<script>alert('O CPF deve ter 11 caracteres e os demais mais de 2.');</script>";
              header("Refresh:0");
          }
      }
      ?>