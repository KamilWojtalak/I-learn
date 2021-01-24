<?php 
require_once "./DB.php";

class Modify extends DB {

    public function __construct() {
        parent::__construct();

        $this->validate();
    }

    public function validate() {
        if ( isset( $_POST['modify-id'] ) && isset($_POST['modify-name']) && isset($_POST['modify-lastname'] )) {
        
            $this->id = preg_replace( '/id/', '', $_POST['modify-id']);
            $this->name = $_POST['modify-name'];
            $this->lastname = $_POST['modify-lastname'];

            echo "";
        
        
            function clearString( $str ) {
                $str = trim( $str );
                $str = stripslashes( $str );
                $str = htmlspecialchars( $str );
                return $str;
            }
        
            $this->name = clearString( $this->name );
            $this->lastname = clearString( $this->lastname );
        
            if ( preg_match( '/\d/', $this->name ) || preg_match( '/\d/', $this->lastname )) {
                $this->name = preg_replace( '/\d/', '', $this->name);
                $this->lastname = preg_replace( '/\d/', '', $this->lastname);
            }
        
            if ( !empty($this->name) && !empty($this->lastname) ) {
        
                $this->update( $this->id, $this->name, $this->lastname );
        
            }
            require_once "./Select.php";
        }
    }

    public function update( $id, $name, $lastname) {
        $this->query = "UPDATE users SET name=:name, lastname=:lastname WHERE id=:id;";

        $this->stmt = $this->db->prepare( $this->query );
        $this->stmt->bindParam( ':id', $id);
        $this->stmt->bindParam( ':name', $name);
        $this->stmt->bindParam( ':lastname', $lastname);

        $this->stmt->execute();

    }
}

new Modify();