<?php
require_once "./DB.php";


class Insert extends DB {

    public function __construct() {
        parent::__construct();

        $this->validate();
    }

    public function validate() {
        if ( isset( $_POST['name'] ) && isset($_POST['lastname'] )) {
        
            $this->name = $_POST['name'];
            $this->lastname = $_POST['lastname'];
        
        
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
                $this->time = new DateTime();
                $this->time = $this->time->format( 'Y-m-d H:i:s' );
        
                $this->insert( $this->name, $this->lastname, $this->time );
        
            }
            require_once "./Select.php";
        }
    }



    public function insert( $name, $lastname, $time ) {
           
            $this->query = 'INSERT INTO users VALUES (default, :name, :lastname, :time);';
            $this->stmt = $this->db->prepare( $this->query );
            
            $this->stmt->bindParam( ':name', $this->name );
            $this->stmt->bindParam( ':lastname', $this->lastname );
            $this->stmt->bindParam( ':time', $this->time );


            $this->stmt->execute();
    }
}

new Insert();



// public function update( $id, $name, $lastname, $date ) {
//     $this->query = '';

// }

// public function delete( $id ) {
//     $this->query = '';

// }