
<div class="container">
            <div class="welcome">
                <h2><?php echo NOME_EMPRESA;?> - dúvida? entre em contato conosco!</h2>
                <div class="post-content">

                   <form method="post">
                        <?php 
                            if(isset($_POST['contact']))
                            {
                                $nick = $_POST['nickname'];
                                $email = $_POST['email'];
                                $texto = $_POST['texto'];

                                if($nick == '' || $email == '' || $texto == ''){
                                   echo '<p class="alert color-error">Não é permitido campos vazio!</p>';
                                }else{
                                    echo '<p class="alert color-sucesso">Um membro da nossa equipe irá responde-lo em breve! Verifique as caixa de e-mail diariamente.</p>';
                                    Site::upContato($nick,$email,$texto);
                                }
                            }
                                    ?>

                       <input type="text" name="nickname" required placeholder="Nickname">
                       <input type="email" name="email" required placeholder="E-mail de contato.">
                       <textarea name="texto" name="texto" placeholder="Mensagem"></textarea>
                       <input type="submit" name="contact" value="Enviar">
                   </form>
                   <div class="clear"></div>
                </div>
            </div>
            
            <div class="fique-por-dentro">
                <h2>Veja também!</h2>
                <div class="redes-content">
                    <iframe src="https://discordapp.com/widget?id=722593854754259024&theme=dark" width="100%" height="300px" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
                    <br>
                    <br>
                    <a class="twitter-timeline" href="https://twitter.com/_HyzeMC?ref_src=twsrc%5Etfw">Tweets by _HyzeMC</a> 
                </div>
            </div>
            <div class="clear"></div>
</div>

