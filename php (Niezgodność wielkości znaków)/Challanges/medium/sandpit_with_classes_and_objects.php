<?php
namespace siema;

class A {
    public $A;

    public function __construct() {
        echo __CLASS__ . " created \n";
    }

    public function A_function() {
        echo __METHOD__ . "\n";
    }
}

class B extends A {

    public $B;

    public function __construct() {
        parent::__construct();
        echo __CLASS__ . " created \n";
    }

    public function B_function() {
        echo get_called_class() . "\n";
        echo __METHOD__ . "\n";
    }
}

$d = new B;
class_alias( 'siema\B', 'siema\C' );
$e = new C;

// $e->B_function();

// print_r( get_class_vars( 'siema\A' ) );

// print_r( get_declared_classes() );

// print_r( get_declared_interfaces() );

// print_r( get_declared_traits() );

// print_r( get_object_vars( $e ) );

// print_r( get_parent_class( 'siema\B' ) );

// echo ( interface_exists( 'siema\i_dont_exist' ) );

// print_r( is_a( $e, 'siema\A' ) );

// print_r( is_subclass_of( $e, 'siema\A' ) );

// print_r( method_exists( $e, "B_function" ) );