
<!doctype html>
<html>
<body>

<?php
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}

// Call static method
greeting::welcome();
?>
 
</body>
</html>

<!-- A class can have both static and non-static methods. -->
<!-- with the self -->

<?php
/*
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }

  public function __construct() {
    self::welcome();
  }
}

new greeting();
*/
?>

<!-- Static methods can also be called from methods in other classes. -->
<!-- with the public -->

<?php
/*
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}

class SomeOtherClass {
  public function message() {
    greeting::welcome();
  }
}
*/
?>

<!-- To call a static method from a child class, use the parent keyword inside the child class. Here, the static method can be public or protected. -->
<!-- with the parent -->

<?php
/*
class domain {
  protected static function getWebsiteName() {
    return "W3Schools.com";
  }
}

class domainW3 extends domain {
  public $websiteName;
  public function __construct() {
    $this->websiteName = parent::getWebsiteName();
  }
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;
*/
?>