<?php 

defined('_JEXEC') or die('Restricted acces');

$controller = JControllerLegacy::getInstance('Exercise3');

$controller->execute(JFactory::getApplication()->input->get('task'));

$controller->redirect();

