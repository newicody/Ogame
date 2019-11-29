<?php
session_start();
if ( !isset($_SESSION['login']) OR !isset($_SESSION['password']) )
{ include(OGAME.'logout.php'); }

$login = $_SESSION['login'];
$planet_act = $_SESSION['planet'];
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

include( BOARD.'lib/ressources.php');
$read = new ressources();
$read->login = $login;
$read->planet=$planet_act;
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
<H1>Ressources</h1>
";

echo '<form method="POST" action="actu.php">';

//planetes nombre
$tabl = new ressources();
$tabl->login=$login;
$tabl->planet='';
$tabl->type='';
$tabl->evolute='';
$tabl->name_form='';
$tabl->value='0';
$count=$tabl->count();
$i=1;
echo '<div class="planet_res"><ul>Planete<li>Numéro</li><li>Taille</ul><li>Coordonnées</li></ul>';
echo '<ul>Mine de métal<li>Niveau</li></ul>';
echo '<ul><li>Production</li></ul>';
echo '<ul>Mine de crystal<li>Niveau</li></ul>';
echo '<ul><li>Production</li></ul>';
echo '<ul>Mine de deutérium<li>Niveau</li></ul>';
echo '<ul><li>Production</li></ul>';
echo '<ul>Centrale Électrique<li>Niveau</li></ul>';
echo '<ul><li>Production</li></ul>';
echo '<ul>Centrale Solaire<li>Niveau</li></ul>';
echo '<ul><li>Production</li></ul>';
echo '<ul>Satellites solaire<li>Niveau</li></ul>';
echo '<ul><li>Production</li></ul></div>';

$tabl->load_res = file('../../../home/'.$tabl->login.'/ogame/monfichier.txt');

//BSD Licence
$tabl->$z =0;

while ( $i<=$count ) {

    $tabl->planet = $i;
    $tabl->named = file('../../../home/'.$tabl->login.'/ogame/planets/'.$i.'/infos.txt')[1];
    $tabl->size = file('../../../home/'.$tabl->login.'/ogame/planets/'.$i.'/infos.txt')[2];
    $tabl->pos = file('../../../home/'.$tabl->login.'/ogame/planets/'.$i.'/infos.txt')[0];
    echo '<div class="planet_res">';
    echo $tabl->tableau_planetes();


    $i++;
// associe a la lib permet d'enregistrer la prod

    $tabl->type='batiment';
    $tabl->evolute='metal';
    $tabl->count=$tabl->count();
    $tabl->name_form='metal'.$tabl->planet;

    if ( $tabl->count > 0) { echo $tabl->tableau_batiments(); }
    else { echo '-<li>-</li><li><select><option>-</option></select></li>';}
$tabl->$z += 1;

    $tabl->type='batiment';
    $tabl->evolute='crystal';
    $tabl->count=$tabl->count();
    $tabl->name_form='crystal'.$tabl->planet;

    if ( $tabl->count > 0) {    echo $tabl->tableau_batiments(); }
    else { echo '-<li>-</li><li><select><option>-</option></select></li>';}
$tabl->$z += 1;

    $tabl->type='batiment';
    $tabl->evolute='deuterium';
    $tabl->counét=$tabl->count();
    $tabl->name_form='deuterium'.$tabl->planet;

    if ( $tabl->count > 0) {    echo $tabl->tableau_batiments(); }
    else { echo '-<li>-</li><li><select><option>-</option></select></li>';}
$tabl->$z += 1;

    $tabl->type='batiment';
    $tabl->evolute='elec1';
    $tabl->count=$tabl->count();
    $tabl->name_form='elec1'.$tabl->planet;

    if ( $tabl->count > 0) {    echo $tabl->tableau_batiments(); }
    else { echo '-<li>-</li><li><select><option>-</option></select></li>';}
$tabl->$z += 1;

$tabl->type='batiment';
    $tabl->evolute='elec2';
    $tabl->count=$tabl->count();
    $tabl->name_form='elec2'.$tabl->planet;

    if ( $tabl->count > 0) {    echo $tabl->tableau_batiments(); }
    else { echo '-<li>-</li><li><select><option>-</option></select></li>';}
$tabl->$z += 1;




    $tabl->type='batiment';
    $tabl->evolute='sat';
    $tabl->count=$tabl->count();
    $tabl->name_form='sat'.$tabl->planet;

    if ( $tabl->count > 0) {    echo $tabl->tableau_batiments(); }
    else { echo '-<li>-</li><li><select><option>-</option></select></li>';}
$tabl->$z += 1;

echo '
</div>';

}

echo "
</div>
<button>Actualiser</button></form>

<form action='' id='footer1'><fieldset><legend><a href=logout.php>Disconnect</a></legend></fieldset></form>
";
include $new_page->footer();
echo $new_page->footer;

?>
