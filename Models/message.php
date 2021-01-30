<?php
    require_once('Model.php');

    class Message extends Model {
        protected $table = 'message';

        public function create($data) {
          $stmt = $this->db_manager->dbh->prepare('INSERT INTO ' . $this->table . ' (name, message, date) VALUES (?, ?, ?)');
          $stmt->execute($data);
        }

        public function update($date) {
          $stmt = $this->db_manager->dbh->prepare('UPDATE ' . $this->table . ' SET title = ?, message = ?, WHERE id = ?');
          $stmt->execute($date);
        }
    }
?>