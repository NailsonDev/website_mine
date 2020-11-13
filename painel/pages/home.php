<?php 
	$getEquipePainel =  Painel::getTeamPainel();
	$cargos = Painel::$cargos;
?>

<div class="box-content w100">
	<h2><?php echo NOME_EMPRESA;?> - Usuários do painel!</h2>
	<table class="tabela">
       	<tr>
            <th>Nickname</th>
            <th>Cargo</th>
		</tr>
		<?php foreach($getEquipePainel as $key => $value){?>
        <tr>
            <th>
				<br>
            	<img src="https://minotar.net/helm/<?php echo $value['nome'];?>/32.png">
            	<p><?php echo $value['nome'];?></p>
            </th>
			<th><?php echo $cargos[$value['cargo']];?></th>
		</tr>
		<?php }?>
    </table>
</div>
