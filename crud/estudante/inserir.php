<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   //verifica se o nome, login e senha foram enviado
   //do formulário
   if(isset($_POST['nome']) && isset($_POST['idade']) &&
     isset($_POST['curso']) && isset($_POST['universidade'])){

      //faz o upload da foto do usuário
      require_once "faz_upload.php";

   $nome = $_POST['nome'];
   $idade = $_POST['idade'];
   $curso = $_POST['curso'];
   $universidade = $_POST['universidade'];
   $foto = $nome_foto;

   //cria uma variável com um comando SQL
   $SQL = "INSERT INTO `estudante` (`nome`, `idade`, `curso`, `universidade`, foto) VALUES (?, ?, ?, ?, ?);";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("ssss", $nome, $idade, $curso, $universidade, $foto);

   //executa o comando
   $comando->execute();

}
   //volta para o formulário
   header("Location: index.php");

   







