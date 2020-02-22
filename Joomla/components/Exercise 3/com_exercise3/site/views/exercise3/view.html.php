<?php

defined('_JEXEC') or die('Restricted acces');

class Exercise3ViewExercise3 extends JViewLegacy
{
    function display($tpl = null)
    {
        $this->msg = 'View dla noramlnej strony, prosteee';

        parent::display($tpl);
    }
}