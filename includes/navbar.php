<div class="container">
    <div class="row">
            <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: lightyellow; position: fixed;left:0;right:0;" >
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src ='logox.png' id="img"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <h1 style = "text-align:center;padding-left:500px;"><b> <?php print_r(ucwords($pagename));  ?> </b></h1>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link" href="oferte_speciale.php">Last Minute</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php print_r(ucwords($_SESSION['nume']) .' '. ucwords($_SESSION['prenume']));  ?>
                    </a>
                    <?php
                    if (isset($_SESSION['role']) && $_SESSION['role'] == 'user') {
                    ?>
                    <ul class="dropdown-menu" style="background-color: lightyellow;">
                        <li><a class="dropdown-item" href="logout.php">Deconectare</a></li>
                        <li><a class="dropdown-item"href="delete_account.php">Sterge Contul</a></li>
                    </ul>
                    <?php }
                    elseif (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){
                        ?>

                    <ul class="dropdown-menu" style="background-color: lightyellow;">
                        <li><a class="dropdown-item" href="raport.php">Raport pagina</a></li>
                        <li><a class="dropdown-item"href="logout.php">Deconectare</a></li>
                    </ul>
                    <?php } ?>


                </ul>
                
                </div>
            </div>
            </nav>
        </div>
    </div>
</div>