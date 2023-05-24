<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   //verifica se o nome, login e senha foram enviado
   //do formulário
   if(isset($_POST['titulo']) && isset($_POST['materia']) &&
     isset($_POST['categoria'])){

      //faz o upload da foto do usuario
      require_once "faz_upload.php";

   $titulo = $_POST['titulo'];
   $materia = $_POST['materia'];
   $categoria = $_POST['categoria'];
   $foto = $nome_foto;

   //cria uma variável com um comando SQL
   $SQL = "INSERT INTO `noticia` (`titulo`, `materia`, `categoria`, foto) VALUES (?, ?, ?, ?);";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("ssss", $titulo, $materia, $categoria, $foto);

   //executa o comando
   $comando->execute();

}
   //volta para o formulário
   header("Location: index.php");