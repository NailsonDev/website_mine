<?php include('config.php');?>
<?php 

    $site_edit = Mysql::conectar()->prepare("SELECT * FROM `tb_info.site` ");
	$site_edit->execute();
    $site_edit = $site_edit->fetch();
    
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_edit['titulo'];?></title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="icon" href="<?php echo INCLUDE_PATH?>assets/img/logo.png">

</head>
<body>
<base base="<?php echo INCLUDE_PATH; ?>" />
	<?php
		$url = isset($_GET['url']) ? $_GET['url'] : 'inicio';	
	?>
    <header>
        <div class="container">
            <div class="logo"><a href="<?php echo INCLUDE_PATH; ?>"><?php echo $site_edit['nome'];?></a></div>
            <nav class="desktop-menu">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH?>loja"><i class="fas fa-cart-plus"></i> Loja</a></li>
                    <li><a href="<?php echo INCLUDE_PATH?>equipe"><i class="fas fa-user-friends"></i> Equipe</a></li>
                    <li><a href="<?php echo INCLUDE_PATH?>contato"><i class="fas fa-id-badge"></i> Contato</a></li>
                    <li><a href="<?php echo INCLUDE_PATH?>leaderboard"><i class="fas fa-book-reader"></i> LeaderBoard</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
            <div class="menu-icon">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        <nav class="mobile-menu">
            <ul>
                <li><a href="<?php echo INCLUDE_PATH?>loja">Loja</a></li>
                <li><a href="<?php echo INCLUDE_PATH?>equipe">Equipe</a></li>
                <li><a href="<?php echo INCLUDE_PATH?>contato">Contato</a></li>
                <li><a href="<?php echo INCLUDE_PATH?>leaderboard">LeaderBoard</a></li>
            </ul>
        </nav>
        <div class="clear"></div>
    </header>
   <div class="container">
        <div class="rede-icon">
            <a target="_blank" href="https://discord.gg/W4KAQBG"><img src="assets/img/dc.png"></a>
            <button class="btn" data-clipboard-text="jogar.seuservidor.com.br">
                Copiar IP <i class="far fa-copy"></i>
            </button>
        </div>
        <div class="clear"></div>
   </div>
   <div class="center">
        <div class="logo-icon">
            <a href="<?php echo INCLUDE_PATH?>"><img src="<?php echo INCLUDE_PATH?>assets/img/logo.png" title="Início"></a>
        </div>
   </div>

   <div class="box-content">
    <?php
        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        }else{
            include('pages/inicio.php');
        };
    ?>
   </div>
   <footer>
       <div class="footer">
           <h2>Todos os direitos reservados <?php echo $site_edit['nome'];?></h2>
           <p><?php echo $site_edit['direitos'];?></p>
       </div>
   </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="assets/js/menu.js"></script>
    <script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        new ClipboardJS('.btn')
    </script>
</body>
</html>