<?php 

class DB {
    protected $dbname = "php_crud";
    protected $host = "localhost";
    protected $user = "root";
    protected $query = '';

    public function __construct() {
        $this->db = new PDO( "mysql:dbname=$this->dbname;host=$this->host;user=$this->user" );

    }



    // public function update( $id, $name, $lastname, $date ) {
    //     $this->query = '';

    // }

    // public function delete( $id ) {
    //     $this->query = '';

    // }
}