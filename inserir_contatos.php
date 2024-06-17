<header>
<h3>Inserir Contatos</h3>   
</header>
<?php
   $nm_contato =$_POST["nm_contato"];
   $email_contato =$_POST["email_contato"];
   $fone_contato =$_POST["fone_contato"];
   $endereco_contato =$_POST["endereco_contato"];
   $dt_nasc_contato =$_POST["dt_nasc_contato"];
   $sql = "INSERT INTO contato(nm_contato, email_contato, fone_contato, endereco_contato, dt_nasc_contato) 
   VALUES('{$nm_contato}','{$email_contato}','{$fone_contato}','{$endereco_contato}','{$dt_nasc_contato}')";
   mysqli_query($conexao, $sql) or die ("Erro na consulta" . mysqli_error($conexao));
   echo "O registro foi inserido com sucesso";
?>  