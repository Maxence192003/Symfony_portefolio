<?php
// Router for PHP built-in server
// Serves static files directly, routes everything else through Symfony

$file = __DIR__ . $_SERVER['REQUEST_URI'];
$file = parse_url($file, PHP_URL_PATH);
$file = __DIR__ . $file;

// If the requested file exists and is not a directory, serve it
if (file_exists($file) && !is_dir($file)) {
    // Let the built-in server handle static files
    return false;
}

// Otherwise, route through Symfony
require 'index.php';
