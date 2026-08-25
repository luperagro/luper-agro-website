<?php
// test.php - Check if PHP and database are working

echo "<h1>LUPER AGRO - System Check</h1>";

// Check PHP version
echo "<p>PHP Version: " . phpversion() . "</p>";

// Check if config file exists
if (file_exists('config/config.php')) {
    echo "<p style='color:green'>✓ config/config.php exists</p>";
} else {
    echo "<p style='color:red'>✗ config/config.php not found</p>";
}

// Test database connection
try {
    $pdo = new PDO("mysql:host=localhost;dbname=luper_agro_db;charset=utf8mb4", "root", "");
    echo "<p style='color:green'>✓ Database connection successful</p>";
    
    // Test query
    $stmt = $pdo->query("SELECT COUNT(*) as count FROM contact_messages");
    $result = $stmt->fetch();
    echo "<p style='color:green'>✓ contact_messages table exists (" . $result['count'] . " records)</p>";
    
} catch (PDOException $e) {
    echo "<p style='color:red'>✗ Database error: " . $e->getMessage() . "</p>";
}

echo "<hr>";
echo "<p><a href='index.php'>Go to Homepage →</a></p>";