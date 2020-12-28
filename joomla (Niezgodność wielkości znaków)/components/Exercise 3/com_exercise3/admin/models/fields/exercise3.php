<?php

defined('_JEXEC') or die('Restricted acces');

JFormHelper::loadFieldClass('list');

class JFormFieldExercise3 extends JFormFieldList
{
    protected $type = 'exercise3';

    protected function getOptions()
    {
        $db = JFactory::getDBO();
        $query = $db->getQuery(true);
        $query->select('id, message');
        $query->from('#__exercise3');
        $db->setQuery((string) $query);
        $messages = $db->loadObjectList();
        $options = array();

        if ($messages)
        {
            foreach ($messages as $message) {
                $options[] = JHtml::_('select.option', $message->id, $message->message);
            }
        }

        $options = array_merge(parent::getOptions(), $options);
        return $options;
    }
}
