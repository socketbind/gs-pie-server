<?php
require_once 'mirror/config.php';
require_once 'mirror/mirror-client.php';
require_once 'mirror/google-api-php-client/src/Google_Client.php';
require_once 'mirror/google-api-php-client/src/contrib/Google_MirrorService.php';
require_once 'mirror/util.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PIE</title>
</head>
<body>

<h1>Pie!</h1>

<?php if (!isset($_SESSION['userid'])): ?>
    <a href="/mirror/perform_auth.php">Login</a>
<?php else: ?>
    <a href="/mirror/perform_logout.php">Log out</a>
<?php endif; ?>

</body>
</html>