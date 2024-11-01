<?
use \Firebase\JWT\JWT;

$parent_dir = dirname(__FILE__, 3);
require_once realpath($parent_dir . "/vendor/autoload.php");

// Looing for .env at the root directory
$dotenv = Dotenv\Dotenv::createImmutable($parent_dir);
$dotenv->load();

session_start();

// Check if ywt is not set
if (isset($_SESSION['ywt'])) {
    header('Location: /dashboard');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'];

    $secretKey = $_ENV['JWT_SECRET_KEY'];
    $payload = [
        'password' => $password,
    ];

    $jwt = JWT::encode($payload, $secretKey, 'HS256');

    $_SESSION['jwt'] = $jwt;

    header('Location: /dashboard');
    exit();
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./../css/base.css" rel="stylesheet" />
</head>

<body class="relative isolate py-2 bg-gray-900">
    <h1 class="text-2xl font-bold text-center animation-blink bg-red-500 text-white">
        Login Page
    </h1>
    <div class="grid place-content-center h-48">
        <form action="#" method="post">
            <div class="flex max-w-md gap-x-4">
                <label for="password-id" class="sr-only">Password</label>
                <input id="password-id" name="password" type="password" required
                    class="min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6"
                    placeholder="Password" />
                <button type="submit"
                    class="flex-none rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                    Submit
                </button>
            </div>
        </form>
    </div>
</body>

</html>