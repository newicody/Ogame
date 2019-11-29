<?php
/*session_start();
if (!isset($_SESSION['login']) OR !isset($_SESSION['password']))
{ include(OGAME.'logout.php'); }

$login = $_SESSION['login'];
$planet_act=$_SESSION['planet'];
*/
define('ROOT' ,'../');
define('BOARD' , ROOT.'board/');
define('OGAME' , ROOT.'ogame/');


//$fichier = file("/media/cdrecorder1/var/www/'.$this->login.'/ogame/planets/'.$this->planet.'/chantier/petit_transporteur/units");
include(BOARD.'lib/build_spatial.php');
$pt = new build_spatial();
echo $pt->login;

echo "<li>Petit transporteur (".$fichier[0].")</li>Métal ";

if (20002000 ){
echo "Crystal <p style='red'>2000"; 
echo "</p>";
}
else {
echo "<p style='green'>2000</p>"; 
}
echo "
</br>

<li><form method='POST' action='constr.php'>
<input size='5' name='numbers' type='text' value='0'/></li>
<input size='5' name='noairplane' type='hidden'/></li>
<li><img src='pics/pt.png'/></li>
<li><button>Construire</button></li>
<li><p class='desc'>
<p>
Le petit transporteur est le premier engin à utiliser le théorème de la propulsion supersonic2 (hypersonic) qui vient conccurenser le turoboréacteur du Concorde. 
il a été dévelopé par un partenariat entre Turbo méca et SNECMA. Il exploite le principe du référentiel supersonic qui énnonce qu'un engin entrant dans le domaine 
supersonic ne considère plus l'environnement terreste mais qu'il est le référentiel à considérer. C'est à dire que tout objet appartenant au domaine du supersonic2 a une énergie 
cinétique nulle. En dehors de supersonic, supersonic2 augmente les forces de frottement pour augmenter le couple mais en résulte un bilan des force non pas 
équilibré mais tel que la masse et la trainée sont totalements nulles.</p>

<p>C'est aussi ce que l'on nomme en électromécanique le paradigme de la convention générateur/récepteur pour un dipôle actif linéaire.</p>

<p>Ainsi il  utilise sa propre trainée comme énergie qu'il peu projetter à l'intérieur du domaine supersonic et en découle une correction de E=mc² où E=0 m=0 c²=0.
Tous les vaisseaux n'en bénéficient pas seuls le petit transporteur et le grand transporteur l'utilise en raison de la dépendence du couple généré liée par la 
masse du vaisseau.</p>

<p>C'est lui qui, en trautre, à recrée le défit de la course pour la conquète de l'espace bien après la guerre froide et la chute du mur de Berlin.</p>
</p></li>
";
