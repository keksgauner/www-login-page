<?
use \Bramus\Router\Router;

function initRouter(string $src_dir, Router $router)
{
    $router->get("/", function () use ($src_dir) {
        require_once "{$src_dir}/templates/login.php";
    });

    $router->get("/login", function () use ($src_dir) {
        require_once "{$src_dir}/templates/login.php";
    });

    $router->get("/dashboard", function () use ($src_dir) {
        require_once "{$src_dir}/templates/dashboard.php";
    });

    $router->get("/logout", function () use ($src_dir) {
        require_once "{$src_dir}/templates/logout.php";
    });

    $router->post("/login", function () use ($src_dir) {
        require_once "{$src_dir}/templates/login.php";
    });
}