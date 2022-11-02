
<!-- 1. Throwing an Exception -->

<!doctype html>
<html>
<body>

<?php
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}

echo divide(5, 0);
?>

</body>
</html>

<!-- 2. The try...catch Statement -->

<?php
/*
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}

try {
  echo divide(5, 0);
} catch(Exception $e) {
  echo "Unable to divide.";
}

# In the example above, the type of exception is Exception and the variable name is $e.

*/
?>

<!-- 3.1 The try...catch...finally Statement -->

<?php
/*
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}

try {
  echo divide(5, 0);
} catch(Exception $e) {
  echo "Unable to divide. ";
} finally {
  echo "Process complete.";
}
*/
?>

<!-- 3.2 The try...catch...finally Statement -->

<?php
/*

# Output a string even if an exception was not caught:

function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}

try {
  echo divide(5, 0);
} finally {
  echo 'Process complete.';
}
*/
?>