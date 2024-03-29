<?php 

// Source directory containing assets within your package
$sourceDirectory = __DIR__ . '/assets';

// Destination directory in the public directory of the server
$destinationDirectory = $_SERVER['DOCUMENT_ROOT'];

// Recursively copy assets
if (is_dir($sourceDirectory)) {
    if (!is_dir($destinationDirectory)) {
        mkdir($destinationDirectory, 0755, true);
    }
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($sourceDirectory, RecursiveDirectoryIterator::SKIP_DOTS),
        RecursiveIteratorIterator::SELF_FIRST
    );
    foreach ($iterator as $item) {
        if ($item->isDir()) {
            mkdir($destinationDirectory . DIRECTORY_SEPARATOR . $iterator->getSubPathName());
        } else {
            copy($item, $destinationDirectory . DIRECTORY_SEPARATOR . $iterator->getSubPathName());
        }
    }
    echo "Assets copied successfully.\n";
} else {
    echo "Source directory not found.\n";
}
