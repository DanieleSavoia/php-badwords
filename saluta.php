<?php
$testoiniziale = "{$_POST['paragrafo']} Parola da sostituire:{$_POST['sostituzione']}";
$testofinale = str_ireplace($_POST['sostituzione'], "***", $_POST['paragrafo']);
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
    <div><?= $testoiniziale; ?></div>
    Testo censurato:
    <div><?= $testofinale; ?></div>



</body>

</html>