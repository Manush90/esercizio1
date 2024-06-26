<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data odierna</title>
    <style>
        body {
            text-align: center;
        }
        h1, h2 {
            margin:5px;
        }
    </style>
</head>
<body>

<?php
function getDataItaliana() {
    $giorni_settimana = array(
        'Domenica', 'Lunedì', 'Martedì', 'Mercoledì', 'Giovedì', 'Venerdì', 'Sabato'
    );
    $mesi_anno = array(
        'gennaio', 'febbraio', 'marzo', 'aprile', 'maggio', 'giugno',
        'luglio', 'agosto', 'settembre', 'ottobre', 'novembre', 'dicembre'
    );

    $oggi = getdate();
    $giorno_settimana = $giorni_settimana[$oggi['wday']];
    $giorno = $oggi['mday'];
    $mese = $mesi_anno[$oggi['mon'] - 1];
    $anno = "<h1>" . $oggi['year'] . "</h1>";

    return "$giorno_settimana, $giorno $mese <br> $anno";
}

$data_italiana = getDataItaliana();
?>

<h2>Data odierna:<br> <?php echo $data_italiana; ?></h2>

</body>
</html>


