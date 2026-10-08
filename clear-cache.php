<?php
// Clears the CMS API response cache (includes/cache/api/*.json).
// Usage:
//   /clear-cache.php?key=KEY          -> clear only
//   /clear-cache.php?key=KEY&warm=1   -> clear + immediately refetch so no visitor hits a cold cache
require_once __DIR__ . '/proxy/config.php';

$key = $_GET['key'] ?? '';
if (!defined('DPS_CACHE_CLEAR_KEY') || !hash_equals(DPS_CACHE_CLEAR_KEY, (string) $key)) {
    http_response_code(403);
    exit('Forbidden');
}

$dirs = [__DIR__ . '/includes/cache/api', __DIR__ . '/includes/cache'];
$deleted = 0;
foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        continue;
    }
    foreach (glob($dir . '/*.json') as $file) {
        if (@unlink($file)) {
            $deleted++;
        }
    }
}

header('Content-Type: text/plain; charset=utf-8');
echo "Cleared {$deleted} cached endpoint(s).\n";

if (!empty($_GET['warm'])) {
    include __DIR__ . '/includes/apis.php';
    include __DIR__ . '/includes/session-api.php';
    include __DIR__ . '/includes/get-city.php';
    include __DIR__ . '/includes/grade-api.php';
    echo "Cache warmed.\n";
}
