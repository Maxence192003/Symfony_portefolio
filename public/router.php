<?php
// Router for PHP built-in server
// Serves static files directly, routes everything else through Symfony

$requestUri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

// Remove query string
if (strpos($requestUri, '?') !== false) {
    $requestUri = substr($requestUri, 0, strpos($requestUri, '?'));
}

// Build the full file path
$file = __DIR__ . $requestUri;
$fileExists = file_exists($file);
$isDir = is_dir($file);

// Log all requests for debugging
error_log("[$method] $requestUri -> File: $file (Exists: " . ($fileExists ? 'YES' : 'NO') . ", IsDir: " . ($isDir ? 'YES' : 'NO') . ")");

// If the file exists and is not a directory, serve it
if ($fileExists && !$isDir) {
    error_log("  -> Serving static file");
    return false; // Let PHP's built-in server handle it
}

// Otherwise route through Symfony
error_log("  -> Routing through Symfony");
require 'index.php';
