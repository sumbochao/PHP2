<?php
    class DATABASE
    {
        private $host = 'localhost';
        private $dbname = 'php2_ongtap2';
        private $username = 'root';
        private $password = '';
        private $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        private $sql="";
        private $DBH="";
        function __construct()
        {
            //tao doi tuong thuoc lop PDO
            $this->DBH = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname,$this->username, $this->password,$this->options);
        }
        function SetQuery($_sql)
        {
            $this->sql=$_sql;
        }
        function ThucHienTruyVan()
        {
            $result=null;   
            $result=$this->DBH->query($this->sql);
            return $result;
        }
        function ThucHienLenh()
        {
            $result=null;
            $result=$this->DBH->exec($this->sql);
            return $result;
        }
    }
?>