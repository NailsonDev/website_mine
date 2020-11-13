<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HyzeMC | Login Panel</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/bulma.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH_PAINEL ?>css/login.css">
    </head>

    <body>
        <form class="geral" method="post">
            <?php 
            // Html feito por um amigo meu, kkk.
                    if(isset($_POST['acao'])){
                        $user = $_POST['user'];
                        $password = md5($_POST['password']);
                        $sql = Mysql::conectar()->prepare("SELECT * FROM `tb_admin.usuario` WHERE user = ? AND password = ?");
                        $sql->execute(array($user,$password));
                        
                        if($sql->rowCount() == 1){
                            $info = $sql->fetch();
                                $_SESSION['login'] = true;
                                $_SESSION['user'] = $user;
                                $_SESSION['password'] = $password;
                                $_SESSION['cargos'] = $info['cargo'];
                                $_SESSION['nome'] = $info['nome'];
                            header('Location: '.INCLUDE_PATH_PAINEL);
                            die(); //exit();
                        }else{
                            echo '<div class="falha"><h2>Usuário ou senha incorretos!</h2></div>';
                        }
                    }
            ?>
            <div class="login">
                <div class="toplog">
                    <a href="<?php echo INCLUDE_PATH?>"><img class="imglog" src="img/HyzeLogo.png"></a>
                    <h2 class="logname"><?php echo NOME_EMPRESA;?> - Dashboard</h2>
                </div>

                <div class="username">
                    <label>Username</label>
                    <input type="text" name="user" placeholder="Login">
                
                </div>

                <div class="username">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Senha">

                </div>
                <div class="username">

                    <input type="submit" name="acao" value="Acessar">

                </div>

            </div>
        </form>
    </body>


</html>