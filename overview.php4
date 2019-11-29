<?php
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

$ressource = new ressource()
$a->listing();

echo $new_page->body="
<form action='' id='header'><fieldset><legend>header</legend><select></select></fieldset></form>
e


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
