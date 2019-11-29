<?php
session_start();
if (!isset($_SESSION['login']) OR !isset($_SESSION['password']) OR !isset($_SESSION['space']))
{ include(OGAME.'logout.php');}

define('ROOT' ,'../');
define('BOARD' , ROOT.'board/');
define('OGAME' , ROOT.'ogame/');
$_SESSION['planet']= $_POST['test'];

include('overview.php');
?>
