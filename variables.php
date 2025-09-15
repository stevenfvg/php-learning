<?php
    $name = "John";
    $age = 30;
    $is_student = false;

    var_dump($name);
    var_dump($age);
    var_dump($is_student);
?>

<?= "<p>Name: $name</p>"; ?>
<?= "<p>Age: $age</p>"; ?>
<?= "<p>Is Student: " . ($is_student ? 'Yes' : 'No') . "</p>"; ?>