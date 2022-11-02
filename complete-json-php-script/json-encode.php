
<!-- This example shows how to encode an associative array into a JSON object: -->

<!doctype html>
<html>
<body>

<?php
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

echo json_encode($age);
?>

</body>
</html>

<!-- This example shows how to encode an indexed array into a JSON array: -->

<?php
/*
$cars = array("Volvo", "BMW", "Toyota");

echo json_encode($cars);
*/
?>