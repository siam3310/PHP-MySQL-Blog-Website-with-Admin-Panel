<?php
session_start();
define("ROOT_URL", "/");
define('DB_HOST', 'sql307.infinityfree.com');
define('DB_USER', 'if0_36599985');
define('DB_PASS', 'FGV5lJcZnBD');
define('DB_NAME', 'if0_36599985_cinebuzz');
if (!isset($_SESSION['user-id'])) {
    header("location: " . ROOT_URL . "logout.php");
    //destroy all sessions and redirect user to login page
    session_destroy();
    die();
    header("location: " . ROOT_URL . "signin.php");
}
