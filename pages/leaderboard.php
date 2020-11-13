<?php 

$leader = Site::getLeaderboard();


?>
<div class="container">
            <div class="welcome">
                <h2>Leaderboard</h2>
                <div class="post-content">
                <table>
                    <tr>
                        <th>Jogador</th>
                        <th>Top</th>
                        <th>Wins</th>
                        <th>Kills</th>
                        <th>K/D</th>
                    </tr>
                    <?php foreach($leader as $key => $value){?>
                        <tr>
                            <th>
                                <img src="https://minotar.net/helm/<?php echo $value['player'];?>/32.png">
                                <p><?php echo $value['player'];?></p>
                            </th>
                            <th><?php echo $value['top'];?></th>
                            <th><?php echo $value['wins'];?></th>
                            <th><?php echo $value['kills'];?></th>
                            <th><?php echo $value['kd'];?></th>
                        </tr>
                    <?php }?>
                </table>
                </div>
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

