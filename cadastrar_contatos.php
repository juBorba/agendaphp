<header> 
   <h3> Cadastro de Contato </h3>

</header>
<div>

<form action="index.php?menuop=inserir_contatos" method="post">
   <div>
      <label for="nm_contato">Nome</label>
      <input type = "text" name="nm_contato">
   </div>

   <div>
      <label for="email_contato">E-mail</label>
      <input type = "email" name="email_contato">
   </div>

   <div>
      <label for="fone_contato">Telefone</label>
      <input type = "text" name="fone_contato">
   </div>

   <div>
      <label for="endereco_contato">Endereço</label>
      <input type = "text" name="endereco_contato">
   </div>

   <div>
      <label for="dt_nasc_contato">Data de nascimento</label>
      <input type = "date" name="dt_nasc_contato">
   </div>

   <div>
      <input type = "submit" value="Adicionar" name="btnAdicionar">
   </div>

</form>
</div>