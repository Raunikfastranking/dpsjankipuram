<?php
// Central config for API base URL, branch ID, and JWT auth
define('API_BASE_URL', 'https://allenp.superhouseerp.com');
define('DPS_JANKIPURAM_BRANCH_ID', 10);
define('API_JWT_TOKEN', 'hgutuyg758374tg5f3738y87gusdfjhgjh$@.hgjgjhikj');
define('DPS_API_CACHE_TTL', 3600); // seconds — CMS API response cache lifetime
define('DPS_CACHE_CLEAR_KEY', '6772c53526ba54c47e6594bd0584c123'); // required key for clear-cache.php

if (!function_exists('api_auth_headers')) {
    /**
     * @param string[] $extra e.g. ['Content-Type: application/json']
     * @return string[]
     */
    function api_auth_headers(array $extra = []): array
    {
        $headers = ['Authorization: Bearer ' . API_JWT_TOKEN];
        foreach ($extra as $header) {
            $headers[] = $header;
        }
        return $headers;
    }
}
