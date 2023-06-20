<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   $id = $_POST['idestudante'];
   $nome = $_POST['nome'];
   $idade = $_POST['idade'];
   $curso = $_POST['curso'];
   $universidade = $_POST['universidade'];


   //cria uma variável com um comando SQL
   $SQL = "UPDATE `estudante` SET `nome`=?, `idade`=?, `curso`=?, `universidade`=? WHERE  `idestudante`= ?;";

 echo $SQL;
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("ssssi", $nome, $idade, $curso, $universidade, $id);

   //executa o comando
   $comando->execute();

   //volta para o formulário aaaaaaa
   header("Location: index.php");