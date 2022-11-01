
<!-- From this page, we will access the session information we set on the first page ("start-session.php"). -->

<?php
session_start();
?>
<!doctype html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>

</body>
</html>

<!-- 
Another way to show all the session variable values for a user session is to run the following code:
-->

<?php
// session_start();
?>
<!doctype html>
<html>
<body>

<?php
// print_r($_SESSION);
?>

</body>
</html>