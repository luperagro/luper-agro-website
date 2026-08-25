<?php
// Generate placeholder images for projects
function createProjectPlaceholder($path, $text, $color = '#1a4a2e') {
    $width = 800;
    $height = 500;
    $image = imagecreatetruecolor($width, $height);
    
    $bg = imagecolorallocate($image, 26, 74, 46);
    $gold = imagecolorallocate($image, 201, 168, 76);
    $white = imagecolorallocate($image, 255, 255, 255);
    $light = imagecolorallocate($image, 200, 220, 210);
    
    imagefilledrectangle($image, 0, 0, $width, $height, $bg);
    
    // Draw some decorative shapes
    for ($i = 0; $i < 20; $i++) {
        $x = rand(0, $width);
        $y = rand(0, $height);
        $size = rand(10, 50);
        imagefilledellipse($image, $x, $y, $size, $size, $gold);
    }
    
    // Draw a leaf icon
    $cx = $width/2;
    $cy = $height/2 - 20;
    imagefilledellipse($image, $cx - 40, $cy, 80, 100, $gold);
    imagefilledellipse($image, $cx + 40, $cy, 80, 100, $gold);
    imagefilledellipse($image, $cx, $cy - 30, 50, 80, $gold);
    
    // Main text
    imagestring($image, 5, $cx - 100, $cy + 60, $text, $white);
    imagestring($image, 3, $cx - 70, $cy + 90, 'LUPER AGRO', $gold);
    
    imagejpeg($image, $path, 80);
    imagedestroy($image);
}

$projectImages = [
    'project-fertilizer.jpg' => 'Organic Fertilizer',
    'project-crop.jpg' => 'Crop Production',
    'project-solar.jpg' => 'Renewable Energy',
    'project-livestock.jpg' => 'Animal Production',
    'project-community.jpg' => 'Community Farming',
    'project-sustainability.jpg' => 'Sustainability'
];

$folder = __DIR__ . '/assets/images/projects/';
if (!is_dir($folder)) {
    mkdir($folder, 0777, true);
}

foreach ($projectImages as $file => $text) {
    $path = $folder . $file;
    createProjectPlaceholder($path, $text);
    echo "Created: $file<br>";
}

echo "<br>✅ All project images created!<br>";
echo "<a href='projects.php'>Go to Projects →</a>";
?>