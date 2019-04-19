<?php

$kiausrakulas = 'KIAUSRAKULAS';
$zmones = rand(1, 15);
$tikimybe = (1 / $zmones) * 100;
$h2 = "JEI MUSI KIAUSINIUS SU $zmones zmonem, tavo tikimybe laimeti bus - $tikimybe %";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="nav.css">
        <title>Kiausrakulas.php</title>
        <style type="text/css">
            body {
                background-image: url('data:image/jpeg;base64,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');
                background-size: cover;
                background-repeat: no-repeat;
            }   
            .container {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <header>
            <?php include 'nav.php'; ?>
        </header>
        <div class="container">
            <h1><?php print $kiausrakulas; ?></h1>
            <h2><?php print $h2; ?></h2>
        </div>
    </body>
</html>