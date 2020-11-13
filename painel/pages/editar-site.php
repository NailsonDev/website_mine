<?php 
    getPermissionPage(8);
	$site_edit = Mysql::conectar()->prepare("SELECT * FROM `tb_info.site` ");
	$site_edit->execute();
	$site_edit = $site_edit->fetch();

?>
<div class="box-content">
	<h2><i class="fas fa-palette"></i> Editar site</h2>
	<form method="post" enctype="multipart/form-data">

		<?php 
			if(isset($_POST['acao']))
			{
				$titulo = $_POST['titulo'];
                $direitos = $_POST['direitos'];
                $nome = $_POST['nome'];

				if($titulo == '' || $direitos == '' || $nome == ''){
					Painel::alert("erro","Não é permitido campos vazio!");
                } else {
                    Painel::alert("sucesso","Dados atualizado com!");
                    Site::setTitle($titulo,$direitos,$nome);
                }
			}
		?>

		<div class="form-group">
			<label>Título do site:</label>
			<input type="text" name="titulo"  value="<?php echo $site_edit['titulo'];?>">
        </div><!--form-group-->
        
		<div class="form-group">
			<label>Direitos reservados:</label>
			<input type="text" name="direitos"  value="<?php echo $site_edit['direitos'];?>">
        </div><!--form-group-->
        
		<div class="form-group">
			<label>Nome da logo:</label>
			<input type="text" name="nome"  value="<?php echo $site_edit['nome'];?>">
		</div><!--form-group-->
		<div class="form-group">
			<input type="submit" name="acao" value="Atualizar!">
		</div><!--form-group-->

	</form>



</div><!--box-content-->