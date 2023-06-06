<?php
$testoiniziale = "{$_POST['paragrafo']} Parola da sostituire:{$_POST['sostituzione']}";
$testofinale = str_replace('sostituzione', "***", $_POST['paragrafo'], $num_sostituzioni);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova</title>
</head>

<body>
    Testo iniziale:
    <h3><?= $testoiniziale; ?></h3>
    Testo censurato:
    <h3><?= $testofinale; ?></h3>



</body>

</html>