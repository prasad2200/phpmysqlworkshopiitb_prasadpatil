<html>

<?php

$num1 = 6;
$num2 = 2;
$choice = "divide" ;
switch($choice)
{
    case ("add"):
        echo $num1 + $num2;
    break;

    case ("subtract"):
        echo $num1 - $num2;
    break;

    case ("multiply"):
        echo $num1 * $num2;
    break;

    case ("divide"):
        echo $num1 / $num2;
    break;

    default:
        echo "Invalid";
}

?>

</html>