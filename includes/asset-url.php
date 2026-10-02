<?php

declare(strict_types=1);

if (!function_exists('dps_web_base')) {
    /**
     * URL path to the app root (no trailing slash). Empty when the site is at the host root.
     */
    function dps_web_base(): string
    {
        $script = $_SERVER['SCRIPT_NAME'] ?? '';
        $script = str_replace('\\', '/', (string) $script);
        if ($script === '' || $script === '/') {
            return '';
        }
        $dir = dirname($script);
        if ($dir === '/' || $dir === '.' || $dir === '') {
            return '';
        }

        return rtrim($dir, '/');
    }

    /**
     * URL path to a file under /assets/ (always starts with /).
     */
    function dps_asset_url(string $relativeUnderAssets): string
    {
        $relativeUnderAssets = ltrim(str_replace('\\', '/', $relativeUnderAssets), '/');
        $base = dps_web_base();

        if ($base === '') {
            return '/assets/' . $relativeUnderAssets;
        }

        return $base . '/assets/' . $relativeUnderAssets;
    }

    /** Origin + app path for fetch() from inline scripts (no trailing slash). */
    function dps_origin_and_base(): string
    {
        $https = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';
        $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
        $scheme = $https ? 'https' : 'http';

        return $scheme . '://' . $host . dps_web_base();
    }
}
