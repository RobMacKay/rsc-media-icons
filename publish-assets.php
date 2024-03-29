<?php 

$sourceDir = './assets';
$publicDirectory = $_SERVER['DOCUMENT_ROOT'];

// Copy the assets folder to the public directory
if (is_dir($sourceDir)) {
    if (!is_dir($destinationDir)) {
        mkdir($destinationDir, 0777, true);
    }
    $files = scandir($sourceDir);
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..') {
            $source = $sourceDir . '/' . $file;
            $destination = $destinationDir . '/' . $file;
            copy($source, $destination);
        }
    }
    echo 'Assets copied successfully!';
} else {
    echo 'Source directory does not exist!';
}