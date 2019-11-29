<?php
include('../board/lib/auth.php');
$grp = new auth();
$grp->login = $login;
$grp->estunseigneur=True;
$grp->group_want='space';
$userr = $grp->group_ogme();
include('../board/lib/ressources.php');
$metal_refresh = new ressources();

foreach($userr as $pa) {
echo 'Actualising \n';
echo 'Joueur : '.$pa;
// seul l'action du bouton peu permettre de modifier la valeur des ressources
// dans le fichier monfichier2.txt (total des ressources primaires).
// le joueur peut jouer sur les rapport de production avant la venue du bouton
// (worker.php).

$a = file('/media/cdrecorder1/home/'.$pa.'/ogame/monfichier.txt');
$b = file('/media/cdrecorder1/home/'.$pa.'/ogame/monfichier2.txt');
$pc = '/media/cdrecorder1/home/'.$pa.'/ogame/planets/';
$m=0;
$y=0;
    for ( $x=1 ; $x <= 3; $x++ )
       {
       echo 'p'.$x;
       $fichier2 = explode(' ',$b[$x-1]);
       $fichier = explode(' ',$a[$x-1]);
        $y=0;
        if (is_dir($pc.$x.'/batiment/metal/'))
            {
            if ( $vara = opendir($pc.$x.'/batiment/metal/') )
                {
                $y=0;
                while(false !== ($entry = readdir($vara)))
                    {
                    if ($entry != "." && $entry!= "..")
                    {
                    $y++;
		    }
                }
            }
        closedir($vara);
        $fichier2[1+$m] = $y;
        }
    $y=0;
    if (is_dir($pc.$x.'/batiment/crystal/'))
        {
        if ( $vara = opendir($pc.$x.'/batiment/crystal/') )
        {
            while(false !== ($entry = readdir($vara)))
               {
               if ($entry != "." && $entry!= "..")
                    {
                    $y++;
                    }

                }
            closedir($vara);
            $fichier2[6+$m]=$y;
            }
        }

        $y=0;
        if (is_dir($pc.$x.'/batiment/deuterium/'))
            {
            if ( $vara = opendir($pc.$x.'/batiment/deuterium/') )
                {
                while(false !== ($entry = readdir($vara)))
                    {
                    if ($entry != "." && $entry!= "..")
                    {
                    $y++;
                    }
                }
            closedir($vara);
            $fichier2[11+$m]=$y;
            }
        }
        $y=0;
        if (is_dir($pc.$x.'/batiment/elec1/'))
            {
            if ( $vara = opendir($pc.$x.'/batiment/elec1/') )
                {
                while(false !== ($entry = readdir($vara)))
                    {
                    if ($entry != "." && $entry!= "..")
                    {
                    $y++;
                    }
                }
          closedir($vara);
          $nrj1 = $y*(($fichier[3+$m])/10);
          echo $fichier[3+$m];
            }
        }
        $y=0;
        if (is_dir($pc.$x.'/batiment/elec2/'))
            {
            if ( $vara = opendir($pc.$x.'/batiment/elec2/') )
                {
                while(false !== ($entry = readdir($vara)))
                    {
                    if ($entry != "." && $entry!= "..")
                    {
                    $y++;
                    }
                }
            closedir($vara);
        $nrj2 = ($y/2) * (($fichier[4+$m])/10);
        }
        $y=0;
       if (is_dir($pc.$x.'/batiment/sat/'))
            {
            if ( $vara = opendir($pc.$x.'/batiment/sat/') )
                {
                while(false !== ($entry = readdir($vara)))
                    {
                    if ($entry != "." && $entry!= "..")
                    {
                    $y++;
                    }
                    }
            closedir($vara);
            $nrj3= ($y/3) * (($fichier[5+$m])/10);
            $nrj = $nrj1 + $nrj2 + $nrj3;
            echo $nrj1;
            $m+=6;
                }
            }
        }
    if (is_dir($pc.$x)) {
    $fp = fopen($pc.$x.'/nrj.txt','w');
    fwrite($fp,$nrj);
    fclose($fp);}

    $nrj3 =0;    $nrj2 =0;    $nrj1 =0;    $nrj =0;
    $a = implode(" ",$fichier2);
    $vra= $pc.$x."/tableau.txt";
    $fo = fopen($vra,"w");
    fwrite($fo,$a);
    $fp=0;
    }
}
?>

