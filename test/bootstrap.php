<?php
/**
 * @link      http://github.com/zendframework/zend-ldap for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

/*
 * Set error reporting to the level to which Zend Framework code must comply.
 */
error_reporting(E_ALL | E_STRICT);

/**
 * Setup autoloading
 */
require __DIR__ . '/../vendor/autoload.php';

/**
 * Setting the ZendTest\Ldap\ErrorHandler as default ErrorHandler
 */
Zend\Ldap\ErrorHandler::setErrorHandler(new ZendTest\Ldap\ErrorHandler());

/**
 * Start output buffering, if enabled
 */
if (defined('TESTS_ZEND_OB_ENABLED') && constant('TESTS_ZEND_OB_ENABLED')) {
    ob_start();
}
