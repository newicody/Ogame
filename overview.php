<?php
session_start();
if (!isset($_SESSION['login']) OR !isset($_SESSION['password']) OR !isset($_SESSION['space']))
{ include(OGAME.'logout.php');}

define('ROOT' ,'../');
define('BOARD' , ROOT.'board/');
define('OGAME' , ROOT.'ogame/');
$planet_act = $_SESSION['planet'];
$login = $_SESSION['login'];
include( BOARD.'lib/pager.php');
$new_page = new pager();

$new_page->constantine(OGAME."singleton/");
$new_page->doctype="xhtml_1.0_strict";

include $new_page->doctype();

$new_page->lang="fr";
include $new_page->xml();

$new_page->title="H&eacute;bergement SAAP depuis 2001" ;
$new_page->lang="fr";
$new_page->motscles="";
$new_page->description="";
$new_page->ContentLanguage="";
$new_page->ContentType="text/html;charset=utf";
$new_page->ContentScriptType="text/javascript";
$new_page->Style1="ogame.css";
$new_page->Style2="normalize.css";
$new_page->js="xhr.js";
include $new_page->head('overview');
include $new_page->body();

include( BOARD.'lib/ressources.php');
$read = new ressources();
$read->login = $login;
$read->planet = $planet_act;

$rm = $read->read_metal();
$rc = $read->read_crystal();
$rd = $read->read_deuterium();
$re = $read->read_energie();
echo $new_page->body="
<form action='' id='header'><fieldset><legend>

<ul class='ressources'>
<li>Métal</br>img</br>"; echo $rm;echo"
</li>
<li>Crystal</br>img</br>"; echo $rc;echo"
</li>
<li>Deutérium</br>img</br>"; echo $rd;echo"
</li>
<li>Énergie</br>img</br>"; echo $re[0]*190.90909;echo"</li>
</legend></fieldset></form>
</ul>
<div id='title1'>
";
include('menuleft.php');
echo "
</div>

<div id='title2'>
<h1>Overviews</h1>
<form action='' id='desc'><fieldset><legend>Résumé</legend>";
include('../../../home/logine/ogame/planets/'.$planet_act.'/infos.txt');echo "
</fieldset></form>
<form action='' id='desc'><fieldset><legend>Score</legend>
</fieldset></form>
<form action='' id='desc'><fieldset><legend>Univers</legend>
</fieldset></form>
";
echo "
</div>
";

include $new_page->footer();
echo $new_page->footer;
?>
