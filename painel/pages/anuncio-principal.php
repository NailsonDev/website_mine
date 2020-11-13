<?php 
	getPermissionPage(6);

	$anuncio = Mysql::conectar()->prepare("SELECT * FROM `tb_anuncio` ORDER BY id DESC ");
	$anuncio->execute();
	$anuncio = $anuncio->fetch();

?>
<div class="box-content">
	<h2><i class="fas fa-bell"></i> Anúncio Principal</h2>
	<form method="post" enctype="multipart/form-data">

		<?php 
			if(isset($_POST['acao']))
			{
				$titulo = $_POST['titulo'];
				$texto = $_POST['texto'];
				$date = date("Y-m-d");
				$date = str_replace('-', '/', $date);
				$date = date('Y-m-d', strtotime($date));
				$apelido = $_SESSION['nome'];
				$grupo = $_SESSION['cargos'];

				if($titulo == '')
				{
					echo Painel::alert('erro','Você não pode deixar o campo Título vazio!');
				}else if($texto == ''){
					echo Painel::alert('erro','Você não pode deixar o campo Texto vazio!');
				} 
				else 
				{
					echo Painel::alert('sucesso','Atualizado com sucesso!');
					Painel::setAnuncio($titulo,$texto,$date,$apelido,$grupo);
				}
			}
		?>

		<div class="form-group">
			<label>Título:</label>
			<input type="text" name="titulo" required placeholder="Novo título...">
		</div><!--form-group-->
		<div class="form-group">
			<label>Texto:</label>
			<textarea class="tinymce" name="texto"></textarea>
		</div><!--form-group-->
		<div class="form-group">
			<input type="submit" name="acao" value="Atualizar!">
		</div><!--form-group-->

	</form>



</div><!--box-content-->