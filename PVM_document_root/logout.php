<!-- Citation: Murach,J. and Harris,R. (2010). Murach's PHP and MySQL. (3rd ed.). Mike Murach&Associates, Inc. -->
<?php
$name = session_name();
$expire = strtotime('-1 year');
$params = session_get_cookie_params();
$path = $params['path'];
$domain = $params['domain'];
$secure = $params['secure'];
$httponly = $params['httponly'];
setcookie($name, '', $expire, $path, $domain, $secure, $httponly);

include 'index.php';
?>