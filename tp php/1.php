Passer au contenu principal
Google Classroom
Classroom
Advanced Networking 2
G1
Accueil
Agenda
Inscrit
À faire
A
Advanced Networking 2
G1
Cours archivés
Paramètres
TP PHP
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$module='securiser un web';
$enseignant='amamu';
$totaledtudiants=30;
$note_mini=9;

echo 'le nom du module:   '.$module.
'    le nom de d enseignant:      '.$enseignant.'
      le nombre total d étudiants:   '.$totaledtudiants.'    une note minimale de validation     '.$note_mini;

//part2 
echo '<br>';

$etudiants=['adam','amine','yassine'];

$notes=[12,15,2];



for($i=0;$i<count($notes);$i++){
    echo 'le nom   '.$etudiants[$i].'    et sa note      '.$notes[$i] .'<br>' ;



}
;
echo'apres ajout ';


$etudiants[3]='aymane';
$notes[3]=5;
for($i=0;$i<count($notes);$i++){
    echo 'le nom   '.$etudiants[$i].'    et sa note      '.$notes[$i] .'<br>' ;



};
echo'apres supression ';


unset($etudiants[3]);
unset($notes[3]);
for($i=0;$i<count($notes);$i++){
    echo 'le nom   '.$etudiants[$i].'    et sa note      '.$notes[$i] .'<br>' ;



};

$moyene=0;
for($i=0;$i<count($notes);$i++){
    $moyene+=$notes[$i];
};
echo 'la note moyenne est : '.$moyene/count($notes).'<br>';



echo max($notes);
echo min($notes);




echo '<br> parcour des table avec foreache ';

foreach($etudiants as $e){

    echo $e;
    echo '<br>';
}
foreach($notes as $n){

    echo $n;
    echo '<br>';
}



for($i=0;$i<count($notes);$i++){
    if($notes[$i]>=$note_mini){
    echo 'le nom   '.$etudiants[$i].'    et sa note      '.$notes[$i] .'<br>' ;
    }


};

$v=0;$nv=0;
for($i=0;$i<count($notes);$i++){
    if($notes[$i]>=$note_mini){
        $v++;
    }else{
        $nv++;
    }

};
echo'le nombre d etudiant valiser est :'.$n.'et non valider :'.$nv.'<br>';


echo '<ol>';
for($i=0;$i<count($notes);$i++){

    echo '<li>'.$etudiants[$i].' note   '.$notes[$i] .'</li><br>' ;



}


function moyenne($note){
    $moyene=0;
for($i=0;$i<count($note);$i++){
    $moyene+=$note[$i];
};

return($moyene/count($note));

}

$testmoyenne=moyenne($notes);
echo $testmoyenne;


function isvalide($e,$notes,$etudiants,$note_mini){
    for($i=0;$i<count($etudiants);$i++){

        if($etudiants[$e]==$e){$notev=$notes[$i];}
        if($notev>=$note_mini){
            return true;
        }else false ;

    }
}


$testv=isvalide(e: $etudiants[2],notes: $notes,etudiants: $etudiants,note_mini: $note_mini)
;
echo $testv ;

function message($note){

    if($note>10){echo'BRAVO T AS OBTENUE LA MOYENNE ';}else{echo'en dessus de la moyenne ';};

}
message($notes[1]);




?>








</body>
</html>



1.php
Page 1 sur 2 Page 1 sur 2
TP PHP
Ahmed Amamou
•
16 déc. 2025 (Modification : 16 déc. 2025)
100 points
tp php.pdf
PDF

Commentaires ajoutés au cours
Vos devoirs
Remis
1.php
HTML

Commentaires privés
