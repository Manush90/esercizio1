<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formazioni Serie A</title>
    <style>
        body{
            font-family: sans-serif;
        }
        .squadra {
            display: inline-block;
            vertical-align: top;
            margin: 0 10px;
            background-color: greenyellow;
            border-radius: 20px;
            padding: 15px;
        }
    </style>
</head>
<body>

<?php

$squadre = array(
    "AS Roma" => array("Portiere" => "99.Svilar", "Difensore" => "2.Karsdorp 13.Mancini 5.Ndicka 3.Angelino", "Centrocampista" => "7.Pellegrini 16.Paredes 8.Cristante", "Attaccante" => "90.Lukaku 21.Dybala"),
    "Real Madrid" => array("Portiere" => "1.Lunin", "Difensore" => "3.Mendy 2.Rudiger 13.Nacho 22.Carvajal", "Centrocampista" => "8.Kroos 10.Modric 14.Valverde", "Attaccante" => "7.Vinicius 9.Rodrygo"),
    
);


echo "<center>"; 

foreach ($squadre as $squadra => $formazione) {
    echo "<div class='squadra'>"; 
    echo "<h2> " . $squadra . "</h2>"; 
    echo "<h3>Formazione:</h3>"; 
    foreach ($formazione as $ruolo => $giocatore) {
        echo "<h5>" . $ruolo . ":</h5>"; 
        echo "<h3>" . $giocatore . "</h3>"; 
    }
    echo "</div>";
}

echo "</center>"; 

?>

</body>
</html>


