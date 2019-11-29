<?php
define('ROOT' , '../');
define('BOARD' , ROOT.'board/');
define('OGAME' , ROOT.'ogame/');

$login=$_POST['login'];
$password=$_POST['password'];

$age = $_POST['age'] ;
$sexe = $_POST['sexe'] ;
$ville = $_POST['ville'] ;

include(BOARD.'lib/message.php');
$account_space_registration = new message();


include(BOARD.'lib/auth.php');
$space_registered_auth = new auth();

$space_registered_auth->login = $login;
$space_registered_auth->password = $password ;
$space_registered_auth->age = $age ;
$space_registered_auth->sexe = $sexe ;
$space_registered_auth->ville = $ville ;

$space_registered_auth->group = 'space';

$space_registered_auth->register();

include(ROOT.'index.php');
?>
