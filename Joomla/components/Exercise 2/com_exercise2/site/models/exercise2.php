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
            $this->message = 'Siema wcześniej nikt nie ustawił wiadomości więc się wyświetlam, proste.';
        }

        return $this->message;
    }
 }