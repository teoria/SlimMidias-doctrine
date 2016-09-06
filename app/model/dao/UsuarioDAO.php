<?php


class UsuarioDAO extends DoctrineDAO {

    public function __construct() {

        $this->tipo = "Usuario";
    }

    public function selectById($id) {
        $arr = ["idUsuario" => $id];
        return $this->findOnBy($arr);
    }

s
} 