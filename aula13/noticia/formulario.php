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
        
        <input type="hidden" name="idnoticia" value="<?php echo $noticia->idnoticia ?? ""; ?>"><br>

        <label class="form-label">Título</label><br>
        <input type="text" class="form-control" name="titulo" value="<?php echo $noticia->titulo ?? ""; ?>"><br>

        <label class="form-label">Matéria</label> <br>
        <textarea class="form-control" name="materia">
            <?php echo $noticia->materia ?? ""; ?>
        </textarea><br>

        <label class="form-label">Categoria</label><br>
        <input type="text" class="form-control" name="categoria" value="<?php echo $noticia->categoria ?? ""; ?>"><br>

        <label class="form-label">Foto</label><br>
        <input type="file" class="form-control" name="foto"><br>

        <button type="submit" class="btn btn-primary">Inserir</button>
        
    </form>
    
    </div>

    <?php require_once "../template/rodape.php"; ?>