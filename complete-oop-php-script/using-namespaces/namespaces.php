
<!--
# Important Note: 
A namespace declaration must be the first thing in the PHP file.
-->

<?php
namespace Html;
class Table {
  public $title = "";
  public $numRows = 0;
  public function message() {
    echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
  }
}
$table = new Table();
$table->title = "My table";
$table->numRows = 5;
?>

<!doctype html>
<html>
<body>

<?php
$table->message();
?>

</body>
</html>