<?php 
	getPermissionPage(6);

	$anuncio = Mysql::conectar()->prepare("SELECT * FROM `tb_anuncio` ORDER BY id DESC ");
	$anuncio->execute();
	$anuncio = $anuncio->fetch();

?>
<div class="box-content">
	<h2><i class="fas fa-bell"></i>Últimas Notícias</h2>
	<form method="post">

		<?php 
			if(isset($_POST['acao']))
			{
                $noticia = $_POST['noticia'];
                $nome = $_SESSION['nome'];

				if($noticia == '')
				{
					echo Painel::alert('erro','Você não pode deixar o campo vazio!');
				} 
				else 
				{
					echo Painel::alert('sucesso','Atualizado com sucesso!');
					Site::setNovidades($noticia,$nome);
				}
			}
		?>

		<div class="form-group">
            <label>Atualizar notícia:</label>
            <p>(Limite de 50 caractéres)</p>
			<input type="text" name="noticia" required maxlength="50" placeholder="Notícia...">
		</div><!--form-group-->
		<div class="form-group">
			<input type="submit" name="acao" value="Atualizar!">
		</div><!--form-group-->

	</form>



</div><!--box-content-->