<?php
session_start();

$first = isset($_GET['first_name']) ? $_GET['first_name'] : '*';
$last = isset($_GET['last_name']) ? $_GET['last_name'] : '*';
$_SESSION['first'] = $first;
$_SESSION['last'] = $last;

require('database.php');
try {
    $query = "SELECT * FROM User WHERE FirstName LIKE '%$first%' AND LastName LIKE '%$last%';";
    $user_login = $db->query($query);
    $user_info = $user_login->fetch();
    $_SESSION['user'] = $user_info;
    include 'search_results.php';
} catch (Exception $exception) {
    print($exception . "\n");
    print($query . " Search query had no results or resulted in error??");
}
