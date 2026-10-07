<?php
// Local-only router for `php -S`, mirroring the extension-less URLs and /product/, /blog/ rules from .htaccess.
$root = $_SERVER['DOCUMENT_ROOT'];
$path = rawurldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$qs = isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] !== '' ? '?' . $_SERVER['QUERY_STRING'] : '';

$moved = [];
$htaccess = @file_get_contents($root . '/.htaccess');
foreach (['product', 'blog'] as $dir) {
    if ($htaccess && preg_match('#RewriteRule \^' . $dir . '/\(([a-z0-9|-]+)\)\$#', $htaccess, $m)) {
        foreach (explode('|', $m[1]) as $slug) {
            $moved[$slug] = $dir;
        }
    }
}

if (preg_match('#^/(?:blogs/)?([a-z0-9-]+)(?:\.php)?/?$#', $path, $m) && isset($moved[$m[1]])) {
    header('Location: /' . $moved[$m[1]] . '/' . $m[1] . $qs, true, 301);
    return true;
}
if (preg_match('#^/(product|blog)/([a-z0-9-]+)\.php$#', $path, $m)) {
    header('Location: /' . $m[1] . '/' . $m[2] . $qs, true, 301);
    return true;
}
if (preg_match('#^/(product|blog)/([a-z0-9-]+)$#', $path, $m) && ($moved[$m[2]] ?? '') === $m[1]) {
    chdir($root);
    $_SERVER['SCRIPT_NAME'] = '/' . $m[2] . '.php';
    require $root . '/' . $m[2] . '.php';
    return true;
}

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
