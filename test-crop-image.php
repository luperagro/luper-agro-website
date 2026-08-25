<?php
echo "<h1>Finding Your Crop Image</h1>";

$folder = __DIR__ . '/assets/images/crops/';

echo "<h2>Files in /assets/images/crops/</h2>";

if (is_dir($folder)) {
    $files = scandir($folder);
    if (count($files) <= 2) {
        echo "<p style='color:red;'>❌ No images found in this folder. Please add your crop image.</p>";
        echo "<p><strong>Full path:</strong> " . $folder . "</p>";
    } else {
        echo "<ul>";
        foreach ($files as $file) {
            if ($file != '.' && $file != '..') {
                $filePath = $folder . $file;
                $fileSize = filesize($filePath);
                echo "<li>📷 <strong>$file</strong> (" . round($fileSize / 1024) . " KB) 
                      <a href='assets/images/crops/$file' target='_blank'>View</a></li>";
            }
        }
        echo "</ul>";
    }
} else {
    echo "<p style='color:red;'>❌ Folder does not exist: $folder</p>";
    echo "<p>Creating folder...</p>";
    mkdir($folder, 0777, true);
    echo "<p style='color:green;'>✅ Folder created. Please add your image.</p>";
}
?>