<?
use \Firebase\JWT\JWT;
use Firebase\JWT\Key;

$parent_dir = dirname(__FILE__, 2);
require_once realpath($parent_dir . "/vendor/autoload.php");

// Looing for .env at the root directory
$dotenv = Dotenv\Dotenv::createImmutable($parent_dir);
$dotenv->load();


$jwt = $_COOKIE["jwt"] ?? "";
$secretKey = $_ENV["JWT_SECRET_KEY"];

try {
    $decoded = JWT::decode($jwt, new Key($secretKey, "HS256"));
    // Token is valid, proceed to dashboard
    header("Location: /dashboard");
    exit();
} catch (Exception $e) {
    // Token is invalid, redirect to login
    header("Location: /login");
}