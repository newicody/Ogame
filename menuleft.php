<?php
session_start();
if (!isset($_SESSION['login']) OR !isset($_SESSION['password']) OR !isset($_SESSION['space']))
{ include(OGAME.'logout.php');}

define('ROOT' ,'../');
define('BOARD' , ROOT.'board/');
define('OGAME' , ROOT.'ogame/');
$planet_act = $_SESSION['planet'];
$login = $_SESSION['login'];
echo $login;
echo '
<form action="go.php" method="POST">
<select name="test">
';
for ($x=1; $x<7; $x++) {
    if (is_dir('../../../home/'.$login.'/ogame/planets/'.$x.'')) {
        echo '<option value='.$x.'>';
        echo $x.' :'; 
        echo file('../../../home/'.$login.'/ogame/planets/'.$x.'/infos.txt')[0];"</option>"; 
}}
echo '
</select><button>GO</button></form>
<ul>
<li><a href="'.OGAME.'overview.php">Overview</a></li>
<li><a href="'.OGAME.'ressources.php">Ressources</a></li>
<li><a href="'.OGAME.'building.php">Batiments</a></li>
<li><a href="'.OGAME.'alliance.php">Alliance</a></li>
<li><a href="'.OGAME.'galaxy.php">Galaxies</a></li>
<li><a href="'.OGAME.'fleet.php">Fleet</a></li>
<li><a href="'.OGAME.'research.php">Recherche</a></li>
<li><a href="'.OGAME.'stats.php">Stats</a></li>
<li><a href="'.OGAME.'defense.php">D&eacute;fense</a></li>
<li><a href="'.OGAME.'messagerie.php">Messagerie</a></li>
<ul>
';
?>
