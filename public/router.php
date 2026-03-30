<?php
// Router for PHP built-in server
// Serves static files and redirects everything else to index.php

$file = __DIR__ . $_SERVER['REQUEST_URI'];

// If the requested file exists and is not a directory, serve it
if (file_exists($file) && !is_dir($file)) {
    return false; // Use PHP's default handler
}

// Otherwise, redirect to index.php
require 'index.php';
