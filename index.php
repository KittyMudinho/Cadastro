<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Corretor</title>
  <style>
    /* Centralizar o formulário no meio da página */
    body {
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
      background-color: #f5f5f5;
    }

    /* Container do formulário */
    .form-container {
      background: white;
      padding: 20px;
      border-radius: 20px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      text-align: center;
      margin-bottom: 30px;
      width: 400px;
    }

    /* Título do formulário */
    .form-container h1 {
      margin-bottom: 20px;
      font-size: 18px;
      font-weight: bold;
    }

    /* Linha dos inputs CPF e Creci */
    .form-row {
      display: flex;
      gap: 10px; /* Espaçamento entre os campos */
      margin-bottom: 10px;
    }

    /* Estilo dos campos de input */
    .form-container input[type="text"] {
      flex: 1; /* Faz os inputs ocuparem o mesmo espaço */
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 14px;
    }

    /* Input de nome */
    .form-container input[type="text"].full-width {
      width: 94%;
      margin-bottom: 15px;
    }

    /* Botão de envio */
    .form-container button {
      width: 100%;
      padding: 10px;
      background-color: #333;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 14px;
      cursor: pointer;
    }

    .form-container button:hover {
      background-color: #555;
    }
  </style>
</head>
<body>
<form action="index.php" method="POST">
  <div class="form-container">
    <h1>Cadastro de Corretor</h1>
    <form>
      <div class="form-row">
        <input id="cpf" name="fcpf" type="text" placeholder="Digite seu CPF">
        <input id="creci" name="fcreci" type="text" placeholder="Digite seu Creci">
      </div>
      <input id="nome" name="fnome" type="text" placeholder="Digite seu nome" class="full-width">
      <button type="submit">Enviar</button>
  </div>
  </form>
  <script src="index.js"></script>
</body>
</html>


<?php
include("pag1.php");
?>