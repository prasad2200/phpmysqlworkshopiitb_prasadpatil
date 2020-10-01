<html>
<form action="function2.php" method='post'>
    <input type='text' name='myname'>
    <input type='submit' value='enter'>

</form>
</html>

<?php

$name = $_post['myname'];

if($name)
    echo "My name is $name Sharma";



?>

