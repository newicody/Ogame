<?php
define('ROOT' ,'../');
define('BOARD' , ROOT.'board/');
define('OGAME' , ROOT.'ogame/');

include( BOARD.'lib/auth.php');
$authentification = new auth();
$authentification -> connect();

include( BOARD.'lib/pager.php');

include( BOARD.'lib/pannel_install.php');

include( BOARD.'lib/buddys.php');

$install = new pannel();

$pannel = new pager();

$buddys = new buddys();

$pannel->constantine(OGAME."singleton/");

$pannel->doctype="xhtml_1.0_strict";
include $pannel->doctype() ;

$pannel->lang="fr";
include $pannel->xml();

$pannel->title="H&eacute;bergement SAAP depuis 2001" ;
$pannel->lang="fr";
$pannel->motscles="";
$pannel->description="";
$pannel->ContentLanguage="";
$pannel->ContentType="text/html;charset=utf";
$pannel->ContentScriptType="text/javascript";
$pannel->Style1="ogame.css";
$pannel->Style2="normalize.css";
$pannel->js="xhr.js";
include $pannel->head('defense');
include $pannel->body();

echo $pannel->body="
<form action='' id='header'><fieldset><legend>header</legend></fieldset></form>
<div id='title1'>
";
include(OGAME.'menuleft.php');
echo "
</div>

<div id='title2'>
<h1>Défenses</h1>
";
echo "
</div>
<form action='' id='footer1'><fieldset><legend><a href=logout.php>Disconnect</a></legend></fieldset></form>
";
include $pannel->footer();
echo $pannel->footer;

?>
