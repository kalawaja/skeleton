
<!-- 1. This example shows how to loop through the values of a PHP object: -->

<!doctype html>
<html>
<body>

<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$obj = json_decode($jsonobj);

foreach($obj as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>

</body>
</html>

<!-- 2. This example shows how to loop through the values of a PHP associative array: -->

<?php
/*
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$arr = json_decode($jsonobj, true);

foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
*/
?>