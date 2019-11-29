<?php
define('ROOT' ,'../');
define('BOARD' , ROOT.'board/');
define('OGAME' , ROOT.'ogame/');

include(BOARD.'lib/auth.php');
$disconnect = new auth();
$disconnect->disconnect();
include('../index.php');
?>
