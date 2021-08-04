<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caio Lima</title>

    <!-- FavCon -->
    <link rel="shortcut icon" href="img/faviconcl.ico" type="image/x-in"/>


    <!-- BOOTSTRAP -->    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!-- Css -->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    

    <!-- Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- WhatsApp -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://wa.me/5511972319977"
    style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;    z-index:1000;" target="_blank">
    <i style="margin-top:16px" class="fa fa-whatsapp"></i></a>



</head>

<body>

    <header>
    <!--Menu Superior-->

        <nav class="navbar navbar-expand-lg navbar" id="menu_superior">
            <div class="container">
              <a class="navbar-brand h1 mb-0 nome_site" href="../index.html" ><p> Caio Lima <br> Web</p></a>
                <button type="button" class="navbar-toggler ml-auto"
                    data-toggle="collapse" data-target="#links-menu, #categorias">
                  <i class="material-icons">menu</i>
                </button>
                <div id="links-menu" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.html">Home</a>
                        </li>
                        
                       
                        <li class="nav-item">
                            <a class="nav-link" href="../pages/contato.html">Contato</a>
                        </li>  
                        
                       
                        <li class="nav-item">
                            <a class="nav-link" href="../pages/cryptMoedas.html">Crypto Moedas</a>
                        </li>          
                    </ul>
                </div>
            </div >
        </nav>

    </header>


    <!-- LOGIN -->

    <div class="container">
        <div class="form_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                    
                        <form class="form_horizontal" method="POST" action="verifica.php">
                            <div class="form_icon"><i class="fa fa fa-user-circle"></i></div>
                                <h3 class="tittle">Login</h3>



                                <?php

                                if(isset($_SESSION['nao_autenticado'])):
                                ?>

                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Usuário e/ou senha inválidos!</strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>

                                <?php
                                    endif;
                                    unset($_SESSION['nao_autenticado']);                                    
                                ?>




                                    <div class="form-group">
                                        
                                        <span class="input-icon"><i class="fa fa-user"></i></span>
                                            <input class="form-control" type="text" name="usuario" placeholder="Usuário">
                                    </div>

                                    <div class="form-group">
                                        <span class="input-icon"><i class="fa fa-lock"></i></span>
                                            <input class="form-control" type="password" name="senha" placeholder="Senha">
                                    </div>

                                        <button class="btn signin" type="submit">Login</button>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




        <!-- Scripts -->

        <script src="../js/cripyto.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
    </body>

    <!--FOOTER-->
    <footer class="footer container">

        <div class="container text-center">
    
             <!-- Grid row -->
            <div class="row">
      
                  <!-- Grid column -->
                <div class="col-md-4 mx-auto">
      
                 <!-- Content -->
                    <h4 class="rodape-canto-esquerdo-titulo font-weight-bold text-uppercase mt-3 mb-4">Caio Lima</h4>
                    <p class="rodape-canto-esquerdo-texto">Desenvolvedor: HTML5, CSS3, JavaScript, Php, Java, SQL, MySql<br /><br />
                    Infraestrutura<br /><br />
                    Marketing-Digital</br></br>
                    Consultoria</p>      
                </div>
    
                 <!--Coluna Central-->
      
              <hr class="clearfix w-100 d-md-none">
      
            
                <div class="col-md-3 mx-auto">
      
                    <!-- Links -->
                    <h5 class="rodape-central-titulo font-weight-bold text-uppercase mt-3 mb-4">Redes Sociais</h5>
        
                    <ul class="list-unstyled">
                        <li>
                            <a class="face-rodape" href="https://www.facebook.com/caio.cesar.12914" target="_blank"><img src="../img/face1.png" /> Facebook</a>
                        </li>
                        <br />                  
                        <li>
                            <a class="lk-rodape" href="https://www.linkedin.com/in/caio-lima-5aa0b4175/" target="_blank"><img src="../img/lk.png" /> Linkedin</a>
                        </li>
                    </ul>
      
                </div>
                 <!-- Grid column -->
      
              <hr class="clearfix w-100 d-md-none">
      
                 <!-- Grid column -->
              <div class="col-md-3 mx-auto">
      
                <!-- Links -->
                <h5 class="canto-direito-titulo font-weight-bold text-uppercase mt-3 mb-4">CONTATO</h5>
                <ul class="rodape-texto-direito list-unstyled">
                  <li>
                    <a>Caio Lima</a>
                  </li>
                  <li>
                    <a>Tel: (11) 9 7231-9977</a>
                  </li>
                  <li>
                    <a>Email: caiolima@uni9.edu.br</a>
                  </li>
                </ul>
      
                </div>
         <!-- Grid column -->
      
      
                
                </div>
            
        </div>
    
    </footer>
    
    </html>