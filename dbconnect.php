<?php

    class Dbmanager {
        // プロパティ
        public function connect() {
          $host = "localhost";
          $dbname = "message_app";
          $chaeset = "utf8mb4";
          $user = 'root';
          $password = '';
          
          $dsn = "mysql:dbname=$dbname; host=$host; charset=$chaeset";
          $this->dbh = new PDO($dsn, $user, $password);
        }
    }
?>