<?php

Class Fachada extends FachadaBase{
    
    public function getUsuarios(){
        $DAO = new UsuarioDAO();
        $result = $DAO->getAll();
        return $result;
    }

    public function getUsuario($id){
        $DAO = new UsuarioDAO();
        $result = $DAO->selectById($id);
        return $result;
    }


    public function inserirUsuario($vo){

        $DAO = new UsuarioDAO();
        $DAO->insert($vo);
        
        return 1;
    }


}