<?php
defined('_JEXEC') or die('Restricted acces');

require_once dirname(__FILE__) . '/helper.php';

$message = modHelloWorldHelper::greeting();

require JModuleHelper::getLayoutPath('mod_helloworld');