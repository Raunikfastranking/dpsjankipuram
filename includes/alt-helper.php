<?php

/**
 * Alt text from CMS/API payloads where fields may be named media_alt_text, image_alt, or image_alt_text.
 * Falls back to title, heading, or name when those are empty.
 */
function cms_image_alt(?array $row, string $fallback = 'Image'): string
{
    if (!is_array($row)) {
        return $fallback;
    }
    foreach (['media_alt_text', 'image_alt', 'image_alt_text'] as $key) {
        if (isset($row[$key])) {
            $t = trim((string) $row[$key]);
            if ($t !== '') {
                return $t;
            }
        }
    }
    foreach (['title', 'heading', 'name'] as $key) {
        if (!empty($row[$key])) {
            $t = trim(strip_tags((string) $row[$key]));
            if ($t !== '') {
                return $t;
            }
        }
    }
    return $fallback;
}
