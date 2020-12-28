<?php
namespace siema;

// print_r( func_num_args() );


register_shutdown_function( function() {
    echo "\n\nScript finished normally \n\n";
} ); 

