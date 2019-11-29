<?php
session_start();
$login = $_SESSION['login'];

$countdown = 7;
$z=1;
$handle = fopen('../../../home/'.$login.'/ogame/monfichier.txt','r+');
while ( $z < $countdown ) {

if (!isset( $_POST['metal'.$z] )) { $pla1=0; }  else { $pla1 = $_POST['metal'.$z];}
if (!isset( $_POST['crystal'.$z] )) { $pla2=0; }  else { $pla2 = $_POST['crystal'.$z];}
if (!isset( $_POST['deuterium'.$z] )) { $pla3=0; }  else { $pla3 = $_POST['deuterium'.$z];}
if (!isset( $_POST['elec1'.$z] )) { $pla4=0; }  else { $pla4 = $_POST['elec1'.$z]; }
if (!isset( $_POST['elec2'.$z] )) { $pla5=0; }  else { $pla5 = $_POST['elec2'.$z];}
if (!isset( $_POST['sat'.$z] )) { $pla6=0; }  else { $pla6 = $_POST['sat'.$z];}
fwrite($handle,$pla1.' '.$pla2.' '.$pla3.' '.$pla4.' '.$pla5.' '.$pla6.' ');
$z++;
}
fclose($handle);

define('ROOT' ,'../');
define('BOARD' , ROOT.'board/');
define('OGAME' , ROOT.'ogame/');

include( BOARD.'lib/pager.php');
$new_page = new pager();

$new_page->constantine(OGAME."singleton/");
$new_page->doctype="xhtml_1.0_strict";

include $new_page->doctype();


include $new_page->head('overview');

include $new_page->body();

echo $new_page->body="
<form action='' id='header'><fieldset><legend>header</legend></fieldset></form>
<div id='title1'>
";
include('menuleft.php');
echo "
</div>

<div id='title2'>
<H1>Overviews</h1>

</div>
<form action='' id='footer1'><fieldset><legend><a href=logout.php>Disconnect</a></legend></fieldset></form>
";
include $new_page->footer();
echo $new_page->footer;

?>
