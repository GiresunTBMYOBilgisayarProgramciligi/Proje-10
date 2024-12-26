<?php
    class AdminClass{
        protected $pdo= null;
        protected $host= 'localhost';
        protected $dbname= 'admin';
        protected $username= 'root';
        protected $password= '';
        protected $charset = 'utf-8';

        public function __construct() {
           try{
            $this->pdo= new pdo("mysql:host=$this->host;dbname=$this->dbname;charset=$₺his->charset",$this->username, $this->password);
            print 'bağlantı sağlandı...';
           }catch (PDOException $error){
            die($error->getMessage());
           }

        }
    }
?>