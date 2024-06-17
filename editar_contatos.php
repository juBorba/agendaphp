<?php

$id_contato = $_GET["id_contato"];
$sql = "SELECT * FROM contato WHERE id_contato = {$id_contato}";
$rs = mysqli_query($conexao,$sql) or die ("erro na recuperação " . mysqli_error($conexao) );
$dados = mysqli_fetch_assoc($rs);
?>
<header> 
<h3>Editar contato</h3>
</header>  

<div>
<form action="index.php?menuop=atualizar_contatos" method="post">
  
   <div>
      <label for="id_contato">ID</label>
      <input type = "text" name="id_contato" value="<?=$dados["id_contato"]?>">
   </div>

   <div>
      <label for="nm_contato">Nome</label>
      <input type = "text" name="nm_contato" value="<?=$dados["nm_contato"]?>">
   </div>

   <div>
      <label for="email_contato">E-mail</label>
      <input type = "email" name="email_contato" value="<?=$dados["email_contato"]?>">
   </div>

   <div>
      <label for="fone_contato">Telefone</label>
      <input type = "text" name="fone_contato" value="<?=$dados["fone_contato"]?>">
   </div>

   <div>
      <label for="endereco_contato">Endereço</label>
      <input type = "text" name="endereco_contato" value="<?=$dados["endereco_contato"]?>">
   </div>

   <div>
      <label for="dt_nasc_contato">Data de nascimento</label>
      <input type = "date" name="dt_nasc_contato" value="<?=$dados["dt_nasc_contato"]?>">
   </div>

   <div>
      <input type = "submit" value="Atualizar" name="btnAtualizar">
   </div>

</form>
</div>