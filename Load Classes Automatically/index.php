<?php
    include 'includes/autoloader.inc.php'
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>

    </head>
    <body>
        <?php

            $person1 = new Person\Person("Reamea","Black", 35);
            $DA = $person1->getDA();
            echo "Drinking Age: $DA<br>";
            Person\Person::setDrinkingAge (30);
            $newDA = $person1->getDA();
            echo "New Drinking Age: $newDA <br>";

            $house1 = new House("182","Phnom Penh");
            $street = $house1->getStreet();
            echo "Street: $street <br>";
            $city = $house1->getCity();
            echo "City: $city";


        ?>
    </body>
</html>