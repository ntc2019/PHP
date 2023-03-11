<?php 
    class Database
    {
        CONST URL = 'http://localhost/Cuong/PHP/';

        CONST HOST = 'localhost';
        CONST USERNAME = 'root';
        CONST PASSWORD = '';
        CONST DB_NAME = 'doan';
        CONST PORT = 3306;
        protected $connect;

        public function connect()
        {
            $this->connect = mysqli_connect(self::HOST,self::USERNAME,self::PASSWORD,self::DB_NAME,self::PORT);
            mysqli_set_charset($this->connect,'utf8');
            if(mysqli_connect_errno())
            {
                return false;
            }
            return $this->connect;
        }

        
    }
?>