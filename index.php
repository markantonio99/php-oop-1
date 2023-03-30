<?php

require_once "./movie.php";

$film_1 = new movie("Il Signore degli Anelli", "Fantascienza");
$film_1->disponibilita(true);

$film2 = new movie("Iron Man", "Fantascienza");
$film2->disponibilita(false);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Il film:<br> <?php echo $film_1->title_movie . " " . "Del Genere" . $film_1->genere . "<br> " . ($film_1->getDisponibilita() ? "Il film è presente nei nostri magazzini e può essere noleggiato" : "Non abbiamo il film disponibile al momento") ?></h2>
    <h2>Il film: <br> <?php echo $film2->title_movie . " "  . "Del Genere " . $film2->genere . "<br> " . ($film2->getDisponibilita() ? "Il film è presente nei nostri magazzini e può essere noleggiato" : "Purtroppo non abbiamo il film disponibile al momento") ?></h2>
</body>
</html>
