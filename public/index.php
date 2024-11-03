<?
use \Bramus\Router\Router;
$root_dir = dirname(__FILE__, 2);
require_once realpath($root_dir . "/vendor/autoload.php");

// Looing for .env at the root directory
$dotenv = Dotenv\Dotenv::createImmutable($root_dir);
$dotenv->load();

$router = new Router();

require_once realpath($root_dir . "/src/router.php");

initRouter($root_dir . "/src", $router);

$router->run();