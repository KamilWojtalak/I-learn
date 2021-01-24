<?php
require_once "./DB.php";
class Select extends DB {

    public function __construct() {
        
        parent::__construct();

        $this->query = 'SELECT * FROM users;';

        $this->stmt = $this->db->prepare( $this->query );
        $this->stmt->execute();
        $this->result = $this->stmt->fetchAll();
        echo json_encode( $this->result );
    }
}

new Select();
