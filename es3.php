<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partite e Formazioni</title>
    <style>
        h2 {
            background-color: lightseagreen;
        }
        .container {
            text-align: center;
            background-color: lightsalmon;
        }
        .partita {
            margin-bottom: 30px;
            
        }
        .squadra {
            display: inline-block;
            vertical-align: top;
            margin-right: 20px;
            padding: 5px;
            background-color: greenyellow;
            border-radius: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="partita">
        <h2>Roma - Lazio</h2>
        <?php
        
        $formazioni_roma_lazio = array(
            "Roma" => array("Portiere" => "99.Svilar", "Difensore" => "2.Karsdorp 13.Mancini 5.Ndicka 3.Angelino", "Centrocampista" => "7.Pellegrini 16.Paredes 8.Cristante", "Attaccante" => "90.Lukaku 21.Dybala"),
            "Lazie" => array("Portiere" => "98.Mandas", "Difensore" => "7.Romagnoli 87.Casale 22.Patric 2.Gila 3.Lazzari ", "Centrocampista" => "87.Leiva 67.Milinkovic 56.Alberto", "Attaccante" => "9.Immobile")
        );

        foreach ($formazioni_roma_lazio as $squadra => $formazione) {
            echo "<div class='squadra'>";
            echo "<h3>Formazione " . $squadra . ":</h3>";
            foreach ($formazione as $ruolo => $giocatore) {
                echo "<h4>" . $ruolo . ":</h4>";
                echo "<h3>" . $giocatore . "</h3>";
            }
            echo "</div>";
        }
        ?>
    </div>

    <div class="partita">
        <h2>Barcelona - Real Madrid</h2>
        <?php
        
        $formazioni_barcelona_real_madrid = array(
            "Barcelona" => array("Portiere" => "1.Ter Stegen", "Difensore" => "3.Piqué 5.Puyol 2.Abidal", "Centrocampista" => "8.De Jong 6.Xavi 34.Puig 98.Rafa", "Attaccante" => "11.Messi 10.Maradona 9.Pele"),
            "Real Madrid" => array("Portiere" => "1.Lunin", "Difensore" => "3.Mendy 2.Rudiger 13.Nacho 22.Carvajal", "Centrocampista" => "8.Kroos 10.Modric 14.Valverde", "Attaccante" => "7.Vinicius 9.Rodrygo"),
        );

        foreach ($formazioni_barcelona_real_madrid as $squadra => $formazione) {
            echo "<div class='squadra'>";
            echo "<h3>Formazione " . $squadra . ":</h3>";
            foreach ($formazione as $ruolo => $giocatore) {
                echo "<h4>" . $ruolo . ":</h4>";
                echo "<h3>" . $giocatore . "</h3>";
            }
            echo "</div>";
        }
        ?>
    </div>
</div>

</body>
</html>
