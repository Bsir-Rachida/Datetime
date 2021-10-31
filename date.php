<?php
$presentTime = new DateTime();
echo $presentTime->format('M-d-Y A g:i');

echo "<br>";
$destinationTime = new DateTime('2022-02-10 20:30:00');
echo $destinationTime->format('M-d-Y A g:i');

$diff = $presentTime->diff($destinationTime);  
$diffa = $presentTime->diff($destinationTime); 
$diffm = $presentTime->diff($destinationTime); 
$diffh = $presentTime->diff($destinationTime); 
$diffi= $presentTime->diff($destinationTime); 


echo "<br>";
echo $nb_jours = $diff->d." Jours "; 
echo $nb_mois = $diffm->m." mois "; 
echo $nb_an = $diffa->y." ans "; 
echo $nb_heur = $diffh->h." heurs "; 
echo $nb_min = $diffi->i." minutes "; 

 