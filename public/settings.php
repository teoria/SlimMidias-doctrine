<?php
/**
 * Created by PhpStorm.
 * User: teoria
 * Date: 3/12/14
 * Time: 5:41 PM
 */


/**
* Banco de Dados
*
*/
$engine = 'mysql';
$drive = "pdo_mysql";
$host = '127.0.0.1';
$database = 'studioapp';
$user = 'root';
$pass = '';


/**
* Caminhos do Sistema
*
*/


define('VIEW_PATH','../app/views');
define('CONTROLLER_PATH','../app/controller');
define('MODEL_PATH','../app/model');
define('VENDOR_PATH','../vendor/autoload.php');




/**
* Configurações do sistema
*
*/

$baseClass = "MainController";  // Método index da classe MainController será invocado quando o route "/" for chamado

$erroHandler = "MainController:notFound";

$basePath = "http://www.seusite.com.br/remote"; // Diretório base para os arquivos de imagem, css e js.

$debug = true;
