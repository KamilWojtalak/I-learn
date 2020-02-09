<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_exercise2
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

 defined('_JEXEC') or die('Restricted acces');

 $controller = JControllerLegacy::getInstance('Exercise2');
 $input = JFactory::getApplication()->input;
 $controller->execute($input->getCmd('task'));

 $controller->redirect();