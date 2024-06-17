
<header>
   <h3>Excluir Contato</h3>
</header>
<?php
$id_contato = mysqli_real_escape_string($conexao, $_GET["id_contato"]);
$sql = " DELETE FROM contato WHERE id_contato = '{$id_contato}'";

mysqli_query($conexao, $sql) or die("Erro ao excluir " . mysqli_error($conexao));
echo "Contato excluído";
?>
