<?php
require_once dirname(__DIR__) . '/proxy/config.php';

// --- Simple Caching ---
$cacheFile = __DIR__ . '/cache/sessions_cache.json'; // Store in a 'cache' subdirectory
$cacheTime = defined('DPS_API_CACHE_TTL') ? DPS_API_CACHE_TTL : 3600;

// Check if cache exists and is fresh
if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < $cacheTime) {
    $cachedData = json_decode(file_get_contents($cacheFile), true);
    if (is_array($cachedData)) {
        return $cachedData;
    }
}
// --- End Caching ---

// Fetches active school sessions (no branch_id needed)
$apiUrl = "https://dps.allenhouseschools.com/api/school-sessions";

$ch = curl_init($apiUrl);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT        => 10,
    CURLOPT_CONNECTTIMEOUT => 5,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_HTTPHEADER     => api_auth_headers(),
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($response === false || $httpCode !== 200) {
    // Serve stale cache if API fails
    if (file_exists($cacheFile)) {
        $cachedData = json_decode(file_get_contents($cacheFile), true);
        if (is_array($cachedData)) {
            return $cachedData;
        }
    }
    return [];
}

$json = json_decode($response, true);

if (!is_array($json) || !isset($json['status']) || $json['status'] !== 'success') {
    if (file_exists($cacheFile)) {
        $cachedData = json_decode(file_get_contents($cacheFile), true);
        if (is_array($cachedData)) {
            return $cachedData;
        }
    }
    return [];
}

// Extract the actual sessions list (paginated under data.data)
$sessions = $json['data']['data'] ?? [];

// Save to cache
$cacheDir = dirname($cacheFile);
if (!is_dir($cacheDir)) {
    mkdir($cacheDir, 0755, true); // Create directory if it doesn't exist
}
file_put_contents($cacheFile, json_encode($sessions));

return $sessions;
