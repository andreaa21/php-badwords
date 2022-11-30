<?php

$parola = $_POST['parola'];
$paragrafo = $_POST['paragrafo'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing page</title>
</head>
<body>
    
    <?php echo $paragrafo ?> <?php echo strlen($paragrafo) ?> <br>
    <?php echo str_replace("$parola", "(***)", "$paragrafo") ?> <?php echo strlen($paragrafo) ?>

</body>
</html>