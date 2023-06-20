<?php
    require_once "consultar_por_id.php";
    require_once "../template/cabecalho.php";
?>
    <div class="container">
    <h1>Cadastro do Estudante</h1>
    <hr>

    <form action="<?php echo isset($estudante) ? 
                            "atualizar.php" : 
                            "inserir.php"; ?>"

    method="post" enctype="multipart/form-data">
        
        <input type="hidden" name="idestudante" value="<?php echo $estudante->idestudante ?? ""; ?>"><br>

        <label class="form-label">Nome</label><br>
        <input type="text" class="form-control" name="nome" value="<?php echo $estudante->nome ?? ""; ?>"><br>

        <label class="form-label">Idade</label> <br>
        <input type="text" class="form-control" name="idade" value="<?php echo $estudante->idade ?? ""; ?>"><br>

        <label class="form-label">Curso</label><br>
        <input type="text" class="form-control" name="curso" value="<?php echo $estudante->curso ?? ""; ?>"><br>

        <label class="form-label">Universidade</label><br>
        <input type="text" class="form-control" name="universidade" value="<?php echo $estudante->universidade ?? ""; ?>"><br>


        <button type="submit" class="btn btn-primary">Inserir</button>
        
    </form>
    
    </div>
 
    <?php require_once "../template/rodape.php"; ?>