<?php
session_start();

$timeout_duration = 60; // 1 minute

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
    session_unset();
    session_destroy();
    echo "<p>Session expired due to inactivity.</p>";
} else {
    $_SESSION['LAST_ACTIVITY'] = time();
    echo "<p>Session is active. Last activity updated.</p>";
}
?>
