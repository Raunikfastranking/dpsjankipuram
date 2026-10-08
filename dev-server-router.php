<?php
/**
 * Router for PHP's built-in server (no .htaccess).
 * Run: php -S localhost:8081 dev-server-router.php
 *
 * Maps /photo-gallery → photo-gallery.php, etc.
 */
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?: '/');
$docRoot = __DIR__;
$requested = $docRoot . $uri;

// Existing file under document root (assets, existing .php path, etc.)
if ($uri !== '/' && is_file($requested)) {
    return false;
}

$path = rtrim($uri, '/');
if ($path === '' || $path === '/') {
    require $docRoot . DIRECTORY_SEPARATOR . 'index.php';
    return true;
}

$candidate = $docRoot . $path . '.php';
if (is_file($candidate)) {
    require $candidate;
    return true;
}

http_response_code(404);
if (is_file($docRoot . DIRECTORY_SEPARATOR . '404.php')) {
    require $docRoot . DIRECTORY_SEPARATOR . '404.php';
    return true;
}
header('Content-Type: text/plain; charset=utf-8');
echo '404 Not Found: ' . $uri . PHP_EOL;
echo 'Tip: use *.php in the URL, or start the server with: php -S localhost:8081 dev-server-router.php' . PHP_EOL;
exit;
