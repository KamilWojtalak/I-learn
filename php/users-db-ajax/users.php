<?php

spl_autoload_register ( function ($class) {
        include_once "./classes/$class.php";
    }
);

if ( isset( $_POST['name'] ) &&  isset( $_POST['last-name'] )) {

    function clearInput( $input ) {
        $input = trim( $input );
        $input = stripslashes( $input );
        $input = htmlspecialchars( $input );
        return $input;
    }
    
    $name = clearInput( $_POST['name'] );
    $lastname = clearInput( $_POST['last-name'] );
    $db = new DatabaseHandler();

    if ( !empty($name) && !empty( $lastname )) {
        $db->insert( $name, $lastname );

    }
    $select = $db->select();

    $sendData = '';
    foreach( $select as $el ) {
        $sendData .= "$el[id],$el[name],$el[lastname]|tr|";
    };

    print_r( $sendData );
}