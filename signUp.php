<?php
    error_reporting(1);
    ini_set('default_charset', 'UTF-8');

    if ($_POST != NULL) {
        $db = new mysqli("localhost", "root", "", "livremente");

        if($db->connect_error == true){
            echo "Erro de conexão:" . $db->connect_error . "<br />";
            exit;
        }

        $nome = $_POST["nome"];
        $login = $_POST["login"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $sql = "INSERT INTO usuario(nome, login, email, senha) VALUES('$nome','$matricula', '$email', MD5('$senha'))";

        $retorno = $db->query($sql);

        if (retorno) {
            echo "
                <script>
                    alert('Conta criada com sucesso.');
                    location.href = 'signIn.php';
                </script>";
        }
        else {
            echo "<script>alert('Erro ao criar conta.')</script>";
            echo $db->error;
        }
    }
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Livremente | Cadastre-se</title>
    <!-- Bootstrap core CSS -->
    <link href="newage/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="newage/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="newage/vendor/simple-line-icons/css/simple-line-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="device-mockups/device-mockups.min.css">
    <!-- Custom styles for this template -->
    <link href="newage/css/new-age.css" rel="stylesheet">
    <link href="newage/css/login.css" rel="stylesheet">
</head>
<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Livremente</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#features">Entrar com sua conta</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-7 my-auto">
                    <div class="header-content mx-auto">
                        <h1 class="mb-5">Junte-se à rede social que libertará a sua mente!</h1>
                        <h3 class="mb-5">Crie sua estante, organize suas leituras, acompanhe seus amigos, e mais.</h3>
                        <a href="#download" class="btn btn-outline btn-xl js-scroll-trigger">Entrar com sua conta</a>
                    </div>
                </div>
                <div class="col-lg-5 my-auto">
                    <form method="post">
                        <div class="signUpBox">
                            <p>
                                Criar uma nova conta
                            </p>
                            <div>
                                <input type="text" name="nome" placeholder="Nome e sobrenome" />
                            </div>
                            <div>
                                <input type="text" name="login" placeholder="Login"/>
                            </div>
                            <div>
                                <input type="email" name="email" placeholder="E-mail"/>
                            </div>
                            <div>
                                <input type="password" name="senha" placeholder="Senha"/>
                            </div>
                            <div>
                                <input type="submit" value="Criar conta" />
                            </div>
                        </div>
                    </form>


                    <!--<div class="device-container">
                        <div class="device-mockup iphone6_plus portrait white">
                            <div class="device">
                                <div class="screen">
                                    
                                    <img src="img/demo-screen-1.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="button">

                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </header>

    <footer>
        <div class="container">
            <p>
                Feito com <i class="fa fa-heart"></i>
                por André Silveira e Isis Gomes.
                &copy; 2017.
            </p>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="newage/vendor/jquery/jquery.min.js"></script>
    <script src="newage/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="newage/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="newage/js/new-age.min.js"></script>
</body>
</html>
