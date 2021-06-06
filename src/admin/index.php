<?php

session_start();

header('Content-Type: text/html; charset=UTF-8');

if (!isset($_SESSION['is_login']) || empty($_SESSION['is_login'])) {
    echo ('<meta http-equiv="refresh" content="0 url=./login.html" />');
    exit;
}
else {
    echo ('<meta http-equiv="refresh" content="0 url=/index.php" />');
    exit;
}

?>