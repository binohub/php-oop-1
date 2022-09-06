<?php


require_once __DIR__ . '/classes/Movie.php';
require_once __DIR__ . '/classes/Actor.php';

$actors = [];
$actors[] = new Actor('conan edogawa', 8);
$actors[] = new Actor('shinici kudo', 17);
$actors[] = new Actor('axel blaze', 16);
$actors[] = new Actor('kou mabuchi', 22);
$actors[] = new Actor('thomas shelby', 37);
var_dump($actors);

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
    <h1>Actors:</h1>

    <?php foreach ($actors as $actor) { ?>

        <ul>
            <li>
                <?php

                # code...
                echo $actor->getFullname();

                ?>
            </li>
        </ul>


    <?php } ?>


</body>

</html>