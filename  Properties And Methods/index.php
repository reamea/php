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
            $person1 = new Person();
            $person1->setPerson("Reamea", "Black", "35");
            echo "$person1->name <br> $person1->eyeColor <br>$person1->age";
        ?>
    </body>
</html>
