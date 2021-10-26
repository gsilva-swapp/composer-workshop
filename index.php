<?php
require __DIR__.'/vendor/autoload.php';

$dot_env = Dotenv\Dotenv::createImmutable(__DIR__);
$dot_env->load();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gustavo Testing Composer</title>
</head>
<body>
    <h2>Gustavo Testing Composer</h2>
    <p>
        <strong> String that will be reversed:: </strong> <?php echo $_ENV['MY_STRING']?> 
        <hr>
        <strong> It's a reversed string:: </strong> <?php echo Workspace\StringUtils::reverseString($_ENV['MY_STRING'])?>
    </p>
</body>
</html>