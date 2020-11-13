<?php 
    $getEmails =  Painel::getEmails();
    $total = count($getEmails);
    
?>

<div class="box-content">
	<h2><i data-toggle="tooltip" class="fas fa-info-circle" title="Você tem <?php echo $total;?> emails para ler!"></i> <?php echo NOME_EMPRESA;?> - Emails (<?php echo $total;?>)</h2>
    
    <?php foreach($getEmails as $key => $value){?>
        <div class="box-email">
            <div class="info-emails">
                <div class="close"><i class="fas fa-times"></i></div>
                <img src="https://minotar.net/helm/<?php echo $value['nickname']?>/32.png"> 
                <p><?php echo $value['nickname']?></p>
                <p><b>Email</b>: <?php echo $value['email'];?></p>
                <p><b>Mensagem</b>:<?php echo $value['mensagem'];?></p>
            </div>
        </div>
    <?php }?>
    <div class="clear"></div>
</div>