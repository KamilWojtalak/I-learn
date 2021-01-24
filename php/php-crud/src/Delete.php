<?php
require_once "./DB.php";

class Delete extends DB {

    public function __construct() {
        parent::__construct();

        $this->deleteUser( $_GET['id'] );
    }

    public function deleteUser( $data ) {
        $this->stmt = $this->db->prepare( 'DELETE FROM users WHERE id=:id;' );
        $this->stmt->bindParam( ':id', $data );

        $this->stmt->execute(); 
        

        require_once "./Select.php";
    }
}

new Delete();