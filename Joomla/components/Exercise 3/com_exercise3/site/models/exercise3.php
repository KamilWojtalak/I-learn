<?php

defined('_JEXEC') or die('Restricted acces');

class Exercise3ModelExercise3 extends JModelItem
{
    protected $messages;

    public function getTable($type = 'Exercise3', $prefix = 'Exercise3Table', $config = array())
    {
        return JTable::getInstance($type, $prefix, $config);
    }

    public function getMsg($id = 1)
    {
        if (!is_array($this->messages))
        {
            $this->messages = array();
        }

        if (!isset($this->messages[$id])) 
        {
			$jinput = JFactory::getApplication()->input;
            $id = $jinput->get('id', 1, 'INT');

            $table = $this->getTable();
            
            $table->load($id);

            $this->messages[$id] = $table->message;
        }

        return $this->messages[$id];
    }
}