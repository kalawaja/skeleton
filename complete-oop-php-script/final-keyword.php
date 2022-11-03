
<!-- 1. Prevent class inheritance: -->

<!doctype html>
<html>
<body>

<?php
final class Fruit {
}

class Strawberry extends Fruit {
}

?>
 
</body>
</html>

<!-- 2. Prevent method overriding: -->

<?php
/*
class Fruit {
  final public function intro() {
  }
}

class Strawberry extends Fruit {
  // will result in error
  public function intro() {
  }
}
*/
?>