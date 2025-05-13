<?php
require_once 'hello.php';

// Write some simple tests
$result = add(5, 7);
if ($result === 12) {
    echo "Test passed: 5 + 7 = 12\n";
} else {
    echo "Test failed: Expected 12, got $result\n";
    exit(1);
}

echo "All tests passed!\n";
?>