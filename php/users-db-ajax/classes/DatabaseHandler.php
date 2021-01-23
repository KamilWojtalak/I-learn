<?php

class DatabaseHandler {
    private $host = 'localhost';
    private $dbname = 'users_db_ajax';
    private $user = 'root';
    public $db;

    public function __construct() {
        $this->db = new PDO( "mysql:dbname=$this->dbname;host=$this->host;user=$this->user" );

    }

    public function select() {
        $this->stmt = $this->db->prepare( "SELECT * FROM users;" );

        $this->stmt->execute();

        return $this->stmt->fetchAll();
    }

    public function insert($name, $lastname) {
        $this->stmt = $this->db->prepare( "INSERT INTO users VALUES (default, :name, :lastname);" );

        $this->stmt->bindParam( ':name', $name);
        $this->stmt->bindParam( ':lastname', $lastname );

        $this->stmt->execute();
    }
}