<div style="width: 70%; margin:auto ">

    <?php
    $files = scandir("img");
    for ($i = 2; $i < count($files); $i++) : ?>
        <?php
        if ($i % 2 == 0) {
            echo "<br>";
        }
        ?>
        <img style="width: 20%;" src="img/<?= $files[$i] ?>">
    <?php
    endfor;
    ?>
</div>



<?php

$path = $_SERVER['DOCUMENT_ROOT'] . "/img/1.jpg";
$file = fopen($path, "r");
echo  fgets($file);
?>