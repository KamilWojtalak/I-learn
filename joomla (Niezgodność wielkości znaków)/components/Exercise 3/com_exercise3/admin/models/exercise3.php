<?php

defined('_JEXEC') or die('Restricted access');

class Exercise3ModelExercise3 extends JModelList
{
	protected function getListQuery()
	{
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);

		$query->select('*')
                ->from($db->quoteName('#__exercise3'));

		return $query;
	}
}