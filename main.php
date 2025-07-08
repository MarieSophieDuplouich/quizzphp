<?php
$questions = [
    "Quelle est la couleur du cheval blanc d'Henri IV?\n1.Blanc\n2.Rouge\n3.Noir\n",
    "Date de la prise de la Bastille ?\n1.1750\n2.1789\n3.1800\n",
    "Quel est le plus grand océan du monde ?\n1.Océan Atlantique\n2.Océan Indien\n3.Océan Pacifique\n",
    "Qui a écrit Les Misérables ?\n1.Victor Hugo\n2.Emile Zola\n3.Marcel Proust\n",
    "Quelle est la capitale de l'Australie ?\n1.Sydney\n2.Melbourne\n3.Canberra\n"
];


$reponses = [1, 2, 3, 1, 3];
$score = 0;
$scorefinal= $score + 10;

$NB_QUESTIONS = count($questions);

for ($i = 0; $i < $NB_QUESTIONS; $i++) {
    echo $questions[$i] . "\n";
    echo $questions[$i];
    $ce_que_utilisateur_repond = trim(fgets(STDIN)); // le programme ATTEND que l'utilisateur tape au clavier (lecture du fichier stdin)
    if ($questions[$i] == $reponses[$i]) {
        echo "you win\n";
    } else {
        echo "tu ne gagnes pas question suivante \n";
    }
}

echo $score . " \n";
