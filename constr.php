<?php
$session_start;
$login = $_SESSION['login'];
$n = $_POST['numbers'];
$t = $_POST['noairplane'];

include('/media/cdrecorder1/var/www/board/lib/build_spatial.php');
$a = new build_spatial();
$a->petit_transporteur();
?>

