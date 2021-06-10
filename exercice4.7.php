<?php
    function person($age,$genre) : string
    {
        $ageString = "Vous êtes majeur";
        if ($age <18){
            $ageString = "vous êtes mineur";
        }
        $genreString = "homme";
        $accord = "";
        if ($genre === "femme"){
            $genreString = "femme";
            $accord = "e";
        }
        return("Vous êtes un".$accord. " " .$genreString." et " .$ageString. $accord);
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4.7</title>
</head>
<body>
    <h1>Exercice 7 Partie 4 : Les fonctions PHP</h1>
        <p><?=person(15,"femme");?></p>
</body>
</html>