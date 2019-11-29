<?php
session_start();
if (!isset($_SESSION['login']) OR !isset($_SESSION['password']))
{ include(OGAME.'logout.php'); }

$login = $_SESSION['login'];
$planet_act=$_SESSION['planet'];
define('ROOT' ,'../');
define('BOARD' , ROOT.'board/');
define('OGAME' , ROOT.'ogame/');


include( BOARD.'lib/pager.php');

$pannel = new pager();

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
include $pannel->head('fleet');
include $pannel->body();

include( BOARD.'lib/ressources.php');
$read = new ressources();
$read->login = $login;
$read->planet=$planet_act;

$rm = $read->read_metal();
$rc = $read->read_crystal();
$rd = $read->read_deuterium();
$re = $read->read_energie();

/*include( BOARD.'lib/build_spatial.php');
$enum = new build_spatial;
$enum->metal = $rm;
$enum->crystal = $rc;
$enum->deuterium = $rd;*/

echo $pannel->body="
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
include(OGAME.'menuleft.php');
echo "
</div>

<div id='title2'>
<h1>Flottes</h1>

<ul class='fleet'>
";
include('fleet_pt.php');
echo "
</ul>
<ul class='fleet'>
<li>Grand transporteur</li></br>
<li><input size='5' type='text' value='0'/></li>
<li><img src='pics/pt.png'/></li>
<li><button>Construire</button></li>
<li><p class='desc'>
Describla bla bla blav blaaa bla bla
Describla bla bla blav blaaa bla bla Describla bla bla blav blaaa bla bla
Describla bla bla blav blaaa bla bla
Describla bla bla blav blaaa bla bla Describla bla bla blav blaaa bla bla
Describla bla bla blav blaaa bla bla
Describla bla bla blav blaaa bla bla Describla bla bla blav blaaa bla bla
</p></li>
</ul>
<ul class='fleet'>
<li>Chasseur léger</li></br>
<li><input size='5' type='text' value='0'/></li>
<li><img src='pics/pt.png'/></li>
<li><button>Construire</button></li>
<li><p class='desc'>
Describla bla bla blav blaaa bla bla
Describla bla bla blav blaaa bla bla Describla bla bla blav blaaa bla bla
Describla bla bla blav blaaa bla bla
Describla bla bla blav blaaa bla bla Describla bla bla blav blaaa bla bla
Describla bla bla blav blaaa bla bla
Describla bla bla blav blaaa bla bla Describla bla bla blav blaaa bla bla
</p></li>
</ul>
<ul class='fleet'>
<li>Chasseur lourd</li></br>
<li><input size='5' type='text' value='0'/></li>
<li><img src='pics/pt.png'/></li>
<li><button>Construire</button></li>
<li><p class='desc'>
Describla bla bla blav blaaa bla bla
Describla bla bla blav blaaa bla bla Describla bla bla blav blaaa bla bla
Describla bla bla blav blaaa bla bla
Describla bla bla blav blaaa bla bla Describla bla bla blav blaaa bla bla
Describla bla bla blav blaaa bla bla
Describla bla bla blav blaaa bla bla Describla bla bla blav blaaa bla bla
</p></li>
</ul>
<ul class='fleet'>
<li>Bombardier</li></br>
<li><input size='5' type='text' value='0'/></li>
<li><img src='pics/pt.png'/></li>
<li><button>Construire</button></li>
<li><p class='desc'>
Describla bla bla blav blaaa bla bla
Describla bla bla blav blaaa bla bla Describla bla bla blav blaaa bla bla
Describla bla bla blav blaaa bla bla
Describla bla bla blav blaaa bla bla Describla bla bla blav blaaa bla bla
Describla bla bla blav blaaa bla bla
Describla bla bla blav blaaa bla bla Describla bla bla blav blaaa bla bla
</p></li>
</ul>
<ul class='fleet'>
<li>Vaisseau de colonisation</li></br>
<li><input size='5' type='text' value='0'/></li>
<li><img src='pics/pt.png'/></li>
<li><button>Construire</button></li>
<li><p class='desc'>
Describla bla bla blav blaaa bla bla
Describla bla bla blav blaaa bla bla Describla bla bla blav blaaa bla bla
Describla bla bla blav blaaa bla bla
Describla bla bla blav blaaa bla bla Describla bla bla blav blaaa bla bla
Describla bla bla blav blaaa bla bla
Describla bla bla blav blaaa bla bla Describla bla bla blav blaaa bla bla
</p></li>
</ul>
</div>


<form action='' id='footer1'><fieldset><legend><a href=logout.php>Disconnect</a></legend></fieldset></form>
";
include $pannel->footer();
echo $pannel->footer;

?>
