
<!-- 1. Pass a callback to PHP's array_map() function to calculate the length of every string in an array: -->

<!doctype html>
<html>
<body>

<?php
function my_callback($item) {
  return strlen($item);
}

$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map("my_callback", $strings);
print_r($lengths);
?>

</body>
</html>

<!-- 2. Use an anonymous function as a callback for PHP's array_map() function: -->

<!doctype html>
<html>
<body>

<?php
/*
$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map( function($item) { return strlen($item); } , $strings);
print_r($lengths);
*/
?>

</body>
</html>
