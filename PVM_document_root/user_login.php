<?php
session_start();
$_SESSION['logged_in'] = false;

require_once('database.php');

$username = $_POST['username'];
$_SESSION['username'] = $username;

try {
    $query = "SELECT Password FROM User WHERE Username='$username';";
    $user_login = $db->query($query);
    $user_credentials = $user_login->fetch(PDO::FETCH_NUM);
    $pswd_hash = $user_credentials[0];
} catch (Exception $exception) {
    print($exception . "\n");
    exit($query . " did not work");
}

if (password_verify($_POST['password'], $pswd_hash)) {
    $_SESSION['logged_in'] = true;
    include('profile.php');
} else {
    include('login_error.php');
}
?>

