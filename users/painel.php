<?php
session_start();
include('verifica_login.php');

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="25">
    <title>Caio Lima</title>

    <!-- FavCon -->
    <link rel="shortcut icon" href="../img/faviconcl.ico" type="image/x-in"/>


    <!-- BOOTSTRAP -->    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!-- Css -->
    
    <link rel="stylesheet" href="../css/main.css">

    <!-- Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




</head>

<body>

    <header>
    <!--Menu Superior-->

        <nav class="navbar navbar-expand-lg navbar" id="menu_superior">
            <div class="container">
              <a class="navbar-brand h1 mb-0 nome_site" href="index.html" ><p id=""> Caio Lima <br> Web</p></a>
              <h6 class="msg-bem-vindo" id="nick_usuario">Seja bem-vindo ao painel  <?php echo $_SESSION['usuario'];?></h6>
                <button type="button" class="navbar-toggler ml-auto"
                    data-toggle="collapse" data-target="#links-menu, #categorias">
                  <i class="material-icons">menu</i>
                </button>
                <div id="links-menu" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="painel.php">Painel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="loggout.php">Sair</a>
                        </li>          
                    </ul>
                </div>
            </div >
        </nav>

    </header>







   

    <!-- Scripts -->

    <script src="../js/painel.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>

</html>