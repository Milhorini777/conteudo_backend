<?php

if(!empty($_FILES['foto']['name'])){
//local temporário onde foi realizado o upload da imagem
$origem = $_FILES['foto']['tmp_name'];

//local para onde o arquivo de upload foi movido
$nome_foto = "../upload/".time().$_FILES['foto']['name'];

//local para onde a foto de upload
$destino = "../uploads/$nome_foto";

//move o arquivo de upload para a pasta destino
move_uploaded_file($origem, $destino);
}else{
    $nome_foto = "sem_foto.jpg";
}