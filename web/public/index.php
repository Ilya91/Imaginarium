<?php

include '../app/vendor/autoload.php';
$foo = new App\Acme\Foo();
phpinfo();
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Docker <?php echo $foo->getName(); ?>1</title>
    </head>
    <body>
        <h1>Docker <?php echo $foo->getName(); ?>1</h1>
    </body>
</html>
