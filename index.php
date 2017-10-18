<?php
$subdomain = explode('.', $_SERVER['HTTP_HOST'])[0];
header('Location: https://knzk.me/@' . $subdomain);
exit;
?>
