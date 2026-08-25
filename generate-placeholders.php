<?php
// generate-placeholders.php - Create placeholder images

$basePath = __DIR__ . '/assets/images/';

$sections = [
    'hero/hero-main.jpg',
    'about/about-main.jpg',
    'fertilizer/fertilizer-main.jpg',
    'crops/crops-main.jpg',
    'livestock/livestock-main.jpg',
    'renewable-energy/renewable-main.jpg',
    'sustainability/sustainability-main.jpg',
    'projects/project1.jpg',
    'projects/project2.jpg',
    'blog/blog1.jpg',
    'blog/blog2.jpg',
    'general/placeholder.jpg'
];

// Create a simple colored square as placeholder
function createPlaceholderImage($path, $text = '') {
    $width = 800;
    $height = 600;
    $image = imagecreatetruecolor($width, $height);
    
    // Green background
    $green = imagecolorallocate($image, 26, 74, 46);
    $white = imagecolorallocate($image, 255, 255, 255);
    $gold = imagecolorallocate($image, 201, 168, 76);
    
    imagefilledrectangle($image, 0, 0, $width, $height, $green);
    
    // Draw a leaf icon
    $centerX = $width/2;
    $centerY = $height/2 - 20;
    
    // Simple leaf shape
    imagefilledellipse($image, $centerX - 30, $centerY, 60, 80, $gold);
    imagefilledellipse($image, $centerX + 30, $centerY, 60, 80, $gold);
    imagefilledellipse($image, $centerX, $centerY - 20, 40, 60, $gold);
    
    // Draw text
    $text = $text ?: 'LUPER AGRO';
    imagestring($image, 5, $centerX - 60, $centerY + 50, $text, $white);
    imagestring($image, 3, $centerX - 80, $centerY + 80, 'Agricultural Excellence', $white);
    
    imagejpeg($image, $path, 80);
    imagedestroy($image);
}

foreach ($sections as $file) {
    $fullPath = $basePath . $file;
    $dir = dirname($fullPath);
    
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
    
    if (!file_exists($fullPath)) {
        $label = strtoupper(str_replace(['.jpg', '/'], ['', ' '], $file));
        createPlaceholderImage($fullPath, $label);
        echo "Created: $file<br>";
    }
}

echo "<br><strong>All placeholder images created!</strong>";
echo "<p><a href='index.php'>Go to Homepage →</a></p>";