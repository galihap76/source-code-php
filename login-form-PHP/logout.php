<?php
session_start();
$_SESSION=[];
session_unset();
session_destroy();

setcookie('KEY', '', time() - 3600);
setcookie('ID', '', time() - 3600);

header("Location: login.php");
exit;

?>