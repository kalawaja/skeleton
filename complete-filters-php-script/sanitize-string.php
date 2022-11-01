
<!-- FILTER_SANITIZE_STRING (int)
ID of "string" filter. (Deprecated as of PHP 8.1.0, use htmlspecialchars() or FILTER_UNSAFE_RAW instead.) -->

<!doctype html>
<html>
<body>

<?php
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
?>

</body>
</html>
