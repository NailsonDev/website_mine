<?php 
	getPermissionPage(5);
	$addUser = Painel::$cargos;
	$equipe = Mysql::conectar()->prepare("SELECT id FROM tb_equipe");
	$equipe->execute();
	$staffs = $equipe->rowCount();
?>
<div class="box-content">
<h2><i data-toggle="tooltip" class="fas fa-info-circle" title="Aviso: Irá apenas adicionar um novo membro na equipe do site."></i> Adicionar Membro Na Equipe (<?php echo $staffs;?>)</h2>
	<form method="post" enctype="multipart/form-data">

		<?php 
			if(isset($_POST['acao']))
			{
                $nick = $_POST['nickname'];
                $cargo = $_POST['cargos'];

				if($nick == '')
				{
					echo Painel::alert('erro','Você não pode deixar o campo Título vazio!');
				} 
				else 
				{
					echo Painel::alert('sucesso','Membro adicionado com sucesso!');
					Site::setUsuarioSite($nick,$cargo);
				}
			}
		?>

        <div class="form-group">
			<label>Nickname:</label>
			<input type="text" name="nickname" required>
		</div><!--form-group-->
        <div class="form-group">
			<label>Cargo:</label>
			<select name="cargos">
             <?php 
                foreach($addUser as $key => $value){
                    if($key < $_SESSION['cargos']) echo '<option value="'.$key.'">'.$value.'</option>';
                }; 
             ?>
            </select>
		</div><!--form-group-->
		<div class="form-group">
			<input type="submit" name="acao" value="Atualizar!">
		</div><!--form-group-->

	</form>



</div><!--box-content-->