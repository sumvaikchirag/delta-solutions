<?php
// Local-only router for `php -S`, mirroring the extension-less URLs from .htaccess.
$root = $_SERVER['DOCUMENT_ROOT'];
$path = rawurldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

if ($path === '/' || $path === '/index' || $path === '/index.php') {
    chdir($root);
    require $root . '/index.php';
    return true;
}

if (is_file($root . $path)) {
    return false;
}

$php = $root . rtrim($path, '/') . '.php';
if (is_file($php)) {
    chdir($root);
    $_SERVER['SCRIPT_NAME'] = rtrim($path, '/') . '.php';
    require $php;
    return true;
}

http_response_code(404);
chdir($root);
require $root . '/404.php';
return true;
