<?php
    require_once "consultar_por_id.php";
    require_once "../template/cabecalho.php";
?>
    <div class="container">
    <h1>Cadastro de noticias</h1>
    <hr>

    <form action="<?php echo isset($noticia) ? 
                            "atualizar.php" : 
                            "inserir.php"; ?>"

    method="post" enctype="multipart/form-data">
        
        <input type="hidden" name="idnoticia" value="<?php echo $estudante->idestudante ?? ""; ?>"><br>

        <label class="form-label">Nome</label><br>
        <input type="text" class="form-control" name="nome" value="<?php echo $estudante->titulo ?? ""; ?>"><br>

        <label class="form-label">Idade</label> <br>
        <textarea class="form-control" name="idade">
            <?php echo $estudante->idade ?? ""; ?>
        </textarea><br>

        <label class="form-label">Curso</label><br>
        <input type="text" class="form-control" name="categoria" value="<?php echo $estudante->curso ?? ""; ?>"><br>

        <label class="form-label">Universidade</label><br>
        <input type="text" class="form-control" name="categoria" value="<?php echo $estudante->universidade ?? ""; ?>"><br>


        <button type="submit" class="btn btn-primary">Inserir</button>
        
    </form>
    
    </div>

    <?php require_once "../template/rodape.php"; ?>