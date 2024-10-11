<?php
session_start();
if ( !isset($_SESSION['email']) ) {
header("Location: login.php");
exit();
}
?>
<html>
<meta http-equiv="Content-Type"
content="text/html; charset=UTF-8" />   
</html>