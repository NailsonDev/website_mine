<?php
	if(isset($_GET['loggout'])){
		Painel::loggout();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Painel de Controle</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="icon" href="../assets/img/logo.png">
		<link href="<?php echo INCLUDE_PATH_PAINEL ?>css/style.css" rel="stylesheet" />
		
	</head>
<body>

<div class="menu">
	<div class="menu-wraper">
	<div class="box-usuario">
		<div class="imagem-usuario">
			<img src="https://minotar.net/helm/<?php echo $_SESSION['nome'];?>/64.png">
		</div><!--avatar-usuario-->
		<div class="nome-usuario">
			<p>Nick: <b><?php echo $_SESSION['nome'];?></b></p>
			<p>Rank: <?php echo pegaCargo($_SESSION['cargos']);?></p>
		</div><!--nome-usuario-->
	</div><!--box-usuario-->
	<div class="items-menu">
		<h2 <?php getPermissionCategory(5)?>>Site Home</h2>
		<a  <?php getPermissionCategory(6)?> href="<?php echo INCLUDE_PATH_PAINEL ?>anuncio-principal">Anúncio Principal</a>
		<a  <?php getPermissionCategory(5)?> href="<?php echo INCLUDE_PATH_PAINEL ?>editar-anuncio">Editar Anúncio Principal</a>
		<a  <?php getPermissionCategory(6)?> href="<?php echo INCLUDE_PATH_PAINEL ?>excluir-anuncio">Excluir Anúncio</a>
		<a  <?php getPermissionCategory(6)?> href="<?php echo INCLUDE_PATH_PAINEL ?>ultimas-novidades">Últimas Novidades</a>
		<a  <?php getPermissionCategory(6)?> href="<?php echo INCLUDE_PATH_PAINEL ?>editar-novidades">Editar Novidades</a>
		<h2 <?php getPermissionCategory(5)?>>Equipe do site</h2>
		<a  <?php getPermissionCategory(5)?> href="<?php echo INCLUDE_PATH_PAINEL ?>adicionar-membro">Adicionar Membro</a>
		<a  <?php getPermissionCategory(6)?> href="<?php echo INCLUDE_PATH_PAINEL ?>excluir-membro">Excluir Membro</a>
		<h2 <?php getPermissionCategory(7)?>>Contato</h2>
		<a  <?php getPermissionCategory(7)?> href="<?php echo INCLUDE_PATH_PAINEL ?>notificacao">Notificações</a>
		<h2 >Usuário do Painel</h2>
		<a  <?php getPermissionCategory(6)?> href="<?php echo INCLUDE_PATH_PAINEL ?>adicionar-usuario">Adicionar Usuário Painel</a>
		<a  href="<?php echo INCLUDE_PATH_PAINEL ?>editar-dados">Editar seus dados</a>
		<h2 <?php getPermissionCategory(6)?>>Site</h2>
		<a  <?php getPermissionCategory(6)?> href="<?php echo INCLUDE_PATH_PAINEL ?>editar-site">Editar Site</a>
	
	</div><!--items-menu-->
	</div><!--menu-wraper-->
</div><!--menu-->

<header>
	<div class="center">
		<div class="menu-btn">
			<i class="fa fa-bars"></i>
		</div><!--menu-btn-->

		<div class="loggout">
			<a <?php if(@$_GET['url'] == ''){ ?> style="background: #4901bd;padding: 18px;" <?php } ?> href="<?php echo INCLUDE_PATH_PAINEL ?>"> <i class="fa fa-home"></i> <span>Página Inicial</span></a>
			<a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"> <i class="fa fa-window-close"></i> <span>Sair</span></a>
		</div><!--loggout-->

		<div class="clear"></div>
	</div>
</header>

<div class="content">


<?php Painel::carregarPagina(); ?>

</div><!--content-->

<script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="<?php echo INCLUDE_PATH_PAINEL ?>js/main.js"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
  tinymce.init({
	  selector:'.tinymce',
	  plugins: 'image'
	});

	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})
	</script>
</body>
</html>