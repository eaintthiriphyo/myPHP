<?php
// logout.php
 
// 1) Start the session at the very top (before any output)
session_start();
 
// 2) Clear all session variables (server-side)
$_SESSION = [];
 
// 3) If PHP uses a session cookie, delete it in the browser too
if (ini_get('session.use_cookies')) {
    $params = session_get_cookie_params();
 
    // Build the deletion cookie with EXACT same attributes
    $cookieOptions = [
        'expires'  => time() - 42000,                // any time in the past
        'path'     => $params['path'] ?? '/',
        'domain'   => $params['domain'] ?? '',
        'secure'   => (bool)($params['secure'] ?? false),
        'httponly' => (bool)($params['httponly'] ?? true),
    ];
 
    // If you configured SameSite for sessions, add it here to match
    // Examples:
    // $cookieOptions['samesite'] = 'Lax';
    // $cookieOptions['samesite'] = 'Strict';
    // $cookieOptions['samesite'] = 'None'; // requires 'secure' => true over HTTPS
 
    setcookie(session_name(), '', $cookieOptions);
}
 
// 4) Destroy the session data on the server
session_destroy();
 
// 5) (Optional) Redirect to login/home AFTER destroying
header('Location: /welcome.php');
exit;
?>