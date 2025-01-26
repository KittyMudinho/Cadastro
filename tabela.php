<html>
<style>
table {
      width: 33%;
      border-collapse: collapse;
      margin: 0 auto;
      background: white;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    table th, table td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    table th {
      background-color: #007bff;
      color: white;
    }

    table tbody tr:nth-child(even) {
      background-color: #f9f9f9;
    }
  </style>
  <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">Creci</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include("enviarDB.php");
    ?>
    <script src="index.js"></script>
  </tbody>
</table>
</html>