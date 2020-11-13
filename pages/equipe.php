<?php 
    $equipe_1 = Site::getEquipePlayer_1();
    $yt = count($equipe_1);
    $equipe_2 = Site::getEquipePlayer_2();
    $trial = count($equipe_2);
    $equipe_3 = Site::getEquipePlayer_3();
    $moderador = count($equipe_3);
    $equipe_4 = Site::getEquipePlayer_4();
    $moderadorplus = count($equipe_4);
    $equipe_5 = Site::getEquipePlayer_5();
    $gerente = count($equipe_5);
    $equipe_6 = Site::getEquipePlayer_6();
    $administrador = count($equipe_6);
    $equipe_7 = Site::getEquipePlayer_7();
    $diretor = count($equipe_7);
    $equipe_8 = Site::getEquipePlayer_8(); // Foi apenas para quebrar um galho kk, não fiquei bravo com essa ganbiarra que fiz kkk ;C
    $dono = count($equipe_8);
?>
<div class="container">
            <div class="welcome">
                <h2>Equipe <?php echo NOME_EMPRESA;?></h2>
                <div class="post-content">

                    <div class="equipe-category">
                        <div class="box-equipe-top color-red">
                            <h3>Dono (<?php echo $dono;?>)</h3>
                        </div> <!-- Barra da categoria-->
                        <?php 
                            foreach($equipe_8 as $key => $value){
                             
                        ?>
                            <div class="perfil-equipe">
                                <img src="https://minotar.net/helm/<?php echo $value['nickname'];?>/64.png" alt="">
                                <p><?php echo $value['nickname'];?></p>
                            </div> 
                        <?php }?>
                            <div class="clear"></div>
                    </div> <!-- equipe-category -->
                    
                    <div class="equipe-category">
                        <div class="box-equipe-top color-red">
                            <h3>Diretor (<?php echo $diretor;?>)</h3>
                        </div> <!-- Barra da categoria-->
                        <?php 
                            foreach($equipe_7 as $key => $value){
                        ?>
                            <div class="perfil-equipe">
                                <img src="https://minotar.net/helm/<?php echo $value['nickname'];?>/64.png" alt="">
                                <p><?php echo $value['nickname'];?></p>
                            </div> 
                        <?php }?>
                            <div class="clear"></div>
                    </div> <!-- equipe-category -->

                    <div class="equipe-category">
                        <div class="box-equipe-top color-red-claro">
                            <h3>Administrador (<?php echo $administrador;?>)</h3>
                        </div> <!-- Barra da categoria-->
                        <?php foreach($equipe_6 as $key => $value){?>
                            <div class="perfil-equipe">
                                <img src="https://minotar.net/helm/<?php echo $value['nickname'];?>/64.png" alt="">
                                <p><?php echo $value['nickname'];?></p>
                            </div> 
                        <?php }?>
                            <div class="clear"></div>
                    </div> <!-- equipe-category -->
                    
                    <div class="equipe-category">
                        <div class="box-equipe-top color-red-claro">
                            <h3>Gerente (<?php echo $gerente;?>)</h3>
                        </div> <!-- Barra da categoria-->
                        <?php foreach($equipe_5 as $key => $value){?>
                            <div class="perfil-equipe">
                                <img src="https://minotar.net/helm/<?php echo $value['nickname'];?>/64.png" alt="">
                                <p><?php echo $value['nickname'];?></p>
                            </div> 
                        <?php }?>
                            <div class="clear"></div>
                    </div> <!-- equipe-category -->

                    <div class="equipe-category">
                        <div class="box-equipe-top color-purple-forte">
                            <h3>Moderador+ (<?php echo $moderadorplus;?>)</h3>
                        </div> <!-- Barra da categoria-->
                        <?php foreach($equipe_4 as $key => $value){?>
                            <div class="perfil-equipe">
                                <img src="https://minotar.net/helm/<?php echo $value['nickname'];?>/64.png" alt="">
                                <p><?php echo $value['nickname'];?></p>
                            </div> 
                        <?php }?>
                            <div class="clear"></div>
                    </div> <!-- equipe-category -->

                    <div class="equipe-category">
                        <div class="box-equipe-top color-purple-claro">
                            <h3>Moderador (<?php echo $moderador;?>)</h3>
                        </div> <!-- Barra da categoria-->
                        <?php foreach($equipe_3 as $key => $value){?>
                            <div class="perfil-equipe">
                                <img src="https://minotar.net/helm/<?php echo $value['nickname'];?>/64.png" alt="">
                                <p><?php echo $value['nickname'];?></p>
                            </div> 
                        <?php }?>
                            <div class="clear"></div>
                    </div> <!-- equipe-category -->

                    <div class="equipe-category">
                        <div class="box-equipe-top color-rosa">
                            <h3>Trial (<?php echo $trial;?>)</h3>
                        </div> <!-- Barra da categoria-->
                        <?php foreach($equipe_2 as $key => $value){?>
                            <div class="perfil-equipe">
                                <img src="https://minotar.net/helm/<?php echo $value['nickname'];?>/64.png" alt="">
                                <p><?php echo $value['nickname'];?></p>
                            </div> 
                        <?php }?>
                            <div class="clear"></div>
                    </div> <!-- equipe-category -->

                    <div class="equipe-category">
                        <div class="box-equipe-top color-cian">
                            <h3>YouTube+ (<?php echo $yt;?>)</h3>
                        </div> <!-- Barra da categoria-->
                        <?php foreach($equipe_1 as $key => $value){?>
                            <div class="perfil-equipe">
                                <img src="https://minotar.net/helm/<?php echo $value['nickname'];?>/64.png" alt="">
                                <p><?php echo $value['nickname'];?></p>
                            </div> 
                        <?php }?>
                            <div class="clear"></div>
                    </div> <!-- equipe-category -->
                </div> <!-- post-content -->
            </div>
            <div class="fique-por-dentro">
                <h2>Veja também!</h2>
                <div class="redes-content">
                    <iframe src="https://discordapp.com/widget?id=739593623850713100&theme=dark" width="100%" height="300px" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
                    <br>
                    <br>
                    <a class="twitter-timeline" href="https://twitter.com/_HyzeMC?ref_src=twsrc%5Etfw">Tweets by _HyzeMC</a> 
                </div>
            </div>
        <div class="clear"></div>
</div>
