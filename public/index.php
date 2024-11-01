<?
$parent_dir = dirname(__FILE__, 2);
require_once realpath($parent_dir . "/vendor/autoload.php");

// Looing for .env at the root directory
$dotenv = Dotenv\Dotenv::createImmutable($parent_dir);
$dotenv->load();

// Check if ywt is set
if (!isset($_SESSION['ywt'])) {
    header('Location: /login');
    exit();
}

header('Location: /dashboard');