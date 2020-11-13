<?php 
 
    class Painel{
        public static $cargos = [
            '0' => 'Membro',
            '1' => 'YouTube+',
            '2' => 'Trial',
            '3' => 'Moderador',
            '4' => 'Moderador+',
            '5' => 'Gerente',
            '6' => 'Administrador',
            '7' => 'Diretor',
            '8' => 'Dono',
            '9' => 'Dono', //O cargo 9 é apenas para o Dono geral.
        ];

        public static function logado(){
			return isset($_SESSION['login']) ? true : false;
        }

        public static function loggout(){
			setcookie('lembrar','true',time()-1,'/');
			session_destroy();
			header('Location: '.INCLUDE_PATH_PAINEL);
        }
        
        public static function carregarPagina(){
			if(isset($_GET['url'])){
				$url = explode('/',$_GET['url']);
				if(file_exists('pages/'.$url[0].'.php')){
					include('pages/'.$url[0].'.php');
				}else{
					//Página não existe!
					header('Location: '.INCLUDE_PATH_PAINEL);
				}
			}else{
				include('pages/home.php');
			}
        }
        
        public static function setAnuncio($titulo,$texto,$data,$apelido,$grupo)
        {
            $sql = Mysql::conectar()->prepare("INSERT INTO tb_anuncio VALUES (null,?,?,?,?,?)");
            $sql->execute(array($titulo,$texto,$data,$apelido,$grupo));
        }

        public static function setAnuncioUpload($titulo,$texto) 
        {
            $sql = Mysql::conectar()->prepare("UPDATE tb_anuncio SET titulo = ?, anuncio = ?");
            $sql->execute(array($titulo,$texto));
        }

        public static function setUsuarioPainel($user,$password,$nome,$cargo)
        {
            $token = uniqid();
            $sql = Mysql::conectar()->prepare("INSERT INTO `tb_admin.usuario` VALUES (null,?,?,?,?,?)");
            $sql->execute(array($user,$password,$nome,$cargo,$token));
        }

        public static function alert($tipo,$mensagem) // Fazer uma alerta caso algo de ruim/bom.
        {
            if($tipo == 'sucesso'){
				echo '<div class="box-alert sucesso"><i class="fa fa-check"></i> '.$mensagem.'</div>';
			}else if($tipo == 'erro'){
				echo '<div class="box-alert erro"><i class="fa fa-times"></i> '.$mensagem.'</div>';
			}
        }

        public static function getPlayerUpdate($login,$password)
        {
            $sql = Mysql::conectar()->prepare("UPDATE `tb_admin.usuario` SET  password = ?, nome = ? WHERE user = ?");
            $sql->execute(array($login,$password,$_SESSION['user']));
        }
        public static function getTeamPainel()
        {
            $sql = Mysql::conectar()->prepare("SELECT * FROM `tb_admin.usuario` order by cargo desc");
            $sql->execute();
            return $sql->fetchAll();
        }

        public static function getEmails()
        {
            $sql = Mysql::conectar()->prepare("SELECT * FROM `tb_emails` order by id desc limit 10");
            $sql->execute();
            return $sql->fetchAll();
        }
    }
    
?>
