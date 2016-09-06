<?php
/**
 * Created by PhpStorm.
 * User: teoria
 * Date: 3/12/14
 * Time: 5:41 PM
 */
$routes = array(
    '/' => '',
    '/usuario' => "UsuarioController:getUsuarios@get",

    '/usuario/:id' => "UsuarioController:getUsuario@get",

    '/usuario(/)' => "UsuarioController:insertUsuario@post"
);

