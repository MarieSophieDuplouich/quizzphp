<?php
$questions = [
    "Quelle est la couleur du cheval blanc d'Henri IV?2\n1.Blanc\n2.Rouge\n3.Noir\n",
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
        echo "Bonne réponse + 10 points\n";
        $score += 10;
    } else {
        echo "Mauvaise réponse, question suivante \n";
    }
}

echo "Ton score est de " . $score . " points \n";


// il faut parler si user a un score au moins 50% il a gagné sinon il a perdu



// $calcul = (15/50) * 100

$calcul = ($score / 50) * 100;


if ($calcul <= 25) {

    echo "l'utilisateur a perdu \n";
} else {

    echo "l'utilisateur a gagné\n";
}
