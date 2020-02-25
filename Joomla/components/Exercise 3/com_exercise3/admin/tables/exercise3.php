<?php 

defined('_JEXEC') or die('Restricted acces');

class Exercise3TableExercise3 extends JTable
{
    function __construct(&$db)
    {
        parent::__construct('#__exercise3', 'id', $db);
    }
}