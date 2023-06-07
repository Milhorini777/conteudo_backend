<?php
    require_once "../login/validar.php";
    require_once "../template/cabecalho.php";
    require_once "../template/menu_restrito.php";
?>
    <div class="container">
    <h1>Área Restrita</h1>
    <hr>

    <form action="validar.php" method="post" enctype="multipart/form-data">
    

        <label class="form-label">Login</label><br>
        <input type="text" class="form-control" name="login"><br> 

        <label class="form-label">Senha</label><br>
        <input class="form-control" type="password" name="senha"><br> 

        <br>

        <button type="submit" class="btn btn-primary">Entrar</button>
        
    </form>
    
    </div>

    <?php require_once "../template/rodape.php"; ?>