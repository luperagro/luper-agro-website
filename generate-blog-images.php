<?php
// Generate placeholder images for blog
function createBlogPlaceholder($path, $text, $color = '#1a4a2e') {
    $width = 800;
    $height = 500;
    $image = imagecreatetruecolor($width, $height);
    
    // Background colors
    $colors = [
        '#1a4a2e' => [26, 74, 46],
        '#2a6a3e' => [42, 106, 62],
        '#c9a84c' => [201, 168, 76],
        '#0d2e1a' => [13, 46, 26],
        '#3a8a5e' => [58, 138, 94]
    ];
    
    $bgColor = $colors[array_rand($colors)];
    $bg = imagecolorallocate($image, $bgColor[0], $bgColor[1], $bgColor[2]);
    $gold = imagecolorallocate($image, 201, 168, 76);
    $white = imagecolorallocate($image, 255, 255, 255);
    $light = imagecolorallocate($image, 200, 220, 210);
    
    imagefilledrectangle($image, 0, 0, $width, $height, $bg);
    
    // Draw decorative circles
    for ($i = 0; $i < 15; $i++) {
        $x = rand(0, $width);
        $y = rand(0, $height);
        $size = rand(20, 80);
        $alpha = rand(10, 40);
        $circleColor = imagecolorallocatealpha($image, 255, 255, 255, $alpha);
        imagefilledellipse($image, $x, $y, $size, $size, $circleColor);
    }
    
    // Draw a leaf icon
    $cx = $width/2;
    $cy = $height/2 - 30;
    
    // Leaf shape
    imagefilledellipse($image, $cx - 50, $cy, 100, 130, $gold);
    imagefilledellipse($image, $cx + 50, $cy, 100, 130, $gold);
    imagefilledellipse($image, $cx, $cy - 40, 60, 90, $gold);
    
    // Stem
    imageline($image, $cx, $cy + 50, $cx, $cy + 100, $gold, 3);
    
    // Main text
    $textColor = $white;
    imagestring($image, 5, $cx - 120, $cy + 70, $text, $textColor);
    imagestring($image, 3, $cx - 80, $cy + 100, 'LUPER AGRO INSIGHTS', $gold);
    
    imagejpeg($image, $path, 80);
    imagedestroy($image);
}

$blogImages = [
    'organic-fertilizer.jpg' => 'Organic Fertilizer',
    'sustainable-farming.jpg' => 'Sustainable Farming',
    'renewable-energy.jpg' => 'Renewable Energy',
    'crop-production.jpg' => 'Crop Production',
    'animal-production.jpg' => 'Animal Production',
    'agribusiness.jpg' => 'Agribusiness'
];

$folder = __DIR__ . '/assets/images/blog/';
if (!is_dir($folder)) {
    mkdir($folder, 0777, true);
}

foreach ($blogImages as $file => $text) {
    $path = $folder . $file;
    createBlogPlaceholder($path, $text);
    echo "Created: $file<br>";
}

echo "<br>✅ All blog images created!<br>";
echo "<a href='blog.php'>Go to Blog →</a>";
?>