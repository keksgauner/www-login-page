<?php
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Dotenv\Dotenv;

$parent_dir = dirname(__FILE__, 3);
require_once realpath($parent_dir . "/vendor/autoload.php");

// Looing for .env at the root directory
$dotenv = Dotenv::createImmutable($parent_dir);
$dotenv->load();

$jwt = $_COOKIE["jwt"] ?? "";
$secretKey = $_ENV["JWT_SECRET_KEY"];
try {
    $decoded = JWT::decode($jwt, new Key($secretKey, "HS256"));
    // Token is valid, proceed to dashboard
} catch (Exception $e) {
    // Token is invalid, redirect to login
    header("Location: /logout");
    exit();
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./../css/base.css" rel="stylesheet" />
</head>

<body class="relative isolate py-2 bg-gray-900">
    <h1 class="text-2xl font-bold text-center animation-blink bg-red-500 text-white">
        Dashboard Page
    </h1>
    <div class="grid place-content-center h-48">
        <a href="/logout" class="bg-red-500 text-white p-2">Logout</a>
    </div>
</body>

</html>