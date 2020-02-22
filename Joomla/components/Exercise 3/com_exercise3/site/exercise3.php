<?php

defined('_JEXEC') or die('Restricted acces');

$controller = JControllerLegacy::getInstance('Exercise3');

$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));

$controller->redirect();