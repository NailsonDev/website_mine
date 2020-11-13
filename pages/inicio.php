<?php 

    $anuncio = Mysql::conectar()->prepare("SELECT * FROM `tb_anuncio` ORDER BY id DESC ");
    $anuncio->execute();
    $anuncio = $anuncio->fetch();

?>
<div class="container">
            <div class="welcome">
                <h2><?php echo $anuncio['titulo'];?></h2>
                <div class="post-content">
                    <div class="post">
                        <div class="post-image">
                            <img src="https://minotar.net/helm/<?php echo $anuncio['apelido'];?>/64.png">
                        </div>
                        <div class="post-by">
                            <p>Postado por <b><?php echo $anuncio['apelido'];?></b></p>
                            <p><?php echo date('d/m/Y',strtotime($anuncio['data']));?> • <b><?php echo pegaCargo($anuncio['grupo']);?></b></p>
                        </div>
                    </div>
                    <?php echo $anuncio['anuncio'];?>
                </div>
            </div>
            
            <div class="fique-por-dentro">
                <h2>Veja também!</h2>
                <div class="redes-content">
                    <div class="ultimas-noticias">
                        <h2>Últimas Notícias</h2>
                        <?php 
                            $novidades = Site::getNovidades();
                            foreach($novidades as $key => $value){
                            $valor = substr($value['novidades'],0,27);
                        ?>
                            <div class="bar-ultimas">
                                <img src="https://minotar.net/helm/<?php echo $value['nome'];?>/32.png">
                                <a href="#" data-toggle="tooltip" title="<?php echo $value['novidades'];?>"><?php echo $valor;?></a>
                            </div>
                        <?php }?>
                    </div>
                    <div class="clear"></div>
                    <iframe src="https://discordapp.com/widget?id=739593623850713100&theme=dark" width="100%" height="300px" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
                    <br>
                    <br>
                   <div class="twiiter-time">
                   <a class="twitter-timeline" href="https://twitter.com/Minecraft?ref_src=twsrc%5Etfw">Tweets de Minecraft</a>
                   </div>
                </div>
            </div>
            <div class="clear"></div>
</div>


