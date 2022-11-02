
<!-- 1. This example decodes JSON data into a PHP object: -->

<!doctype html>
<html>
<body>

<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
 
var_dump(json_decode($jsonobj));
?>

</body>
</html>

<!-- 2. This example decodes JSON data into a PHP associative array: -->

<!-- Note: The json_decode() function has a second parameter, and when set to true, JSON objects are decoded into associative arrays. -->

<?php
/*
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
 
var_dump(json_decode($jsonobj, true));
*/
?>