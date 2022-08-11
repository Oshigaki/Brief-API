<?php
    //DB settings
    class Database{
        private $host ='localhost';
        private $db_name = 'myblog';
        private $user = 'root';
        private $password = 'root';
        private $connection;

        //DB connection
        public function connect() {
            $this ->connection =null;

            try{
                $this ->conn =new PDO('mysql:host='. $this->host . ';bdname =' . $this ->db_name, $this->user, $this->password);
                $this -> conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e){
                echo 'Connexion à la base donnée echoué' . $e ->getMessage();
            }

            return $this->connection;
        }

    }
?>