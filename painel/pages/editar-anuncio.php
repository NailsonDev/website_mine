<?php 
	getPermissionPage(5);
	
	$anuncio = Mysql::conectar()->prepare("SELECT * FROM `tb_anuncio` ORDER BY id DESC ");
	$anuncio->execute();
	$anuncio = $anuncio->fetch();

?>
<div class="box-content">
	<h2><i class="fas fa-palette"></i> Editar anúncio principal</h2>
	<form method="post" enctype="multipart/form-data">

		<?php 
			if(isset($_POST['acao']))
			{
				$titulo = $_POST['titulo'];
				$texto = $_POST['texto'];

				if($titulo == ''){
					Painel::alert("erro","Não é permitido campos vazio!");
				} else{
					Painel::setAnuncioUpload($titulo,$texto);
				}
			}
		?>

		<div class="form-group">
			<label>Título:</label>
			<input type="text" name="titulo"  value="<?php echo $anuncio['titulo'];?>">
		</div><!--form-group-->
		<div class="form-group">
			<label>Texto:</label>
			<textarea class="tinymce" name="texto"><?php echo $anuncio['anuncio'];?></textarea>
		</div><!--form-group-->
		<div class="form-group">
			<input type="submit" name="acao" value="Atualizar!">
		</div><!--form-group-->

	</form>



</div><!--box-content-->