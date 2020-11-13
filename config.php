<?php 

    session_start();
    date_default_timezone_set('America/Sao_Paulo');

    $autoload =  function($class){
        include('classes/'.$class.'.php');
    };
    spl_autoload_register($autoload);

    // Configuração 
    
    define('INCLUDE_PATH','http://localhost/website_mine/'); // url do site, coloca a / no final.
    define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');

    define('BASE_DIR_PAINEL',__DIR__.'/painel');

    // Conectar com banco de dados!
    define('HOST','localhost'); // Host do banco de dados
    define('USER','root'); // Usuário do banco de dados.
    define('PASSWORD',''); // Senha do usuário.
    define('DATABASE','web_mine');// Nome da BATABASE

    define('NOME_EMPRESA','HyzeMc'); // Nome do servidor, recomendo apenas o Primeiro nome do server.

    
    function pegaCargo($indice){
		return Painel::$cargos[$indice];
	}

    function getPermissionCategory($permissao){ // Função de verificar o cargo na categoria do painel.
		if($_SESSION['cargos'] >= $permissao){
			return;
		}else{
			echo 'style="display:none;"';
		}
	}

	function getPermissionPage($permissao){ // Função de verificar o cargo na página.
		if($_SESSION['cargos'] >= $permissao){
			return;
		}else{
			include('painel/pages/permissao_negada.php');
			die();
        }
    }
?>