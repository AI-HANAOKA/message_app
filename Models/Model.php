<?php
    require_once('dbconnect.php');

    class Model {
        protected $table;
        protected $db_manager;

        public function __construct() {
            $this->db_manager = new Dbmanager();
            $this->db_manager->connect();
        }

        public function getAll() {
            $stmt = $this->db_manager->dbh->prepare('SELECT * FROM ' . $this->table);
            $stmt->execute();

            $tasks = $stmt->fetchAll();
            return $tasks;
        }

        public function findByID($id) {
          $stmt = $this->db_manager->dbh->prepare('SELECT * FROM ' . $this->table . 'WHERE id = ?');
          $stmt->execute(['$id']);
          $task = $stmt->fetch();

          return $task;
        }

        public function delete($data) {
          $stmt = $this->db_manager->dbh->prepare('DELETE * FROM ' . $this->table . 'WHERE id = ?');

          return $stmt->execute($data);
        }

    }
?>