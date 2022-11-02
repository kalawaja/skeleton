
<!-- 3. To use callback functions inside a user-defined function or method, call it by adding parentheses to the variable and pass arguments as with normal functions: -->

<!doctype html>
<html>
<body>

<?php
function exclaim($str) {
  return $str . "! ";
}

function ask($str) {
  return $str . "? ";
}

function printFormatted($str, $format) {
  // Calling the $format callback function
  echo $format($str);
}

// Pass "exclaim" and "ask" as callback functions to printFormatted()
printFormatted("Hello world", "exclaim");
printFormatted("Hello world", "ask");
?>

</body>
</html>