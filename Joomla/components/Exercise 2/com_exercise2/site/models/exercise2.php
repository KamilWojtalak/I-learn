<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_exercise2
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

 defined('_JEXEC') or die('Restricted acces');

 class Exercise2ModelExercise2 extends JModelItem {
     protected $message;

    public function getMsg() {
        if (!isset($this->message)) {
            $jinput = JFactory::getApplication()->input;
            $id = $jinput->get('id', 1, 'INT');

            switch($id) {
                case 1:
                    $this->message = 'Jestem tekstem z pierwszej defaultowej opcji';
                break;
                case 2:
                    $this->message = 'Jestem tekstem z drugiej opcji, którą musiałeś jakoś wybrać';
            }
        }

        return $this->message;
    }
 }