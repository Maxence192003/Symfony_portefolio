<?php
// Router for PHP built-in server
// Serves static files directly, routes everything else through Symfony

$requestUri = $_SERVER['REQUEST_URI'];

// Remove query string
if (strpos($requestUri, '?') !== false) {
    $requestUri = substr($requestUri, 0, strpos($requestUri, '?'));
}

// Build the full file path
$file = __DIR__ . $requestUri;

// Debug: log requests for /assets files
if (strpos($requestUri, '/assets/') === 0) {
    error_log("[ROUTER] Static file request: $requestUri -> File: $file (Exists: " . (file_exists($file) ? 'YES' : 'NO') . ")");
}

// If the file exists and is not a directory, serve it
if (file_exists($file) && !is_dir($file)) {
    return false; // Let PHP's built-in server handle it
}

// Otherwise route through Symfony
require 'index.php';
