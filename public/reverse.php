<?php
/**
 * Created by PhpStorm.
 * User: teoria
 * Date: 9/3/16
 * Time: 2:42 AM
 */


require_once "bootstrap.php";

use Doctrine\ORM\Tools\EntityGenerator;
ini_set("display_errors", "On");
 

// custom datatypes (not mapped for reverse engineering)
$em->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('set', 'string');
$em->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');

// fetch metadata
$driver = new \Doctrine\ORM\Mapping\Driver\DatabaseDriver(
    $em->getConnection()->getSchemaManager()
);
$em->getConfiguration()->setMetadataDriverImpl($driver);

$cmf = new \Doctrine\ORM\Tools\DisconnectedClassMetadataFactory($em);
$cmf->setEntityManager($em); 

$classes = $driver->getAllClassNames();
$metadata = $cmf->getAllMetadata(); 

$generator = new EntityGenerator();
$generator->setUpdateEntityIfExists(true);
$generator->setGenerateStubMethods(true);
$generator->setGenerateAnnotations(true);
$generator->generate($metadata,   '../app/model/vo');

print 'Done!';
