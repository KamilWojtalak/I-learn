<?php

defined('_JEXEC') or die('Restricted acces');

class Exercise3ViewExercise3 extends JViewLegacy
{
    function display($tpl = null) 
    {
        $this->msg = $this->get('Msg');

        if (count($errors = $this->get('Errors')))
        {
            JLog::add(implode('<br />', $errors), JLog::WARNING, 'jerror');

            return false;
        }

        parent::display($tpl);
    }
}