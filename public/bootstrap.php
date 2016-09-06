<?php
/**
 * Created by PhpStorm.
 * User: teoria
 * Date: 9/1/16
 * Time: 4:31 PM
 */

// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;


require("settings.php");
require VENDOR_PATH;


// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array("/app"), $isDevMode, null, null, false);

// database configuration parameters
$conn = array('driver' => $GLOBALS['drive'], 'host' => $GLOBALS['host'], 'dbname' => $GLOBALS['database'], 'user' => $GLOBALS['user'], 'password' => $GLOBALS['pass']);

$entityManager = EntityManager::create($conn, $config);
$em = $entityManager;