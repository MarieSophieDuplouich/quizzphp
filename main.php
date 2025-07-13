<?php
$questions = [
    "###################################################
######## Qui veux gagner des millions ?! ##########
###################################################

###################################################
Score : 0
###################################################
Quelle est la couleur du cheval blanc d'Henri IV?\n1.Blanc\n2.Rouge\n3.Noir\n",
    "Date de la prise de la Bastille ?\n1.1750\n2.1789\n3.1800\n",
    "Quel est le plus grand océan du monde ?\n1.Océan Atlantique\n2.Océan Indien\n3.Océan Pacifique\n",
    "Qui a écrit Les Misérables ?\n1.Victor Hugo\n2.Emile Zola\n3.Marcel Proust\n",
    "Quelle est la capitale de l'Australie ?\n1.Sydney\n2.Melbourne\n3.Canberra\n"
];


$reponses = [1, 2, 3, 1, 3];
$score = 0;


$NB_QUESTIONS = count($questions);

for ($i = 0; $i < $NB_QUESTIONS; $i++) {
    echo $questions[$i] . "\n";
    $ce_que_utilisateur_repond = (int)trim(fgets(STDIN)); // le programme ATTEND que l'utilisateur tape au clavier (lecture du fichier stdin)


    if ($ce_que_utilisateur_repond === $reponses[$i]) {
        echo "Suspennnnse ! 
     var_dump($NB_QUESTIONS);
Bien joué !

*Le score augmente de  10*\n"  .$score."\n";
        $score += 10;
      
    } else {
        echo "Suspennnnse ! 

NON ! 

*Le score n'augmente pas. :(*

################################################### 
Score :".$score."\n".
"###################################################
 \n";
    }
}

$calcul = ($score / $NB_QUESTIONS * 10);


if ($calcul <= 25) {

    echo "Tu as perdu dommage ! \n";
} else {

    echo "Bien joué tu as gagné des millions !\n";
}



echo "###################################################
Score: \n" . $score . 
 " points 
################################################### 
########### GAME OVER ###########\n";

echo "Pourcentage de bonne réponse  :".$calcul."% \n";



// $calcul = (15/50) * 100






