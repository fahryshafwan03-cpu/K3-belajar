<?php

// Vercel serverless environment has a read-only filesystem,
// except for the /tmp directory. Initialize storage directories in /tmp.
$storagePath = '/tmp/storage';

$dirs = [
    $storagePath . '/app/public',
    $storagePath . '/framework/cache/data',
    $storagePath . '/framework/sessions',
    $storagePath . '/framework/testing',
    $storagePath . '/framework/views',
    $storagePath . '/logs',
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// Forward Vercel request to Laravel public entry point
require __DIR__ . '/../public/index.php';
