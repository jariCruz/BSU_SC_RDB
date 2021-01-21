<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
$location = $_POST['redirect'];//link to redirect
header("Location: $location");
?>

</body>
</html>