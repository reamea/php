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
            $person1 = new Person("Reamea", "Black", "35");
            echo $person1->getName();echo "<br>";
            echo $person1->getEyeColor();echo "<br>";
            echo $person1->getAge();
        ?>
    </body>
</html>
