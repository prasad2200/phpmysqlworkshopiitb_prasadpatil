<html>
<form action='post.php' method='POST'>
    <input type='text' name='myname'>
    <input type='submit' value='enter'>

</form>
</html>

<?php

function writeName2($firstname)
{
    $name = $_POST['myname'];
    $firstname = $name;
    if($firstname)
        echo "My name is $firstname Sharma";

}

writeName2("Prasad");

?>

