<?php
    include 'includes/person.inc.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>

    </head>
    <body>
        <?php

            $person1 = new Person("Reamea","Black", 35);
            $DA = $person1->getDA();
            echo "Drinking Age: $DA<br>";
            Person::setDrinkingAge (30);
            $newDA = $person1->getDA();
            echo "New Drinking Age: $newDA";
        ?>
    </body>
</html>
