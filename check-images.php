<?php
echo "<h1>Image File Check - LUPER AGRO</h1>";

// Check crops folder
$cropsDir = __DIR__ . '/assets/images/crops/';
echo "<h2>Files in /assets/images/crops/</h2>";
if (is_dir($cropsDir)) {
    $files = scandir($cropsDir);
    echo "<ul>";
    foreach ($files as $file) {
        if ($file != '.' && $file != '..') {
            echo "<li>📷 " . $file . "</li>";
        }
    }
    echo "</ul>";
} else {
    echo "<p style='color:red'>❌ Folder does not exist: " . $cropsDir . "</p>";
}

// Check fertilizer folder
$fertDir = __DIR__ . '/assets/images/fertilizer/';
echo "<h2>Files in /assets/images/fertilizer/</h2>";
if (is_dir($fertDir)) {
    $files = scandir($fertDir);
    echo "<ul>";
    foreach ($files as $file) {
        if ($file != '.' && $file != '..') {
            echo "<li>📷 " . $file . "</li>";
        }
    }
    echo "</ul>";
} else {
    echo "<p style='color:red'>❌ Folder does not exist: " . $fertDir . "</p>";
}

// Check all images in assets/images
echo "<h2>All Image Folders in /assets/images/</h2>";
$imagesDir = __DIR__ . '/assets/images/';
if (is_dir($imagesDir)) {
    $folders = scandir($imagesDir);
    echo "<ul>";
    foreach ($folders as $folder) {
        if ($folder != '.' && $folder != '..' && is_dir($imagesDir . $folder)) {
            echo "<li><strong>" . $folder . "/</strong>";
            $subFiles = scandir($imagesDir . $folder);
            echo "<ul>";
            foreach ($subFiles as $file) {
                if ($file != '.' && $file != '..') {
                    echo "<li>📷 " . $file . "</li>";
                }
            }
            echo "</ul></li>";
        }
    }
    echo "</ul>";
}

echo "<hr>";
echo "<p><a href='crop-production.php'>Go to Crop Production Page</a></p>";