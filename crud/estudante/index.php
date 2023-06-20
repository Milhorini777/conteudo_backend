<?php
    require_once "consultar_todos.php";
    require_once "../template/cabecalho.php";
    require_once "../template/menu_restrito.php";
?>

    <div class="container">
    <h1>Estudantes</h1>
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
          <th scope="col">Idade</th>
          <th scope="col">Curso</th>
          <th scope="col">Universidade</th>
          <th scope="col">Ações</th>
    </tr>
         </thead>
  <tbody>
    <?php foreach($estudantes as $estudante): ?> 
    <tr>
        <td><?= $estudante->nome ?></td>
        <td><?= $estudante->idade ?></td>
        <td><?= $estudante->curso ?></td>
        <td><?= $estudante->universidade ?></td>
        <td class="text-end" width="25%">
        <a href="formulario.php?id=<?= $estudante->idestudante ?>" class="btn btn-primary">
            <i class="fa-regular fa-pen-to-square"></i>
            Atualizar
          </a>
          <a href ="excluir.php?id=<?=$estudante->idestudante ?>" class="btn btn-danger">
          <i class="fa-regular fa-trash-can"></i>
            Excluir</a>
        </td>
    </tr>
    <?php endforeach; ?> 

  </tbody>
    </table>
    </div>
    
<?php require_once "../template/rodape.php" ?>;