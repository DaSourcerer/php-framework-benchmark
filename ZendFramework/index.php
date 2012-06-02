<?php
set_include_path(dirname(__FILE__));

require_once 'Zend/Loader.php';
Zend_Loader::registerAutoload();

Zend_Controller_Front::run(dirname(__FILE__));
