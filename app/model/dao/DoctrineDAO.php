<?php

/**
 * Created by PhpStorm.
 * User: teoria
 * Date: 9/3/16
 * Time: 2:15 PM
 */

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class DoctrineDAO extends DAO {

    protected $em;
    protected $tipo;

    public function __construct() {

        $isDevMode = true;
        $config = Setup::createAnnotationMetadataConfiguration(array("/app"), $isDevMode, null, null, false);

// database configuration parameters
        $conn = array('driver' => $GLOBALS['drive'], 'host' => $GLOBALS['host'], 'dbname' => $GLOBALS['database'], 'user' => $GLOBALS['user'], 'password' => $GLOBALS['pass']);

// obtaining the entity manager
        $entityManager = EntityManager::create($conn, $config);
        $this->em = $entityManager;
    }

    public function getEm() {
        return $this->em;
    }


    public function insert($vo) {

        try{
            $this->em->persist($vo);
            $this->em->flush();
            return $vo;
        }catch (Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    public function findOnBy($arr) {
        try{
            $result = $this->em->getRepository($this->tipo)->findOneBy($arr);
            return $result;
        }catch (Exception $e){
            throw new Exception($e->getMessage());
        }

    }

    public function getAll() {
        try{
            $result = $this->em->getRepository($this->tipo)->findAll();
            return $result;
        }catch (Exception $e){
            throw new Exception($e->getMessage());
        }


    }


    public function update($vo) {

        try {
            $this->em->persist($vo);
            $this->em->flush();
            return $vo;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }


    }


    public function delete($vo) {
        try {
            $obj = $this->em->find($this->tipo, $vo->id);

            $this->em->remove($obj);
            $this->em->flush();
            return 1;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }


    }


}