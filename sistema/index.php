<?php
require_once("conexao.php");
    $senha = '123';
    $senha_cript = md5($senha);
    $res_usuarios = $pdo->query("SELECT * from usuarios");    

    $dados_usuarios = $res_usuarios->fetchAll(PDO::FETCH_ASSOC);
	$linhas_usuarios = count($dados_usuarios);
    //caso não tenha nenhum usuario cadastrado ele vai criaro usuario administrador 
    if($linhas_usuarios == 0){
        $res_insert = $pdo->query("INSERT into usuarios (nome,email,senha,senha_original,nivel) values ('Administrador', '$email_site', '$senha_cript','$senha', 'admin' )");
    }



?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Login</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <!-- estrutura da tela de Login -->
    <div class="main">

        <!-- container da tela de login -->
        <div class="container">
            <center>
                <div class="middle">
                    <div id="login">

                        <form action="autenticar.php" method="POST">

                            <fieldset class="clearfix">

                                <p><span class="fa fa-user"></span><input type="email" name="email" placeholder="Email" required></p> 
                                <p><span class="fa fa-lock"></span><input type="password" name="senha" placeholder="Senha" required></p> 

                                <div>
                                    <span style="width:48%; text-align:left;  display: inline-block;"><a class="small-text" href="#" title="Clique aqui para recuperar a senha">Recuperar Senha</a></span>
                                    <span style="width:50%; text-align:right;  display: inline-block;"><input type="submit" value="Entrar"></span>
                                </div>

                            </fieldset>
                            <div class="clearfix"></div>
                        </form>

                        <div class="clearfix"></div>

                    </div> <!-- end login -->
                    <div class="logo"><img src="./img/Logo metade normal.png" width="100%"  alt="Logo da empresa" >

                        <div class="clearfix"></div>
                    </div>

                </div>
            </center>
        </div>

    </div>



    <!-- scripts -->

    <!-- estes dois scripts são da tela de login -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>

</html>