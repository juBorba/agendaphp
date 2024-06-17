<?php
include("configuracao.php");

$conexao = mysqli_connect(SERVIDOR,USUARIO,SENHA,BANCO) OR die("não conectou" . mysqli_connect_error());
