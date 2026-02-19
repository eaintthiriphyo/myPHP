<?php
function delete_cookie($name) {
    $params = [
        'expires'  => time() - 3600,
        'path'     => '/',
        'domain'   => '',
        'secure'   => false,
        'httponly' => true,
        'samesite' => 'Lax'
    ];
 
    setcookie($name, "", $params);
    unset($_COOKIE[$name]);
}
 delete_cookie("username");


 header("Location:/read.php");