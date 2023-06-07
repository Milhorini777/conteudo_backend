<?php require"../noticia/consultar_categorias.php";?>

<!-- Menu principal-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">  
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Menu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                <?php foreach($cursos as $c): ?>
                <li class="nav-item">
                        <a class="nav-link" href="index.php?assunto=<?php echo $c->curso;?>">
                        <?php echo $c->curso; ?>
                </a>
                    </li>
                    <?php endforeach; ?>

                    <li class="nav-item">
                        <a class="nav-link" 
                        href="../estudante/index.php">
                       Acesso restrito
                </a>
                    </li>
                    
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <hr>

    <!-- Final do menu principal-->