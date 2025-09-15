<?php
    const NAME = "John";
    const AGE = 20;

    $output = "Hello, my name is $NAME and I am $AGE years old.";
    $outputAge = match (true) {
        AGE < 18 => "I am a minor.",
        AGE >= 18 && AGE < 65 => "I am an adult.",
        AGE >= 65 => "I am a senior citizen.",
        default => "Age is not specified."
    };
?>

<?= $outputAge; ?>