<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Document</title>
</head>
<body>

<?php

//Regular array
$number = array('Dylan', 'Devin', 'Haley','Demi');

//echo $number[2] . "<br />";
print_r($number);
echo '<br />';
//Associative Array
$names = ["first_name" => 'Dylan', "last_name" => "Conkle"];

print_r($names);
echo '<br />' . $names['first_name'] . " " . $names['last_name'];

?>

</body>
</html>
