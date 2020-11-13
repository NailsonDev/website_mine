<?php 
	getPermissionPage(7);
    $addUser = Painel::$cargos;
?>
<div class="box-content">
<h2><i data-toggle="tooltip" class="fas fa-info-circle" title="Aviso: Apenas adicione caso queira dar acesso a novos usuários ao painel de controle!"></i> Adicionar Usuário do Painel</h2>
	<form method="post" enctype="multipart/form-data">

		<?php 
			if(isset($_POST['acao']))
			{
                $login = $_POST['login'];
				$password = md5($_POST['password']);
                $nick = $_POST['nickname'];
                $cargo = $_POST['cargos'];

				if($login == '')
				{
					echo Painel::alert('erro','Você não pode deixar o campo Título vazio!');
				}else if($password == ''){
					echo Painel::alert('erro','Você não pode deixar o campo Texto vazio!');
				} 
				else 
				{
					$passwordmd5 = md5($password);
					echo Painel::alert('sucesso','Atualizado com sucesso!');
					Painel::setUsuarioPainel($login,$password,$nick,$cargo);
				}
			}
		?>

		<div class="form-group">
			<label>Login:</label>
			<input type="text" name="login" required>
		</div><!--form-group-->
        <div class="form-group">
			<label>Senha:</label>
			<input type="password" name="password" required>
		</div><!--form-group-->
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