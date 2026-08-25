<?php
echo "<h1>🔍 Image Debug Tool</h1>";

// Check the correct path
$correctPath = __DIR__ . '/assets/images/crops/crops-main.jpg';
echo "<h3>Checking: " . $correctPath . "</h3>";

if (file_exists($correctPath)) {
    echo "<p style='color:green;'>✅ Image found at correct location!</p>";
    echo "<img src='assets/images/crops/crops-main.jpg' style='max-width: 500px; border: 2px solid green;'>";
} else {
    echo "<p style='color:red;'>❌ Image NOT found at correct location</p>";
    
    // Check if folder exists
    $folder = __DIR__ . '/assets/images/crops/';
    if (is_dir($folder)) {
        echo "<h3>Files in crops folder:</h3>";
        $files = scandir($folder);
        echo "<ul>";
        foreach ($files as $file) {
            if ($file != '.' && $file != '..') {
                echo "<li>📷 " . $file . "</li>";
            }
        }
        echo "</ul>";
    } else {
        echo "<p style='color:red;'>❌ Crops folder does not exist</p>";
        echo "<p>Create it at: " . $folder . "</p>";
    }
}

echo "<hr>";
echo "<h3>Your current folder structure:</h3>";
echo "<p>You are in: " . __DIR__ . "</p>";

// Check if you're in the right folder
if (strpos(__DIR__, 'luper-agro') !== false) {
    echo "<p style='color:green;'>✅ You are in the correct folder: luper-agro</p>";
} else {
    echo "<p style='color:red;'>⚠️ You are in: " . basename(__DIR__) . " (should be luper-agro)</p>";
}
?>