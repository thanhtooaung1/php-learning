<?php

// require ,include and their difference

// require('ninjas.php');
// include('ninjas.php');

require 'ninjas.php';
include 'ninjas.php';

echo 'end of php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include('content.php'); ?>
    <?php include('content.php'); ?>
    <?php include('content.php'); ?>
</body>

</html>