<header>
<h3>Atualizar Contatos</h3>   
</header>
<?php
   $id_contato=$_POST["id_contato"];
   $nm_contato =$_POST["nm_contato"];
   $email_contato =$_POST["email_contato"];
   $fone_contato =$_POST["fone_contato"];
   $endereco_contato =$_POST["endereco_contato"];
   $dt_nasc_contato =$_POST["dt_nasc_contato"];
   $sql = "UPDATE contato SET
   nm_contato = '{$nm_contato}',
   email_contato = '{$email_contato}',
   fone_contato = '{$fone_contato}',
   endereco_contato = '{$endereco_contato}',
   dt_nasc_contato = '{$dt_nasc_contato}'
   where id_contato = '{$id_contato}'
   ";
      mysqli_query($conexao, $sql) or die ("Erro na consulta " . mysqli_error($conexao));
   echo "O registro foi atualizado";
?>  