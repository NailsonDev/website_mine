<?php 

    class Site{

        public static function setUsuarioSite($nome,$cargo)
        {
            $sql = Mysql::conectar()->prepare('INSERT INTO tb_equipe VALUES (NULL,?,?)');
            $sql->execute(array($nome,$cargo));
        }

        public static function setTitle($title,$direitos,$nome)
        {
       
            $sql = Mysql::conectar()->prepare("UPDATE `tb_info.site` SET titulo = ?, direitos = ?, nome = ?");
            $sql->execute(array($title,$direitos,$nome));
        }

          public static function getLeaderboard()
          {
               $sql = Mysql::conectar()->prepare("SELECT * FROM `tb_leaderboard` ORDER BY top DESC LIMIT 20");
               $sql->execute();
               return $sql->fetchAll();
          }

          public static function upContato($nickname,$email,$mensagem)
          {
               $sql = Mysql::conectar()->prepare("INSERT INTO tb_emails VALUES (NULL,?,?,?)");
               $sql->execute(array($nickname,$email,$mensagem));
               
          }

          public static function setNovidades($novidades,$nome)
          {
               $sql = Mysql::conectar()->prepare("INSERT INTO tb_novidades VALUES (NULL,?,?)");
               $sql->execute(array($novidades,$nome));
          }

          public static function getNovidades()
          {
               $sql = Mysql::conectar()->prepare("SELECT * FROM tb_novidades  ORDER BY id DESC LIMIT 3");
               $sql->execute();
               
               if($sql->rowCount() == 0){
                    echo '<div class="novidades-ultra">Sem notícias :(</div>';
                    return $sql->fetchAll();
               } else 
               {
                    return $sql->fetchAll();
               }
          }
     //////// kk não brigue cmg pls ;C
       public static function getEquipePlayer_1()
       {
            $sql = Mysql::conectar()->prepare("SELECT * FROM `tb_equipe` WHERE cargo = 1");
            $sql->execute();
            return $sql->fetchAll();
       }

       public static function getEquipePlayer_2()
       {
            $sql = Mysql::conectar()->prepare("SELECT * FROM `tb_equipe` WHERE cargo = 2");
            $sql->execute();
            return $sql->fetchAll();
       }
       public static function getEquipePlayer_3()
       {
            $sql = Mysql::conectar()->prepare("SELECT * FROM `tb_equipe` WHERE cargo = 3");
            $sql->execute();
            return $sql->fetchAll();
       }
       public static function getEquipePlayer_4()
       {
            $sql = Mysql::conectar()->prepare("SELECT * FROM `tb_equipe` WHERE cargo = 4");
            $sql->execute();
            return $sql->fetchAll();
       }
       public static function getEquipePlayer_5()
       {
            $sql = Mysql::conectar()->prepare("SELECT * FROM `tb_equipe` WHERE cargo = 5");
            $sql->execute();
            return $sql->fetchAll();
       }
       public static function getEquipePlayer_6()
       {
            $sql = Mysql::conectar()->prepare("SELECT * FROM `tb_equipe` WHERE cargo = 6");
            $sql->execute();
            return $sql->fetchAll();
       }
       public static function getEquipePlayer_7()
       {
            $sql = Mysql::conectar()->prepare("SELECT * FROM `tb_equipe` WHERE cargo = 7");
            $sql->execute();
            return $sql->fetchAll();
       }
       public static function getEquipePlayer_8()
       {
            $sql = Mysql::conectar()->prepare("SELECT * FROM `tb_equipe` WHERE cargo = 8");
            $sql->execute();
            return $sql->fetchAll();
       }
    }
?>