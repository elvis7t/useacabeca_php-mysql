<?php
$message = 'Hello World';

$helloWorld = function() use($message) {
    echo strtoupper($message);
};

echo $helloWorld().PHP_EOL; // Hello World

$arrow = fn($texto) => print_r(strtoupper($texto));
echo $arrow('test');