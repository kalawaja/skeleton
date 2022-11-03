
<!doctype html>
<html>
<body>

<?php
class pi {
  public static $value = 3.14159;
}

// Get static property
echo pi::$value;
?>
 
</body>
</html>

<!-- A static property can be accessed from a method in the same class using the self keyword: -->
<!-- with the self -->

<?php
/*
class pi {
  public static $value=3.14159;
  public function staticValue() {
    return self::$value;
  }
}

$pi = new pi();
echo $pi->staticValue();
*/
?>

<!-- To call a static property from a child class, use the parent keyword inside the child class: -->
<!-- with the parent -->

<?php
/*
class pi {
  public static $value=3.14159;
}

class x extends pi {
  public function xStatic() {
    return parent::$value;
  }
}

// Get value of static property directly via child class
echo x::$value;

echo "<br>";

// or get value of static property via xStatic() method
$x = new x();
echo $x->xStatic();
*/
?>