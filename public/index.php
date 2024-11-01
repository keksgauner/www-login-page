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
    <div class="grid place-content-center h-48">
        <a href="https://google.de"
            class="text-sm rounded-md bg-indigo-500 px-3.5 py-2.5 font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
            To Google</a>
    </div>
</body>

</html>