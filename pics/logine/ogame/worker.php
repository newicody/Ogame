<?php
$handle = opendir('/media/cdrecorder1/home/');
while (false !== ($entry = readdir($handle) )){
    echo $entry;
$handle1 = opendir('/media/cdrecorder1/home/'.$entry.'/ogame/planets/');
    while (false !== ($entry2 = readdir($handle1))){
        echo $entry2;
        $handle2 = opendir('/media/cdrecorder1/home/'.$entry.'/'.$entry2.'batiment/');
            while (false !== ($entry3 = readdir($handle2))){
               echo $entry3;
}}}
/*
closedir($handle);

/home/*
opendir
readdir
|mon fichier1 (%prod)
| ls batimen(lvl)
monfichier2E
explode
array
calcul |
       |
returne monfichier2 actualiser valeur 1
*/
?>
