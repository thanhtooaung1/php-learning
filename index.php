<?php

// Functions and variable scopes

//// function without argument
// function greet()
// {
//     echo "Good morining Sir";
// }

//// function with argument
// function greet($name)
// {
//     echo "Good moring, $name";
// }

$name = "mario";

//// global variable in function
// function greet()
// {
//     global $name;
//     $name = "gario";
//     echo "Good morning $name <br/>";
// }

//// function with pass by reference parameter
function greet(&$name)
{
    $name = 'gario';
    echo "Good morning $name <br/>";
}

greet($name);
echo $name;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>