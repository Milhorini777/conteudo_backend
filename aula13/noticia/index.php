<?php
    require_once "consultar_todos.php";
    require_once "../template/cabeçalho.php";
?>

<!doctype html>

    <div class="container">
    <h1> Notícias </h1>
    <hr>
    
    <div class="text-end">
      <a href="formulario.php" class="btn btn-success">
        Inserir Novo
      </a>
    </div>

    <table class="table" id="tabela_dados">
    <thead>
      <tr>
        <th scope="col"> Título </th>
        <th scope="col"> Categoria </th>
        <th scope="col">Foto</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
  <tbody>
    <?php foreach($noticias as $noticia): ?> 
    <tr>
        <td><?= $noticia->titulo ?></td>
        <td><?= $noticia->categoria ?></td>
        <td><img src="../uploads/<?= $noticia->foto ?>" height="40px"></td>
        <td class="text-end" width="25%">

          <a href="formulario.php?id=<?= $noticia->idnoticia ?>" class="btn btn-primary">
            <i class="fa-regular fa-pen-to-square"></i>
            Atualizar
          </a>

          <a href="excluir.php?id=<?= $noticia->idnoticia ?>" class="btn btn-danger">
            <i class="fa-regular fa-trash-can"></i>
            Excluir
          </a>

        </td>
    </tr>
    <?php endforeach; ?> 

  </tbody>
    </table>
    </div>

    <?php require_once "../template/rodape.php" ?>

      
</html>