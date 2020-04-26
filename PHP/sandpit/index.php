<?php include( 'header.php' );

class Siema {
   static function sayHello() {
      echo 'Hello.';
   }
}

call_user_func( array('Siema', 'sayHello') );