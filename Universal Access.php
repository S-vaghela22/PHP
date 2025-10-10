<?php
$GLOBALS['counter'] = 0;

function incrementCounter() {
    $GLOBALS['counter']++;
}

incrementCounter();
incrementCounter();

echo "Global Counter Value: " . $GLOBALS['counter'];
?>
