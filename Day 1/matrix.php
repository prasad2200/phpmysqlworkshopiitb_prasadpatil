<html>

<?php 

$mat1 = Array( '0'=>Array('0'=>1 , '1'=>2 ),'1'=>Array('0'=>3 , '1'=>4 ) );

$mat2 = Array( '0'=>Array('0'=>3 , '1'=>4 ),'1'=>Array('0'=>5 , '1'=>6 ) );


$SumArray = array() ;
$result = array() ;

for($i=0 ; $i<=1 ; $i++)
{
    for($j=0 ; $j<=1 ; $j++)
    {
        $result[$i][$j] = $mat1[$i][$j] + $mat2[$i][$j];
    }
}

echo "<pre>";
print_r($result);


?>



</html>