<?php
echo "Hello from GitHub Actions!\n";
echo "Today is: " . date('Y-m-d H:i:s') . "\n";
echo "PHP version: " . phpversion() . "\n";

// Add a simple function for testing
function add($a, $b) {
    return $a + $b;
}

echo "2 + 3 = " . add(2, 3) . "\n";
echo "Learning GitHub Actions is fun!\n";
?>