<?php
    while($linha=mysqli_fetch_assoc($dados)){
        $id=$linha["id"];
        $name=$linha["nome"];
        $cpff=$linha["cpf"];
        $crecii=$linha["creci"];
        echo "
        <tr>
        <th scope='row'>$id</th>
        <td>$name</td>
        <td>$cpff</td>
        <td>$crecii</td>
        <td><a href='indexEditar.php?id=$id' class='btn'>Editar</a><a href='excluir.php?id=$id' class='btn' onclick='confirmarExclusao()'><br>Excluir</a>
        </td>
        </tr>";
    }
    ?>
    <script>
function confirmarExclusao() {
    alert('Excluido com sucesso!');
}
</script>