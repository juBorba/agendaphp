<header>
   <h3>Contatos</h3> 
</header>
<div>
   <a href="index.php?menuop=cad_contatos">Novo</a>
</div>
<div>
<form action="index.php?menuop=contatos" method="post">
<input type="text" name= "txt_pesquisa">
<input type="submit" value="Pesquisar">
</form>
</div>

<table border="1">
   <thead>
      <tr>
         <th>ID</th>
         <th>Nome</th>
         <th>E-mail</th>
         <th>Telefone</th>
         <th>Endereço</th>
         <th>Data de Nascimento</th>
         <th>Editar</th>
         <th>Excluir</th>



      </tr>

   </thead>
   <tbody>
   <?php
   $txt_pesquisa = (isset($_POST["txt_pesquisa"]))?$_POST["txt_pesquisa"]:"";

   $sql = "SELECT id_contato,nm_contato, email_contato, fone_contato, endereco_contato, date_format(dt_nasc_contato,'%d/%m/%Y') AS dt_nasc_contato FROM contato WHERE id_contato='{$txt_pesquisa}' or nm_contato LIKE '%{$txt_pesquisa}%'  ORDER BY nm_contato ASC";
   $rs = mysqli_query($conexao,$sql) or die("erro na consulta" . mysqli_error($conexao));
   while($dados = mysqli_fetch_assoc($rs) ) {
      

   ?>
   <tr>
   
      <td><?=$dados["id_contato"]?></td>
      <td><?=$dados["nm_contato"]?></td>
      <td><?=$dados["email_contato"]?></td>
      <td><?=$dados["fone_contato"]?></td>
      <td><?=$dados["endereco_contato"]?></td>
      <td><?=$dados["dt_nasc_contato"]?></td>
      <td><a href="index.php?menuop=editar_contatos&id_contato=<?=$dados["id_contato"] ?>">Editar</a></td>
      <td><a href="index.php?menuop=excluir_contatos&id_contato=<?=$dados["id_contato"] ?>">Excluir</a></td>
   </tr>
<?php
   }
   ?>

   </tbody>
</table>