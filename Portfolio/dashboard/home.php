<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welcome mr. <?= (isset($_SESSION['auth_name'])) ? $_SESSION['auth_name'] : ""; ?></h1>
</body>
</html>