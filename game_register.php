<?php
/* pageons */
define ('ROOT' , '../');
define ('BOARD' , ROOT.'board/');

include( BOARD.'lib/pager.php');

$register_game = new pager();

include( BOARD.'lib/message.php');
$msg_guest = new message();
$msg_guest->file_app = ROOT.'ogame/logs/ogame.log';
$msg_guest->guest();

$register_game->constantine(BOARD.'singleton/');

$register_game->doctype="xhtml_1.0_strict";
include $register_game->doctype();

$register_game->lang="fr";
include $register_game->xml();

$register_game->title="H&eacute;bergement SAAP depuis 2001" ;

include $register_game->head();
echo "<div class='all'>";
include $register_game->langage(BOARD);
include $register_game->path();

include $register_game->body();
echo $register_game->body="
<ul class='connection'>
<form method='POST' action='game_registered.php'>
<fieldset>
<legend>Inscription space conquest</legend>
<li><label>Non d'utilisateur</label><input type='text' name='login' id='login' value='login'><br /></li>
<li><label>Mot de passe</label><input type='text' name='password' id='password' value='password'><br /></li>
<li><label>Age</label><input type='text' value='age' name='age' id='age'><br /></li>
<li><label>Sexe</label><input type='text' value='sexe' name='sexe' id='sexe'><br /></li>
<li><label>Ville</label><input type='text' value='ville' name='ville' id='ville'><br /></li>
<button>Valider</button>
</fieldset>
</form>
</ul>
";
$register_game->type=2;
include $register_game->footer();
?>

