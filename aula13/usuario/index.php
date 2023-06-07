<?php
    require_once "consultar_todos.php";
    require_once "../template/cabecalho.php";
?>
    <div class="container">
    <h1>Usuários</h1>
    <hr>

    <div class="text-end">
      <a href="formulario.php" class="btn btn-success">
        Inserir Novo
      </a>
    </div>

    <table class="table" id="tabela_dados">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Login</th>
          <th scope="col">Foto</th>
          <th scope="col">Ações</th>
    </tr>
         </thead>
  <tbody>
    <?php foreach($usuarios as $usuario): ?> 
    <tr>
        <td><?= $usuario->nome ?></td>
        <td><?= $usuario->login ?></td>
        <td><img src="../upload/<?= $usuario->foto ?>" height="25px"></td>
        <td class="text-end" width="25%">
        <a href="formulario.php?id=<?= $usuario->idusuario ?>" class="btn btn-primary">
            <i class="fa-regular fa-pen-to-square"></i>
            Atualizar
          </a>
          <a href ="excluir.php?id=<?=$usuario->idusuario ?>" class="btn btn-danger">
          <i class="fa-regular fa-trash-can"></i>
            Excluir</a>
        </td>
    </tr>
    <?php endforeach; ?> 

  </tbody>
    </table>
    </div>
    
    <?php require_once "../template/rodape.php"; ?>