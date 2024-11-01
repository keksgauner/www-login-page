<?
$parent_dir = dirname(__FILE__, 2);
require_once realpath($parent_dir . "/vendor/autoload.php");
?>
<!doctype html>
<html lang="en">

<head>
    <title>Index</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./css/base.css" rel="stylesheet" />
</head>

<body class="relative isolate py-2 bg-gray-900">
    <h1 class="text-2xl font-bold text-center animation-blink bg-red-500 text-white">
        Index Site
    </h1>
    <a href="./login" class="block text-center text-white bg-blue-500 py-2 mt-2">
        Login
    </a>
    <a href="./logged" class="block text-center text-white bg-green-500 py-2 mt-2">
        Logged
    </a>
</body>

</html>