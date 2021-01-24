<?php

class InitDB {
    private $dbname = "php_crud";
    private $host = "localhost";
    private $user = "root";
    private $query = '';

    public function __construct() {
        $this->db = new PDO( "mysql:host=$this->host;user=$this->user" );

        $this->query = "DROP DATABASE $this->dbname;";

        $this->db->exec( $this->query );

        $this->query = "CREATE DATABASE IF NOT EXISTS $this->dbname DEFAULT COLLATE utf8mb4_polish_ci;";

        $this->db->exec( $this->query );

        unset( $this->db );
        
        $this->db = new PDO("mysql:dbname=$this->dbname;host=$this->host;user=$this->user");

        $this->query = 'CREATE TABLE IF NOT EXISTS users (
            id SERIAL,
            name VARCHAR(20) NOT NULL,
            lastname VARCHAR(20) NOT NULL,
            time DATETIME NOT NULL,
            PRIMARY KEY (id)
        );';

        $this->db->exec( $this->query );

        require_once "./Select.php";

    }
}

new InitDB();
