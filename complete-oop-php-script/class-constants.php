
<!-- 1. We can access a constant from outside the class by using the class name followed by the scope resolution operator (::) followed by the constant name, like here: -->

<!doctype html>
<html>
<body>

<?php
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
}

echo Goodbye::LEAVING_MESSAGE;
?>

</body>
</html>

<!-- 2. Or, we can access a constant from inside the class by using the self keyword followed by the scope resolution operator (::) followed by the constant name, like here: -->

<!DOCTYPE html>
<html>
<body>

<?php
/*
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}

$goodbye = new Goodbye();
$goodbye->byebye();
*/
?>

</body>
</html>


