<?php 
    $senhamd = md5($_SESSION['password']);
?>
<div class="box-content">
	<h2>Dados pessoais</h2>
	<form method="post" enctype="multipart/form-data">

		<?php 
			if(isset($_POST['acao'])){
                $senha = $_POST['password'];
                $nome =  $_POST['nick'];

				if($senha == ''){
                    echo Painel::alert("erro","Você deixou o campo: Senha vazio!");
                }else if($nome == ''){
                    echo Painel::alert("erro","Você deixou o campo: Nickname vazio!");
                }else{
                    $senhamd5 = md5($_POST['password']);
                    echo Painel::alert("sucesso","Dados atualizado com sucesso!");
                    Painel::getPlayerUpdate($senhamd5,$nome);
                } 
			}
		?>

        <div class="form-group">
			<label>Nickname:</label>
			<input type="text" name="nick" placeholder="<?php echo $_SESSION['nome'];?>">
		</div><!--form-group-->
        <div class="form-group">
			<label>Senha:</label>
			<input type="password" name="password">
		</div><!--form-group-->
		<div class="form-group">
			<input type="submit" name="acao" value="Atualizar!">
		</div><!--form-group-->

	</form>



</div><!--box-content-->