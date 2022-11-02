
<!-- The $this keyword refers to the current object, and is only available inside methods. -->

<!-- So, where can we change the value of the $name property? There are two ways: -->

<!-- 1. Inside the class (by adding a set_name() method and use $this): -->

<!doctype html>
<html>
<body>

<?php
class Fruit {
  public $name;
  function set_name($name) {
    $this->name = $name;
  }
}
$apple = new Fruit();
$apple->set_name("Apple");

echo $apple->name;
?>
 
</body>
</html>

<!-- 2. Outside the class (by directly changing the property value): -->

<?php
/*
class Fruit {
  public $name;
}
$apple = new Fruit();
$apple->name = "Apple";

echo $apple->name;
*/
?>