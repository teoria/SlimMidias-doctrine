<?php


class UsuarioDAO extends DoctrineDAO {

    protected $tipo =  "Usuario";

    public function selectById($id) {
        $arr = ["idUsuario" => $id];
        return $this->findOnBy($arr);
    }


} 